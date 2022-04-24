@extends('layouts.codigo')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info text-light">
                <div class="card-header fw-bold">2FA Verification</div>
  
                <div class="card-body bg-light text-muted">
                    <form method="POST" action="{{ route('fa.post') }}">
                        @csrf
            
                        <p class="text-center">We sent a Mail to your email : {{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -2) }}</p>
  
                        @if ($message = Session::get('success'))
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                      <strong>{{ $message }}</strong>
                                  </div>
                              </div>
                            </div>
                        @endif
  
                        @if ($message = Session::get('error'))
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                      <strong>{{ $message }}</strong>
                                  </div>
                              </div>
                            </div>
                        @endif
  
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-left">Favor de Verificar la liga que se mandó a su correo</label>
  
                            
                        </div>
  
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-link" href="{{ route('fa.resend') }}">Resend Code?</a>
                            </div>
                        </div>
  
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-info">
                                    Submit
                                </button>
  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection