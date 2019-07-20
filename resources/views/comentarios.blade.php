@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div id="app">

              @include('flash-message')
              @yield('content')

            </div>
                <div class="card-header">Envianos tu comentario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  


<form action="/comentarios/mensaje" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecciona una opción</label>
    <select class="form-control" id="exampleFormControlSelect1" name="seccion">
    <option value="Lectura">Lectura</option>
      <option value="Atención y concentración">Atención y concentración</option>
      <option value="Memoria">Memoria</option>
      <option value="Sínstesis"> Sínstesis</option>
      <option value="En general" >En general</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentario:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario"rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



</div>
    </div>
</div>
<div class="text-center">

</div>
<br>
<br>
@endsection
