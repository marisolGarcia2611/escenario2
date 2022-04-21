@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
         <div class="col-md-6">
             <h1 class="text-info">Bienvenido a Maemm.xyz</h1>
             <h4 class="text-muted">Dating service</h4>
         </div>
         <div class="col-md-4 d-none d-md-block">
         <img src="assets/intercambio.png" class="img card-img-top" alt="...">
         </div>
     </div>
    </div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light">
                <div class="card-header fw-bold">{{ __('Dashboard') }}</div>

                <div class="card-body color">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
