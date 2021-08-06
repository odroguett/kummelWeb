<?php

namespace App\Http\Controllers;

use App\Mail\comprobanteKummel;
use App\Mail\ComprobantePago;
use App\OTD\ComprobantePagoMailOtd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ComprobanteController extends Controller
{
    public function comprobante()
    {
        $comprobantePagoMail = new ComprobantePagoMailOtd;
       $comprobantePagoMail->asunto="hola";

       Mail::to("odroguett@gmail.com")->send(new comprobanteKummel($comprobantePagoMail));
    }
}
