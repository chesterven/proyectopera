@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Atención y concentración JEJE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 align="center"><span class="badge badge-secondary">ESTRATEGIAS DE SÍNTESIS Y COMPRENSIÓN</span></h1>
                    <br>
                    <p class="text-justify">Todas estas estrategias de síntesis y comprensión (excepto parafrasear) se sirven de tres elementos:</p>

                    <p class="text-justify"><strong>- la palabra (el concepto que aprendes)</strong></p>

                    <p class="text-justify"><strong>- las imágenes</strong></p>

                    <p class="text-justify"><strong>- la estructura, es decir, las relaciones entre los distintos conceptos</strong></p>
                    <p class="text-justify">¿Por qué? Porque así pondrás en marcha no sólo la mitad de tu cerebro (el hemisferio izquierdo que es el que se encarga de la palabra, lo secuencial, etc) sino el cerebro entero (también el hemisferio derecho que se encarga de lo simultáneo, la imagen, etc).</p>
                    <br>
                    <h2 class="text-left"><span class="badge badge-secondary">ESQUEMA</span></h2>
                    <br>
                    <p class="text-justify">Una vez que tengas hecho el subrayado, debes organizar esas ideas clave jerarquizándolas: unas van dentro de otras, unas son más importantes que otras. Teniendo eso en cuenta debes hacer el esquema que puede ser de llaves, líneas, puntos, eso no importa mucho. Lo que sí importa es que pienses qué va dentro de qué y lo organices así en el dibujo del esquema.</p>

                    <p class="text-justify">Si lo organizas bien verás con claridad las relaciones entre las ideas y podrás obtener un “dibujo” que te ayudará a retener en la memoria esa información.</p>

                    <p class="text-justify">Los distintos tipos de esquemas suelen asociarse a un tipo de relación entre los conceptos:</p>

                    <p class="text-justify"><strong>De llaves: </strong>cuando hay poco contenido.</p>

                    <img src="{{ asset('img/de_llaves.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="De llaves">
                    <br>
                    <p class="text-justify"><strong>De flechas: </strong>cuando unos contenidos originan otros.</p>
                    <p class="text-justify"><strong>Numérico: </strong>en trabajos científicos o índices.</p>

                    <img src="{{ asset('img/numerico.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Numérico">
                    <br>
                    <p class="text-justify"><strong>Ramificad: </strong>con divisiones muy prolongadas como los árboles genealógicos.</p>
                    <p class="text-justify">Muchas veces es conveniente mezclar las distintas posibilidades.</p>
                    <p class="text-justify">Fases para la elaboración de un esquema:</p>
                    <p class="text-justify">- Toma de contacto con el texto. Primera lectura.</p>
                    <p class="text-justify">- Segunda lectura: subrayado.</p>
                    <p class="text-justify">- Elige el concepto clave y ponlo como raíz o centro del esquema.</p>
                    <p class="text-justify">- Selecciona las idea secundarias o temas que necesiten ser ampliados.</p>
                    <p class="text-justify">- Busca otros conceptos subordinados y ubícalos en la periferia del esquema.</p>
                    <p class="text-justify">- Ponemos un par de ejemplos:</p>
                    <img src="{{ asset('img/ejemplo_esquema1.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 1 esquema">
                    <br>
                    <img src="{{ asset('img/ejemplo_esquema2.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 2 esquema">

                    <br>
                    <h2 class="text-left"><span class="badge badge-secondary">MAPAS: mapa mental y mapa conceptual</span></h2>
                    <br>
                    <p class="text-justify">El uso de mapas ( estructuras informativas jerarquizadas) te ayudará a mejorar la organización y clasificación de tus conocimientos, a relacionar los conceptos que aprendas y mejorará tu comprensión lectora. Los mapas son tipos especiales de esquemas.</p>
                    <br>
                    <h2 class="text-left"><span class="badge badge-secondary">MAPA MENTAL</span></h2>
                    <br>
                    <p class="text-justify">Un mapa mental es una especie de araña con tantas patas como ideas surjan de cada palabra clave, y así sucesivamente. Las palabras se asocian a imágenes para recordar y entender mejor lo expresado. Es muy útil para tomar apuntes cuando se tiene práctica y para activar conocimientos previos. También es muy útil para que los active el profesor o profesora al inicio de las unidades didácticas, pues en él es fácil anotar todo lo que van recordando los distintos alumnos y alumnas sobre ese tema.</p>

                    <p class="text-justify">Ejemplo</p>
                    <img src="{{ asset('img/ejemplo_mapamental1.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 1 mapa mental">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapamental2.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 2 mapa mental">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapamental3.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 3 mapa mental">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapamental4.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 4 mapa mental">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapamental5.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 5 mapa mental">

                    <br>
                    <h2 class="text-left"><span class="badge badge-secondary">MAPA CONCEPTUAL</span></h2>
                    <br>
                    <p class="text-justify">Es una buena técnica de organización de información, mucho más rígida que el mapa mental. Consiste en organizar la información mediante palabras o conceptos clave que nos llevan de unos a otros en un esquema estructurado mediante cuadros y líneas. Su confección es lenta pero se consiguen niveles muy altos de comprensión y memorización.</p>
                    <p class="text-justify">Importante:</p>
                    <p class="text-justify">- Previamente, como en el resto de los mapas y esquemas, leer y seleccionar los conceptos clave.</p>
                    <p class="text-justify">- A partir de ellos organizar una estructura de árbol, desarrollando los conceptos de arriba abajo y en la misma altura los de igual importancia lógico- semántica.</p>

                    <p class="text-justify">Ejemplo</p>
                    <img src="{{ asset('img/ejemplo_mapaconceptual1.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 1 mapa conceptual">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapaconceptual2.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 2 mapa conceptual">
                    <br>
                    <img src="{{ asset('img/ejemplo_mapaconceptual3.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 3 mapa conceptual">

                    <br>
                    <h2 class="text-left"><span class="badge badge-secondary">CUADRO COMPARATIVO</span></h2>
                    <br>
                    <p class="text-justify">Muy útil cuando tenemos dos etapas históricas con diferencias y parecidos, o dos autores literarios, o dos conceptos matemáticos o cualesquiera dos aspectos comparables.</p>
                    <p class="text-justify">Se hacen dos o más rectángulos unidos ( tantos como conceptos queramos desarrollar o datos comparar) y en ellos se pone en la primera línea los conceptos o ideas que se comparan y en las filas inferiores aquellos aspectos que que son diferentes . Si hubiese aspectos comunes que se quieran destacar se indicarían, centrados, en una o más filas al inicio o final de la tabla.</p>

                    <p class="text-justify">Ejemplo</p>
                    <img src="{{ asset('img/ejemplo_cuadrocomparativo1.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 1 cuadro comparativo">
                    <br>
                    <img src="{{ asset('img/ejemplo_cuadrocomparativo2.png') }}" class="img-fluid mx-auto d-block img-thumbnail" alt="Ejemplo 2 cuadro comparativo">
                    <br>

            </div>
        </div>
    </div>
</div>

<br>
<br>
@endsection
