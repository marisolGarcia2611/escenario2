@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="card">
    <h5 class="card-header bg-dark text-light">Confirmacion de Super Usuario</h5>
   <div class="card-body">
        <p class="card-text">
        <div class="alert" role="alert">
            Favor de pedir el token de validacion a tu supervisor

            <form action="{{route('validatetoken')}}" method="POST">
                @csrf
                <input type="text" name="id" hidden value="{{$cita}}">
                Token:
                <input type="text" name="token"  id="token">
                
                <button class="btn btn-outline-dark">Eliminar</button>
            </form>


        </div>


        </p>
  </div>
</div>
    </div>

</div>

@endsection