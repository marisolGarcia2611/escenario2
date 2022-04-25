@extends('layouts.codigo')
  
@section('content')
<div class="alert" role="alert">
<div class="alert alert-danger" role="alert">
    No estas en VPN{{$mivpn}}}{{$ip_actual}}
</div>
</div>
@endsection