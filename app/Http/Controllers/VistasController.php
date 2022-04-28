<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StorecitasRequest;
use App\Http\Requests\UpdatecitasRequest;
use Illuminate\Http\Request;

class VistasController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function citas()
    {
        return view('citas');
    }
    public function controlusuarios()
    {
        $datosuser = User::all();
        return view('controlusuarios',compact('datosuser'));
    }
    
    public function showUser($id)
    { 
        $usuario = Auth()->user()->rol;
        if($usuario == 3){
            $datosuser = User::find($id);
            return view('eliminar', compact('datosuser'));
        }else{
            return redirect()->route('COntrolUsuarios')->with('No tienes permiso');
        }
        
    }
    public function destroyUser($id)
    {
        $usuario = Auth()->user()->rol;
        if($usuario == 3){
        $datosuser = User::find($id);
        $datosuser->delete();
        return redirect()->route('ControlUsuarios')->with("success","¡Eliminado con exito!");
    }else{
        return redirect()->route('COntrolUsuarios')->with('No tienes permiso');
    }
    }
    public function editUser($id)
    {
        $usuario = Auth()->user()->rol;
        if($usuario == 3){
        $datosuser = User::find($id);
       // return view('ControlUsuarios')->with("success","¡Eliminado con exito!");
        return view('editar', compact('datosuser'));
        }else{
            return redirect()->route('COntrolUsuarios')->with('No tienes permiso');
        }
    }

    public function update(Request $request, $id)
    {
        $datosuser = User::find($id);
        $datosuser -> name = $request->post('name');
        $datosuser -> email = $request->post('email');
        $datosuser -> rol = $request->post('rol');
        $datosuser -> acceso = $request->post('acceso');
        $datosuser -> save();

        return redirect()->route('ControlUsuarios')->with("success","¡Editado correctamente!");

        
    }

   
}
