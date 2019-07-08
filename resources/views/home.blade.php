@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Bienvenido!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Página de refuerzo académico</center>
                    <img src="img/home.png" class="img-thumbnail" alt="imagen inicial">
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
