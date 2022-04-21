@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-6">
             <h1 class="text-muted">Usuarios</h1>
         </div>
     </div>
    <div class="row scroll">
            <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rol</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Empleado</td>
            <td>
            <button class="btn btn-outline-dark">Eliminar</button>
            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Empleado</td>
            <td>
            <button class="btn btn-outline-dark">Eliminar</button>
            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
            </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Ted</td>
            <td>Cliente</td>
            <td>
            <button class="btn btn-outline-dark">Eliminar</button>
            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <form>
                    <legend>Editar</legend>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" placeholder="Introduzca el nuevo nombre" id="exampleInputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputRol" class="form-label">Rol:</label>
                        <input type="text" class="form-control" id="exampleInputRol" placeholder="Introduzca el nuevo rol" aria-describedby="rolHelp">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo.</label>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>
                    </form>

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
        <div class="row">
            <div class="card text-center">
            <div class="card-header">
            Generador de llaves automatico
            </div>
            <div class="card-body">
                <br>
                <a href="#"  class="col-md-8 btn btn-dark">Crear</a>
                <br>
                <br>
                <p class="fw-bold">Código: <p class="card-text fw-lighter">**********</p></p>              
            </div>
            <div class="card-footer text-muted fw-lighter">
                Aviso: Esta llave es solo de un uso y expira en poco tiempo.
            </div>
            </div>
        </div>
</div>

@endsection