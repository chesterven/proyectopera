@component('mail::message')
# Bienvenido {{$name}} a nuestra pagina de refuerzo académico.

Espero que nuestro contenido te ayude a mejorar tus notas.

@component('mail::button', ['url' => ''])
Ir a nuestro sitio web
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
