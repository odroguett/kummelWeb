@component('mail::layout')
    {{-- Header --}}
   @slot('header')
        @component('mail::header', ['url' => config('http://www.kummel.cl')])
      
        @endcomponent
    @endslot

@component('mail::message')

<h3>{{  $comprobante->sNombre . ' , '  }}</h3>
<br>

{{ 'Tu Pedido N° : ' .  $comprobante->idDespacho . '  ha sido confirmado. '   }}

    {{ 'Nos pondremos en contacto por Whatsapp para coordinar la entrega.' }}

        {{ ' En documento adjunto se encuentra detalle de tu compra. '}}


            {{ ' Gracias por confiar en nosotros, '}} <br>
                {{ 'Equipo Kummel.'  }} 

@endcomponent

