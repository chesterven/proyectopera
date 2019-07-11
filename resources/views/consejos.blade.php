@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">¡Consejos!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 align="center"><span class="badge badge-secondary">Consejos</span></h1>

                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            APLICACIONES MÓVILES PARA ORGANIZAR TUS ACTIVIDADES
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body justificar">
                           Otra forma muy práctica de organizarse las tareas es utilizando aplicaciones gratuitas que dispongan de calendarios en el que puedas agregar los horarios de clase, asi como las fechas de entrega de examenes y guardar las asignaturas lo que ayuda a identificar las actividades. Te compartimos las siguientes opciones:
                            <br>
                            
                            
                            <div class="row mx-md-n3">
                            
                            
                            <div class="col px-md-5"><div class="p-2 border bg-light">
                            <div class="card" style="width: 27rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Agenda Escolar</h5>
                                   
                                    <p class="card-text">School Planner es una aplicación práctica para estudiantes de todas las edades que fue diseñada para ayudarte a organizar tu carrera como estudiante y tener todo bajo control.</p>
                                    <a href="https://play.google.com/store/apps/details?id=daldev.android.gradehelper&hl=en" class="card-link">Descargar app</a>
                                    
                                </div>
                             </div>
                             </div>
                             </div> 
                          
                            

                            
                            <div class="col px-md-5"><div class="p-2 border bg-light">  
                            <div class="card" style="width: 26.5rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Notas U</h5>
                                   
                                    <p class="card-text">Notas U es una aplicación llena de herramientas con una hermosa e intuitiva interfaz, rápido y fácil de usar, organiza tu vida académica.</p>
                                    <a href="https://play.google.com/store/apps/details?id=com.notasu&hl=es" class="card-link">Descargar app</a>
                                    
                                </div>
                             
                             </div></div></div>
                             </div>
                           

                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             HAZ GRUPOS DE ESTUDIO
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body justificar">
                          Es un consejo y casi una obligación. Es bueno contar con un buen grupo con el que puedas colaborar y ayudar mutuamente es algo muy positivo. Apuntes, fechas de exámenes, trabajos... serán muchas las ocasiones en las que agradezcas tenerlos cerca.
                            <br>
                         
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              ORGANIZA TU TIEMPO
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body justificar">
                          A diferencia de la escuela, nadie estará vigilándote ni vigilando lo que hagas, así que tú mismo tendrás que encargarte de hacerlo. Prioriza cada evento y asignación con base en el tiempo que pueda tomarte y en cuál te ayudará a alcanzar tus objetivos trazados. 
                          </div>
                        </div>
                      </div>
                    </div>

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