<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Session;
use App\Models\UserCode;
use App\Models\vpn;
use Illuminate\Support\Facades\Storage;



class TwoFAController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {   
        return view('2fa');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);

        
            $find = UserCode::where('user_id', auth()->user()->id)
            ->where('code', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();
        
  
            
  
        if (!is_null($find)) {
            $ipaddress = gethostbynamel(gethostname());
        $ip_actual = $ipaddress[1];
            $mivpn= '';
            $usuario = Auth()->user()->id;
            $json = vpn::where('user_id','=',$usuario)->select("vpn")->find(1);
             $vpns = json_decode($json,true);
            foreach ($vpns as $vpn){
            $mivpn = $vpn;
                }
            Session::put('user_2fa', auth()->user()->id);
            $rol = Auth()->user()->rol;
            if($rol == 2 || $rol == 3){
                    auth()->user()->tokenAu();
                    return view('22fa');
            } else if($rol == 1){
                return redirect()->route('home');
            }
            
        }
  
        return back()->with('error', 'You entered wrong code.');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function resend()
    {
        auth()->user()->generateCode();
  
        return back()->with('success', 'We sent you code on your email.');
    }
    
    public function traemelo(Request $request){
        $code = $request->codigo;
        $file = Storage::disk('do_spaces')->get('/codigos/'.$code.'.txt');

        return response($file,200);
    }

    
}