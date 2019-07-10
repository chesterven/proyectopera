@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ATENCIÓN Y CONCENTRACIÓN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 align="center"><span class="badge badge-secondary">ATENCIÓN Y CONCENTRACIÓN</span></h1>
                    <br>
                    
                    
                    <p class="text-justify"><strong>- Factores externos:</strong> Lugar de estudio, tiempo de estudio, ruidos o molestias del exterior. Son más fáciles de controlar</p>
                    
                    <p class="text-justify"><strong>- Factores internos:</strong> Preocupaciones, falta de concreción en los objetivos, cansancio, nerviosismo, etc. Más difíciles de controlar, pero no imposible.</p>
                    <br>
                    <div class="media justificar">
                        <img src="/img/consejo.png" class="mr-3" alt="...">
                          <div class="media-body">
                       
                          <span><strong>CUANDO PIERDAS LA CONCENTRACIÓN TIENES CUATRO OPCIONES. ÚSALAS SIEMPRE EN ESTE ORDEN, NO TE SALTES LA ANTERIOR ANTES DE PONER EN PRÁCTICA LA SIGUIENTE:</strong></span>
                          </div>
                     </div>
                    <br>
                    <p class="text-justify"><strong>1. </strong>Ponte un poco más en serio y céntrate en la tarea animándote a ti mismo o misma a seguir. Puedes usar una palabra sonora que te despierte para volver a la tarea. Richard Fenker, un psicólogo americano, le recomienda a su alumnado que use la palabra ¡¡Gotcha!!!! que para nosotros no significa nada pero que llama la atención.</p>
                    <p class="text-justify"><strong>2. </strong>Cambia de técnica de estudio intentando que lo que hagas sea más activo: de la lectura al subrayado, de un resumen a un mapa conceptual o mental, etc.</p>
                    <p class="text-justify"><strong>3. </strong>Cambia de asignatura a otra que te apetezca más en ese momento (no se debe abusar de este punto)</p>
                    <p class="text-justify"><strong>4. </strong>Tómate unos minutos y prosigue después la tarea (cuando veas que no hay otra solución y hayas probado todo lo anterior)</p>
                    <br>
                    <br>
                    <p class="h5">ALGUNAS ESTRATEGIAS PARA MEJORAR LA CONCENTRACIÓN:</p>
                    <br>
                    <h6>
          
                      <div class="card bg-light mb-3" style="max-width: 70rem;" >
                        <div class="card-header">BREVE PERO DULCE</div>
                        <div class="card-body justificar">
                          <h5 class="card-title">Tiempos cortos, concentracion muy alta</h5>
                          <p class="card-text">- Identifica el alcance de tu concentración, es el tiempo que puedes dedicar a una tarea sin perder la concentración.</p>
                          <p class="card-text">- Debes llevar a cabo la tarea durante ese tiempo aumentando progresivamente unos minutos cada vez que vuelvas a ella, así poco a poco irás aumentando el alcance de tu concentración para esa tarea.</p>
                          <p class="card-text">- Práctica de buenos hábitos durante cortos periodos de tiempo para, progresivamente, irlos desarrollando durante periodos mayores.</p>
                          <p class="card-text">- Esta estrategia no admite demoras, el tiempo estipulado debe cumplirse con rigor y volver inmediatamente a la tarea si detectas que te despistas.</p>

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