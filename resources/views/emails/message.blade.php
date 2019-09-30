@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

![logo]: {{asset('/cluby/clubyLogo.svg')}}

{{-- Body --}}
{{ $slot }}

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.

Si no deseas recibir más correos, puedes [modificar tus preferencias][unsubscribe].

[unsubscribe]: {{ url('/configuracion') }}
@endcomponent
@endslot


@endcomponent