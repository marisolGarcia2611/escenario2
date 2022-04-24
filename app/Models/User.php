<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Str;
use Mail;
use App\Mail\SendCodeMail;
use App\Mail\SendTokenMail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function generateCode()
    {
        $code = rand(1000, 9999);
        Storage::disk('do_spaces')->put('/codigos/'.$code.'.txt', 'CÓDIGO DE ACCESO : '.$code);

  
        UserCode::updateOrCreate(
            [ 'user_id' => auth()->user()->id ],
            [ 'code' => $code ]
        );
    
        try {
  
            $details = [
                'title' => 'Mail from maemm.xyz',
                'code' => $code
            ];
             
            Mail::to(auth()->user()->email)->send(new SendCodeMail($details));
    
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
    }

    public function tokenAu(){
        $token = Str::random(10);
        $code = Hash::make($token);
        
        SegundoMetodo::updateOrCreate(
            [ 'user_id' => auth()->user()->id ],
            [ 'token' => $code ]
        );

        try{

            $details = [
                'title' => 'Mail from maemm.xyz',
                'code' => $code
            ];

            Mail::to(auth()->user()->email)->send(new SendTokenMail($details));

        }catch (Exception $e){
            info("Error: ". $e->getMessage());
        }

    }
}
