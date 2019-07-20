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
                <div class="card-header">Mensaje administrador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  


<form action="/comentarios/mensajeAdmin" method="POST">
{{ csrf_field() }}
  
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Asunto:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="asunto">
    </div>
  </div> 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentario:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario"rows="3"></textarea>
  </div>
  <input type="hidden" name="id" value="{{$id}}">
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
