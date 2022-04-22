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
        $datosuser = User::find($id);
        return view('eliminar', compact('datosuser'));
    }
    public function destroyUser($id)
    {
        $datosuser = User::find($id);
        $datosuser->delete();
        return redirect()->route('ControlUsuarios')->with("success","¡Eliminado con exito!");

    }
    public function editUser($id)
    {
        $datosuser = User::find($id);
       // return view('ControlUsuarios')->with("success","¡Eliminado con exito!");
        return view('editar', compact('datosuser'));
    }

    public function update(Request $request, $id)
    {
        $datosuser = User::find($id);
        $datosuser -> name = $request->post('name');
        $datosuser -> email = $request->post('email');
        $datosuser -> rol = $request->post('rol');
        $datosuser -> save();

        return redirect()->route('ControlUsuarios')->with("success","¡Editado correctamente!");

        
    }
}
