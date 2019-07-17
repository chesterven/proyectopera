@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">¡Registro de accesos!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <h1 align="center"><span class="badge badge-secondary">Registro de accesos</span></h1>
                    <table id="users" class="table">
                        <caption>Lista de accesos a los refuerzos.</caption>
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
                           <td>Ver detalle de accesos</th>
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