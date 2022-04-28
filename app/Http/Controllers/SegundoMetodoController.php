<?php

namespace App\Http\Controllers;

use App\Models\SegundoMetodo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSegundoMetodoRequest;
use App\Http\Requests\UpdateSegundoMetodoRequest;
use App\Models\User;
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
            $find = SegundoMetodo::where('user_id', auth()->user()->id)
            ->where('token', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();

            if(!isNull($find)){
                
               
                
            }
    }

    public function otro(Request $request){
        $rol = Auth()->user()->rol;
        
        if($rol == 3){
            return redirect()->route('soket');
            }else if($rol == 2){
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
