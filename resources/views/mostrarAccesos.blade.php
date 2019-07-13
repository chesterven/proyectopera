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
                    <table class="table">
                        <caption>Lista de accesos a los refuerzos.</caption>
                        <thead>
                            <tr>
                            <th scope="col">Refuerzo</th>
                            <th scope="col">Usuario</th>
                            </tr>
                        </thead>
                        @foreach ($refuerzos as $refuerzo)
                        @if($refuerzo->name=="admin")
                        @else
                        
                        <tbody>
                            <tr>
                            <th scope="row"> {{$refuerzo->name}}</th>
                            @foreach($refuerzo->reinforcements as $refuerzoUsuario)
                           
                            <td>{{$refuerzoUsuario->nombre}}</td>
                            @endforeach
                            </tr>
                        </tbody>
                       
                        @endif
                    
                    @endforeach
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">

</div>
<br>
<br>
@endsection