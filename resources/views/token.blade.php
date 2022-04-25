@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <h5 class="card-header bg-dark text-light">Token</h5>
                <div class="card-body">
                    <p class="card-text">
                    <div class="alert" role="alert">
                        @if (!empty($token))
                            Token generado
                            <div class="alert alert-success" role="alert">
                                Este es tu Token: {{ $token }}
                            </div>
                        @else
                            <div class="alert alert-danger" role="alert">
                                No estas en VPN
                            </div>
                        @endif
                    </div>

            

                        <a href="{{ route('ControlUsuarios') }}" class="btn btn-outline-secondary">Regresar</a>

        





                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
