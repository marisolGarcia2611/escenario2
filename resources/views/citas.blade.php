@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
     <div class="col-md-12 col">
          <div class="card text-white bg-info">
              <div class="card-header text-center">
                A g e n d a r  C i t a
              </div>
              <div class="bg-light text-muted card-body">
                <h3 class="card-title">Cita</h3>
                <form col-md-5>

                  <div class="row">
                    <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Concepto de cita:</label>
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Introduzca el motivo de su cita</label>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Hora</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Elija la hora mas coveniente.</div>
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Elija la fecha mas coveniente.</div>
                    </div>
                 </div>
                 <br>
                  <div class="row">
                    <div class="col-md-12 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <small class="form-check-label" for="exampleCheck1">Estoy de acuerdo con esperar a que se acepte mi cita</small>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                    <button type="submit" class="col-md-12 btn btn-outline-info">Solicitar</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-light text-center">
                M A E M M 
              </div>
          </div>
        </div>
        
     </div> 
        <br>
        <br>
        <br>

    <div class="row">
        <hr>
        <div class="col-md-12"><h3 class="text-muted">Historial</h3></div>

    </div>
    <br>
    <br>
    <div class="row scroll">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Cita</th>
            <th scope="col">Hora y Fecha</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>


    </div>
@endsection