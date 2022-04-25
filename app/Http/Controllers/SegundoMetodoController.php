<?php

namespace App\Http\Controllers;

use App\Models\SegundoMetodo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSegundoMetodoRequest;
use App\Http\Requests\UpdateSegundoMetodoRequest;
use App\Models\vpn;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class SegundoMetodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('22fa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSegundoMetodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);
            $mivpn='';
            $rol = Auth()->user()->rol;
            $ipaddress = gethostbynamel(gethostname());
            $ip_actual = $ipaddress[1];
            $id= Auth()->user()->id;
            $json = vpn::where('user_id','=',$id)->select("vpn")->find(1);
             $vpns = json_decode($json,true);
            foreach ($vpns as $vpn){
            $mivpn = $vpn;
                }
        
            $find = SegundoMetodo::where('user_id', auth()->user()->id)
            ->where('token', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();

            if(!isNull($find)){
                if($rol == 3){
                    
                } else if($rol == 3  && $mivpn==$ip_actual){
                    return route('home');
                }
                return route('home');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SegundoMetodo  $segundoMetodo
     * @return \Illuminate\Http\Response
     */
    public function show(SegundoMetodo $segundoMetodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SegundoMetodo  $segundoMetodo
     * @return \Illuminate\Http\Response
     */
    public function edit(SegundoMetodo $segundoMetodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSegundoMetodoRequest  $request
     * @param  \App\Models\SegundoMetodo  $segundoMetodo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSegundoMetodoRequest $request, SegundoMetodo $segundoMetodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SegundoMetodo  $segundoMetodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(SegundoMetodo $segundoMetodo)
    {
        //
    }

    public function resend()
    {
        auth()->user()->tokenAu();
  
        return back()->with('success', 'We sent you code on your email.');
    }
}
