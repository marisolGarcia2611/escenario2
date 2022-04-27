<?php
   
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCode;
use App\Models\User;
use Illuminate\Support\Facades\DB;
  
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
  
    /** 
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
     
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

             $user = Auth::user();
             $token = md5(time()). '.' .md5($request->email);
             $user->forceFill([
             'api_token'=>$token,
              ])->save();
              auth()->user()->generateCode();
            return redirect()->route('2fa.index');
        }
    
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');      
    }
    public function login2(Request $request)
    {
        $credentials= $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           $user = Auth::user();
           $token =md5(time()). '.' .md5($request->email);
           $user->forceFill([
             'api_token'=>$token,
            ])->save();
  
            return response()->json([
                'token'=>$token
            ]);
        }

        return response()->json([
            'message'=>'The provided credentials do not match our records'
        ],401);
    
    }
    public function acceso(Request $request,$token)
    {
     
        $user = DB::table('users')->where('api_token', $token)->first();
        $usuario=$user->id;
        $datosuser = User::find($usuario);
        $datosuser ->acceso = $request->post('acceso');
        $datosuser -> save();
        $message='otorgado';
        return response()->json([
         'message'=>$message]);    

    }
  
}