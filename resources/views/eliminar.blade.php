@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="card">
    <h5 class="card-header bg-dark text-light">Eliminar usuario</h5>
   <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de eleminar este usuario?

            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Rol</th>
                    </tr>
                </thead>
                <tbody>
                  
                        <tr>
                        <td>{{ $datosuser->name}}</td>
                        <td>{{ $datosuser->email}}</td>
                        <td>{{ $datosuser->rol}}</td>
                        </tr>
                    

                </tbody>
            </table>
            <hr>
            <form action="{{route('destroyUser',$datosuser->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('ControlUsuarios') }}"class="btn btn-outline-secondary">Regresar</a>
                <button class="btn btn-outline-dark">Eliminar</button>
            </form>


        </div>


        </p>
  </div>
</div>
    </div>

</div>

@endsection