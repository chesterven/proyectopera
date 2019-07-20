@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Usuario: {{$usuario->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <h1 align="center"><span class="badge badge-secondary">Detalle de secciones vistas</span></h1>
                   
                
                    <ul class="list-group" >
                   @foreach($usuario->reinforcements as $refuerzo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$refuerzo->nombre}}
                        <span class="badge badge-primary badge-pill">  {{$refuerzo->pivot->n_ingresos}}</span>
                    </li>
                   @endforeach
                    </ul>
                    <br>
                    <a href="{{ route('mensajeAdmin', ['id'=> $usuario->id])}} " class="btn btn-info btn-sm">Enviar mensaje a {{$usuario->name}}</a>
                 
                </div>
              
            </div>
           
        </div>
    </div>
</div>
<br>
<br>
@endsection