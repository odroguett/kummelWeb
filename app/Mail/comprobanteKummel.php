<?php

namespace App\Mail;

use App\Negocio\Interfaces\IGeneraPDF;
use App\OTD\ComprobantePagoMailOtd;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class comprobanteKummel extends Mailable
{
    use Queueable, SerializesModels;

    private  $comprobantePagoMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $oGeneraPDF; 

    public function __construct(ComprobantePagoMailOtd $_comprobantePagoMail )
    {
        $this->comprobantePagoMail = $_comprobantePagoMail;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        //$comprobantePDF = 
        
        return $this->markdown('emails.orders.venta',['comprobante'=>  $this->comprobantePagoMail])
        ->attachData( $this->comprobantePagoMail->sComprobante, 'ComprobantePago.pdf', [
            'mime' => 'application/pdf',
        ]);
        
        
    }
}
