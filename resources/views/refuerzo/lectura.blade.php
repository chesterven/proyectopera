@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">La lectura</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 align="center"><span class="badge badge-secondary">LA LECTURA</span></h1>
                    <br>
                
                  
                    <p class="text-justify">La lectura supone la práctica más importante para el estudio. Es el paso previo, la forma general de entrar en contacto con un tema, a menos que los medios audiovisuales suplieran esa función.</p>
                    <p class="text-justify">A grandes rasgos la lectura puede ser definida como un proceso en el cual se distinguen los siguientes momentos:</p>
                    <center><img src="/img/cuadrolectura.png" class="img-thumbnail" alt="imagen inicial"></center>
                    <br>
                    <p class="text-justify">Estas dos últimas fases indicadas, <i>Contrastar el texto con el propio pensamiento</i> y <i>Evaluar lo leído</i>, hacen referencia fundamentalmente a la lectura crítica. En el nivel universitario en el que nos movemos, este tipo de lectura crítica adquiere un peso específico para conseguir un aprendizaje significativo, pues implica establecer una relación de lo conocido (conocimientos previos) con la nueva información que se nos expone.</p>
                    <p class="text-justify">Veamos dos aspectos fundamentales relacionados con la lectura:</p>
                    <br>
                    
                    <p class="h5 colorparrafo"><strong>LA COMPRESIÓN LECTORA:</strong></p>
                    <br>
                    <h6>
          
                      <div class="card bg-light mb-3" style="max-width: 70rem;" >
                        <div class="card-header"><strong>Método SQ3R</strong></div>
                        <div class="card-body justificar">
                          <p class="card-text">Un método clásico para ayudarnos a lograr una mejor comprensión lectora es el SQ3R (en inglés: <i>Survey, Question, Read, Repite, Review</i>). Veamos brevemente en qué consiste cada fase:</p>
                          <p class="card-text">-<strong>Examinar (Survey):</strong> lograr una visión general del conjunto. El examen debe ser rápido, sin detenernos en detalles, buscando los planteamientos e ideas generales.</p>
                          <p class="card-text">-<strong>Preguntar (Question):</strong> saber qué es lo que se espera del texto. Las preguntas favorecen el aprendizaje, ya que convierten lo que leemos en algo con un significado especial para nosotros.</p>
                          <p class="card-text">-<strong>Leer (Read):</strong> de forma activa, facilitando de esta manera tanto la comprensión del tema como el recuerdo. Esto significa fijarse en los términos importantes, en los términos nuevos, en lo subrayado, etc. Es necesario leer todo: texto, citas, recuadros, gráficos, ilustraciones, etc.</p>
                          <p class="card-text">-<strong>Repetir (Repite):</strong> un 50% de la lectura se olvida nada más concluirla. Repetir con las propias palabras el material leído ayuda a la retención.</p>
                          <p class="card-text">-<strong>Repasar (Review):</strong> hay que comprobar que se ha entendido y asimilado todo el material que interesa. Es necesario releer y aprovechar las notas, esquemas o resúmenes que se tengan.</p>
                        </div>
                      </div>
                      <div class="card bg-light mb-3" style="max-width: 70rem;">
                        <div class="card-header colocard">COME LAS VERDURAS ANTES DEL POSTRE</div>
                        <div class="card-body justificar">
                         
                          <p class="card-text">- Cuando sientas que disminuye tu concentración establece un objetivo limitado, concreto: una página más, dos ejercicios más, etc. Si al alcanzar este objetivo ya has recuperado la concentración, aprovecha y sigue, si no es así, déjalo al alcanzarlo.</p>
                          <p class="card-text">- La ventaja de esta estrategia es que es una tarea que has de cumplir en vez de un tiempo que ha de transcurrir y eso es más fácil de controlar.</p>
                        </div>
                      </div>
                      
                      <div class="card bg-light mb-3" style="max-width: 70rem;" >
                        <div class="card-header">EL MÉTODO DEL NSA/HAC</div>
                        <div class="card-body justificar">
                          <h5 class="card-title">(¡No te sientes ahí, haz algo!)</h5>
                          <p class="card-text">- Las caídas de concentración suelen producirse cuando no estás haciendo algo que no es lo suficientemente activo o comprometedor así que debes aumentar tu nivel de actividad cuando sientas que te desconcentras.</p>
                          <p class="card-text">- Cuidado con el síndrome de los ojos cristalinos ( leer sin saber lo que lees y no darte ni cuenta hasta que pasan varias hojas)</p>
                          <p class="card-text">- Es muy importante que estés alerta con respecto a ti mismo y detectes cuanto antes tus bajones de atención para decirte a ti mismo o misma que regreses a la tarea.</p>
                          <p class="card-text">- Actividades que te pueden ayudar a aumentar tu actividad en el estudio: Subrayar, hacer señales o escribir en los márgenes, resumir, parafrasear oralmente o por escrito, formar asociaciones con imágenes, construir reglas mnemotécnicas, plantear preguntas y dar respuestas, imaginarte enseñando a otra persona, hacer diagramas de relaciones entre partes del texto, hacer mapas mentales, conceptuales, etc</p>

                        </div>
                      </div>
                      
                      
            </div>
        </div>
    </div>
</div>

<br>
<br>
@endsection