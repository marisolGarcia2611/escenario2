@extends('layouts.codigo')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info text-light">
                <div class="card-header fw-bold">Verificación 3</div>
  
                <div class="card-body bg-light text-muted">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <h1 class="text-info">Esperando confirmación de acceso</h1>
                                <h5 class="text-muted">Instrucción: Para acceder tendrás dirijirte a tu App Móvil y permitir el acceso. </h5>
                            </div>
                            <div class="col-md-5 d-none d-md-block">
                            <img src="assets/supervision.png" class="card-img-top" style="width: 400px;height:400px;" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection