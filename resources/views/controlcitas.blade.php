@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
         <div class="col-md-6">
             <h1 class="text-muted">Control de Citas</h1>
         </div>
     </div>
    <div class="row scroll2">
            <table class="table table-striped table-responsive">
        <thead>
            <tr>
            <th scope="col">Cita</th>
            <th scope="col">Hora</th>
            <th scope="col">Fecha</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($datos as $item)
                <tr>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->hora}}</td>
                <td>{{$item->fecha}}</td>
                <td><button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                </tr>
            @endforeach

        </tbody>
        </table>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <p class="text-muted"> Para continuar introduzca el código de aprobación, propocionado por su superior.</p>
                   <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Código de acceso:</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                        </span>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-dark">Save changes</button>
                </div>
                </div>
            </div>
            </div>




        <br>
        <br>
        <br>



        

    <!--<div class="row">
        
        <div class="col-md-12"><h2 class="">Historial</h2></div>

    </div>
    <br>
    <br>
    <div class="row scroll" >
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Usuario</th>
            <th scope="col">Cita</th>
            <th scope="col">Hora y Fecha</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>...</td>
            <td>4:00 pm 10/09/2022</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>...</td>
            <td>4:00 pm 10/09/2022</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>...</td>
            <td>4:00 pm 10/09/2022</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>

     <div class="row">
         <div class="col-md-6">
         </div>
     </div>
    </div>-->

@endsection
