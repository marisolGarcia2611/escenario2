<?php

namespace App\Http\Controllers;

use App\Models\tokenU;
use App\Models\citas;
use App\Models\tokenV;
use App\Models\vpn;
use Illuminate\Http\Request;
use App\Http\Requests\StoretokenVRequest;
use App\Http\Requests\UpdatetokenVRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TokenVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token = '';
        $mivpn = '';
        $ipaddress = gethostbynamel(gethostname());
        $ip_actual = $ipaddress[1];
        $usuario = Auth()->user()->id;
        $rol = Auth()->user()->rol;
        $json = vpn::where('user_id','=',$usuario)->select("vpn")->find(1);
             $vpns = json_decode($json,true);
            foreach ($vpns as $vpn){
            $mivpn = $vpn;
                }
        if($rol == 3){
            $token = Str::random(10);
            $tokenh = base64_encode ($token);
            tokenV::create([
                'user_id' => $usuario,
                'tokenA' => $tokenh,
            ]);
            tokenU::create([
                'user_id' => 0,
                'token' => $tokenh,
                'fecha' => '1999-01-01',
                'super_id' => $usuario
            ]);
            return view("token", compact('token'));//->with("success","Token:".$token);
                
            //return redirect()->route("ControlUsuarios")->with('el token es: '. $token. ' copialo y muestraselo al solicitante (unico uso)');
        } else {
            return view("token", compact('token'));
        }
      //  return view('token');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretokenVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tokenV  $tokenV
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tokenV  $tokenV
     * @return \Illuminate\Http\Response
     */
    public function edit(tokenV $tokenV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetokenVRequest  $request
     * @param  \App\Models\tokenV  $tokenV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetokenVRequest $request, tokenV $tokenV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tokenV  $tokenV
     * @return \Illuminate\Http\Response
     */
    public function destroy(tokenV $tokenV)
    {
        //
    }

    public function deletecitaT(Request $request){
        $request->validate([
            'token' => 'required',
            'id' => 'required',
        ]);
        $user = Auth()->user()->id;
        $tokenh = base64_encode($request->token);
        $find = tokenV::where('tokenA','=',$tokenh)->first();
        if(!is_null($find)) {
            $find->delete();
            tokenU::where('token', '=', $tokenh)
            ->update(['user_id' => $user]);
             tokenU::where('token', '=', $tokenh)
            ->update(['fecha' => ''.date("Y-m-d").'']);
           
            $dcita = citas::find($request->id);
            $dcita->delete();
            return redirect()->route('ControlCitas')->with("success","¡Eliminado con exito!");
        }else{
            return redirect()->route('ControlCitas')->with("danger","¡No se encontro registro!");
        }
    }

}
