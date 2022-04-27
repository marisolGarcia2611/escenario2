<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\citas;
use App\Http\Requests\StorecitasRequest;
use App\Http\Requests\UpdatecitasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function citas()
    {
        return view('citas');
    }
    public function controlcitas()
    {
        $datos = Citas::all();
        return view('controlcitas', compact('datos'));
    }

    public function index(Request $request)
    {
        $cita = $request->id;
        return view('citadelte', compact('cita'));
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
     * @param  \App\Http\Requests\StorecitasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citas = new Citas;
        $citas->descripcion=$request->post('descripcion');
        $citas->hora=$request->post('hora');
        $citas->fecha=$request->post('fecha');
        $citas->save();
        return redirect()->route("citas")->with("success","¡Cita agendada con éxito!, espere confirmación.");
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecitasRequest  $request
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecitasRequest $request, citas $citas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Auth()->user()->rol;
        if($usuario == 3){
            $dcita = citas::find($id);
            $dcita->delete();
            return redirect()->route('ControlCitas')->with("success","¡Eliminado con exito!");
        } else{
            return redirect()->route('validacion', compact('id'));
        }
        

    }

    
}
