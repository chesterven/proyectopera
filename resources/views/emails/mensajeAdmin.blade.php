@component('mail::message')
# Asunto: {{$data['asunto']}}

Mensaje: 
<br>
{{$data['comentario']}}


Gracias,<br>
Administrador
@endcomponent
