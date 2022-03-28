<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCode;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    //
    public function traemelo(Request $request){
        $code = $request->codigo;
        $file = Storage::disk('do_spaces')->get('/codigos/'.$code.'.txt');

        return response($file,200);
    }
}
