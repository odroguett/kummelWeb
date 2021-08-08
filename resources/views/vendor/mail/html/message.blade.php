@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}

@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')

<a  href="www.kummel.cl" >Sitio  Web Kummel</a>  
<br>
Buscanos en Instragram y Facebook.
<br>
Whatspp: +56 9 82188050 o al +56 9 81747288

@endcomponent
@endslot
@endcomponent
