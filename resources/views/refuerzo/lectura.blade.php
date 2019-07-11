@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">LA LECTURA</div>

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
                      <br>
                      <p class="h5 colorparrafo"><strong>LA VELOCIDAD LECTORA:</strong></p>
                     
                      <p class="text-justify">A modo de orientación, vamos a proponer un ejercicio para reflexionar sobre un tema que tal vez no nos hayamos planteado nunca: ¿cuál es mi velocidad lectora?</p>
                       <p class="text-justify">Lee a continuación el texto, controlando el momento en que empiezas y acabas:</p>
                       <br>
                      
                      <div class="card bg-light mb-3" style="max-width: 70rem;">
                        <div class="card-header colocard"><strong>¿Cuál es mi velocidad lectora?</strong></div>
                        <div class="card-body justificar">
                                                    <p class="card-text">Como de costumbre, me desperté antes que mi viejo, aunque no tardó mucho en empezar a desperezarse.</p>
                                                    <p class="card-text">Decidí comprobar si era verdad que todas las mañanas se despertaba con un estallido, como había dicho el día anterior. </p>
                                                    <p class="card-text">Llegué a pensar que a lo mejor tenía razón, porque, en el momento de abrir los ojos, tenía cara de asombro. Igual podría haberse despertado en un lugar muy diferente. En la India, por ejemplo, o en un pequeño planeta de otra galaxia.</p>
                                                    <p class="card-text">—Eres un ser vivo —le dije—. En este momento te encuentras en Delfos, un lugar de la Tierra, que es un planeta vivo que por ahora gira alrededor de una estrella de la Vía Láctea. En dar una vuelta alrededor de la estrella, el planeta tarda unos 365 días.</p>
                                                    <p class="card-text">Clavó su mirada en mí, como si tuviera que acostumbrar a sus ojos al cambio del País de los Sueños a la dura realidad exterior.</p>
                                                    <p class="card-text">—Te agradezco la información — dijo—. Todo lo que acabas de decir, me lo digo todos los días antes de levantarme. </p>
                                                    <p class="card-text">Se incorporó diciendo:</p>
                                                    <p class="card-text">—Sería bueno que me susurraras esas palabras al oído cada mañana, Hans Thomas. Llegaría antes al baño. </p>
                                                    <p class="card-text">Cerramos el equipaje rápidamente, desayunamos, y enseguida estuvimos de nuevo en el coche. Cuando pasamos por el recinto de los templos, mi viejo dijo:</p>
                                                    <p class="card-text">—Es increíble lo ingenuos que eran.</p>
                                                    <p class="card-text">—¿Por creer en el oráculo?</p>
                                                    <p class="card-text">No contestó inmediatamente. Tuve miedo de que dudara de la palabra del oráculo sobre el encuentro con mamá en Atenas. </p>
                                                    <p class="card-text">—Por eso también —dijo finalmente —. Pero piensa en todos esos dioses, Apolo y Asclepio, Atenea y Zeus, Poseidón y Dionisos. Durante cientos y cientos de años construyeron costosos templos de mármol para ellos. Por regla general, tuvieron que recorrer enormes distancias, arrastrando pesados bloques de mármol.</p>
                                                    <p class="card-text">No entendía muy bien lo que estaba diciendo, pero sin embargo pregunté:</p>
                                                    <p class="card-text">—¿Cómo puedes estar tan seguro de que esos dioses no existían? Puede que ya hayan desaparecido, o se hayan buscado otro pueblo ingenuo; pero durante algún tiempo anduvieron sobre esta tierra.</p>
                                                    <p class="card-text">Mi viejo me miró a través del espejo. —¿Eso crees, Hans Thomas? —No estoy seguro —contesté. Pero de alguna manera estuvieron en el mundo mientras la gente creía en ellos. Porque se ve lo que se cree. Y hasta que la gente comenzó a dudar de ellos, no envejecieron o se desgastaron.</p>
                                                    <div align="right">
                                                    <p class="card-text">(Jostein Gaarder, El misterio del solitario)</p>
                                                    </div>
                        </div>
                      </div>
                      <p class="text-justify">¿Cuánto tiempo has tardado en leerlo?</p>
                      <p class="text-justify">Considerando que las palabras leídas son 392, realiza el siguiente cálculo:</p>

                      <center>
                    <img src="/img/baremo.png" class="img-thumbnail"  alt="imagen inicial">
                    </cemter>
                    <br>
                    <br>
                    <p class="text-justify">Es evidente que nuestra velocidad lectora variará dependiendo de la dificultad del texto. lo realmente importante es haber logrado la comprensión del texto pese a la dificultad que entrañan el vocabulario y la estructura gramatical de este segundo ejemplo. De nada sirve tener una velocidad lectora muy alta si no se obtienen las ideas principales o, por lo menos, si tras la lectura no reparamos en aquellas lagunas que deberán ser solucionadas para poder llegar a la completa comprensión del texto.</p>


                      
                      
                      
                      
                      
            </div>
        </div>
    </div>
</div>

<br>
<br>
@endsection