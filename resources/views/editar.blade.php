@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="row">
            <h3 class="text-muted">Editar Usuario</h3>
            <br>
            <form action="{{route('update',$datosuser->id)}}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label + class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{$datosuser->name}}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"  required value="{{$datosuser->email}}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Rol</label>
                    <input type="text" class="form-control" id="rol" name="rol"  required value="{{$datosuser->rol}}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Acceso</label>
                    <input type="text" class="form-control" id="acceso" name="acceso"  required value="{{$datosuser->acceso}}">
                </div>
                <a href="{{ route('ControlUsuarios') }}"class="btn btn-outline-secondary">Regresar</a>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
       </div>
    </div>
   
@endsection