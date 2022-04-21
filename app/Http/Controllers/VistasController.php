<?php

namespace App\Http\Controllers;

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
    public function controlcitas()
    {
        return view('controlcitas');
    }
    public function controlusuarios()
    {
        return view('controlusuarios');
    }
}
