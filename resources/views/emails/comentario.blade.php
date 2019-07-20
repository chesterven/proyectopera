@component('mail::message')
# {{$data['seccion']}}
#{{$user['correo']}}
{{$data['comentario']}}

Muchas Gracias,<br>
{{ $user['nombre'] }}
@endcomponent
