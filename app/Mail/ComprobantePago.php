<?php

namespace App\Mail;

use App\OTD\ComprobantePagoMailOtd;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComprobantePago extends Mailable
{
    use Queueable, SerializesModels;

    private  $comprobantePagoMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ComprobantePagoMailOtd $_comprobantePagoMail)
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
      // $this->comprobantePagoMail->asunto= "prueba";
        return $this->view('mail.comprobante',['comprobantePagoMail'=> $this->comprobantePagoMail]);
    }
}
