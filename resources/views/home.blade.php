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
                    <br>
                    <br>

                    <h1 align="center"><span class="badge badge-secondary">Para comenzar</span></h1>

                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              MOTIVACIÓN Y AUTOMOTIVACIÓN
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body justificar">
                            Puedes probar intentando saber algo más de ti como estudiante. El siguiente ejercicio te será útil:
                            <br>
                            <br>
                            - Haz una lista con ideas que empiecen : “No soy capaz de...” ó “Me es difícil...” y otra lista con ideas que empiecen: “Soy capaz de...” ó “Me gusta, se me da bien...”
                            <br>
                            <br>
                            - Ahora analiza la primera lista y piensa si eso puede cambiar y qué puedes hacer tú para eso.
                            <br>
                            <br>
                            - Finalmente tacha las frases de la primera lista y vuelve a escribirlas de la siguiente forma: “Soy capaz de concentrarme bien” en lugar de “Me es difícil mantener la concentración” . Esas listas ponlas en un lugar visible de tu lugar de estudio y repítelas en voz alta de vez en cuando.
                            <br>
                            <br>
                            Que seas capaz de motivarte depende no sólo de que te gusten previamente las asignaturas y los profesores o profesoras, sino de ti mismo. La última responsabilidad del estudio siempre es tuya, por muy complicado que te pueda resultar lo que te rodea (alguna materia, las explicaciones del profesorado, etc) piensa que siempre puedes poner de tu parte para superarla. Cuanto mejor te planifiques y te conozcas como estudiante mejor te motivarás.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              LUGAR DE ESTUDIO. CARACTERÍSTICAS
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body justificar">
                            - Siempre el mismo.
                            <br>
                            <br>
                            - Si puede ser con luz natural, en el caso contrario se debe usar la luz central y la focal a la vez para evitar el cansancio de los ojos, al pasar de zonas de oscuridad a zonas muy iluminadas.
                            <br>
                            <br>
                            - No debe haber objetos personales, posters que puedan distraer, fotografías a la vista, aunque sí pueden estar en la habitación pero sin que se vean desde el lugar donde se estudia.
                            <br>
                            <br>
                            - Debe ser un lugar agradable donde se esté a gusto: con una temperatura adecuada si es posible, amplio para colocar el material de estudio que debe estar al alcance de la mano así como libros de consulta y diccionarios. Encima de la mesa de estudio lo mínimo, sólo lo necesario para trabajar.
                            <br>
                            <br>
                            - Si es posible deben evitarse todo tipo de ruidos audiovisuales: radio, televisión, imágenes que distraigan, conversaciones de otros, etc.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              TIEMPO DE ESTUDIO. PLANIFICACIÓN
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body justificar">
                            - Tienes dos posibilidades: bailar al son del tiempo que pasa o hacer que baile a tu son, tú verás. Cuando tienes trabajo por delante planificarlo te relajará pues te hará darte cuenta de que si cumples el horario te dará tiempo y podrás cumplir tus objetivos.
                            <br>
                            <br>
                            - Primero debes marcarte objetivos concretos a largo plazo. Ejemplo: aprobar todas las asignaturas con una media de notable o de suficiente, o aprender mucho inglés y matemáticas durante este curso, el que tú quieras. Esas son tus prioridades, por nada las debes dejar a un lado. Aunque te surjan urgencias (cosas que te parezca que exigen tu atención: un examen que no has estudiado) debes respetar tus prioridades siempre, sino se acabarán convirtiendo en urgencias en otro momento, y bailarás al son del tiempo y no al revés. Recuerda, es fundamental que respetes las prioridades.
                            <br>
                            <br>
                            - Después debes pensar qué puedes hacer cada semana para conseguir ese objetivo a largo plazo. Por ejemplo: estudiar tres horas a la semana inglés ( de 5 a 6 lunes, miércoles y viernes) y dos matemáticas ( de 4 a 5 dos días a la semana). Debes concretarlo lo máximo posible.
                            <br>
                            <br>
                            - Tras tener esto claro organiza un horario semanal los domingos antes de empezar la semana con lo que sabes que deberás hacer, durante la semana se irá completando con otras actividades imprevistas, así que debes dejar huecos para esos imprevistos y para urgencias.... desde luego, también para descansar y divertirte, sino no es posible estudiar.
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
