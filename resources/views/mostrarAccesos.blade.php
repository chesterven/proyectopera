@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">¡Listado usuarios!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <h1 align="center"><span class="badge badge-secondary">Listado de usuarios</span></h1>
                    <table id="users" class="table">
                        <caption>Lista de usuarios.</caption>
                        <thead>
                            <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Ver accesos</th>
                            </tr>
                        </thead>
                       
                        
                        <tbody>
                        @foreach ($usuarios as $usuario)
                        @if($usuario->name=="admin")
                        @else
                            <tr>
                            <th scope="row"> {{$usuario->name}}</th>
                         
                           
                            <td>{{$usuario->email}}</td>
                           <td><a href="{{ route('detalle.accesos',
           ['id'=> $usuario->id])}} "
class="btn btn-info btn-sm">Ver detalle de accesos</a></th>
                            </tr>
                            @endif
                    
                    @endforeach
                    
                        </tbody>
                       
                      
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
            $(document).ready(function() {
                $('#users').DataTable();         
            });
        </script>
<br>
<br>
@endsection