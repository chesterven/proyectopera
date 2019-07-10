@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Atención y concentración</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 align="center"><span class="badge badge-secondary">MEMORIA.</span></h1>
                    <br>
                    <br>
                    <p class="h5">Tu memoria funciona bien con:</p>

                    <p class="text-justify">Lo <strong>sorprendente</strong>, lo que no es habitual. Si ves a un perro en bañador en la playa te acordarás con más facilidad que si ves a un amigo en bañador en la playa... pero tu memoria es la misma en los dos casos.</p>
                    <p class="text-justify">Lo <strong>necesario</strong>: aquello a lo que le vemos utilidad y aquello que relacionamos con hechos significativos.</p>
                    <p class="text-justify">Los discursos, las  <strong>historias</strong> más que con palabras sueltas. Si te cuento una historia con nueve palabras clave, al tiempo, las recordarás mejor que si te las digo sueltas y sin conexión... pero tu memoria es la misma en los dos casos.</p>
                    <p class="text-justify">La <strong>música.</strong> De hecho cuando memorizas tiendes a canturrear lo que quieres que permanezca en la mente, si no lo haces te cuesta más... pero en los dos casos tu memoria sigue siendo la misma.</p>

                    <br>
                    <br>
                    <p class="h5">Puedes utilizar las siguientes téncicas:</p>
                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            Mostrar Repetición
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Repetición</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Es una estrategia más de memorización. Funciona bien para la memoria a corto plazo pero si no va acompañada del repaso y el recuerdo se olvida a medio plazo. La repetición combinada con estrategias de repaso y recuerdo ( las tienes en el siguiente apartado) es útil y positiva.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>




                             <!-- Button trigger modal -->
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reglas">
                            Mostrar reglas de asociación
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="reglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Reglas de asociación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Cuando memorizamos comprensivamente y asimilamos nuevos conceptos e ideas, se crean nuevas conexiones entre nuestras células cerebrales; es decir, asociamos información que ya teníamos con otra nueva. Si este proceso que utiliza nuestro cerebro de manera natural lo hacemos explícito, lo favorecemos.
                                Asociar conceptos nuevos a otros ya conocidos, crear enlaces sorprendentes y creativos, porque las palabras tengan una vinculación fonética o sean similares en cuanto a su significado, ayuda a retener información.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acros">
                            Mostrar acrósticos
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="acros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Acrósticos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Es una técnica concreta de las reglas de asociación. Consiste en crear una palabra nueva, normalmente conocida, con la inicial de cada una de las palabras que deseamos retener.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>




                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#musica">
                            Mostrar musicar nombres
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="musica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Musicar nombres</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                De manera natural parece que cuando tendemos a memorizar mediante la repetición imprimimos cierta musicalidad al discurso; ello es útil puesto que activamos nuestro hemisferio cerebral derecho al tiempo que el izquierdo y multiplicamos nuestra capacidad retentiva.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                   
                                </div>
                                </div>
                            </div>
                            </div>


                             <!-- Button trigger modal -->
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enlace">
                            Mostrar enlace narrativo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="enlace" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Enlazar usando la narración</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Es una técnica útil de memoria, sobre todo, si la unimos a la creación de imágenes mentales a medida que vamos enlazando las palabras clave que deseamos memorizar.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>


                </div>
             </div>
        </div>
    </div>
</div>


<br>
<br>
@endsection