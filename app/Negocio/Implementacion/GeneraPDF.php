<?php

namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IGeneraPDF;
use App\Repositorio\IUnidadTrabajo;
use Codedge\Fpdf\Facades\Fpdf;

class GeneraPDF extends Fpdf implements IGeneraPDF
{
  private $oUDT;
  private $oDespacho;

  public function __construct(IUnidadTrabajo $_oUDT, IDespacho $_oDespacho)
  {
      $this->oUDT =  $_oUDT;
      $this->oDespacho =  $_oDespacho;
  }
  
  public function GenerarComprobantePagoPDF($idDespacho)
  {
    $nombre="";
    $totalProductos="";
    $totalVenta="";
    $tipoPago="";
    $tipoDespacho="";
    $listaDespacho =  $this->oUDT->DespachosRepositorio()->ObtieneCabeceraDespacho($idDespacho);

   foreach($listaDespacho as $value)
    {
        $nombre = ' ' . $value->NOMBRE . ' ' . $value->APELLIDOS;
        $tipoDespacho=$value->DESCRIPCION_TIPO_DESPACHO;
        $tipoPago= $value->DESCRIPCION_TIPO_PAGO;
        $totalVenta=$value->TOTAL_VENTA;

        Fpdf::AddPage('P','Letter');
        // Logo
       // Fpdf::Image('img/logo.png',10,8,15);
        Fpdf::Ln(6);
        // Arial bold 15
        Fpdf::SetFont('Arial','B',14);
        // Movernos a la derecha
        Fpdf::Cell(1);
        // Título
        //Fpdf::SetTextColor(55,140,244);
        //Fpdf::Cell(1,1,'Emporio D&S',0,1);
        Fpdf::Ln(4);
        Fpdf::Cell(60);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::Cell(1,1,'Comprobante de compra',0,1);
        Fpdf::Ln(2);
        Fpdf::Cell(1);
        Fpdf::SetFont('Arial','B',11);
        Fpdf::Cell(1,10,utf8_decode('Kummel, Productos Naturales y Gourmet'));
        Fpdf::Ln(4);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(1);
        Fpdf::Cell(1,10,utf8_decode('Sitio: www.kummel.cl,Telefono/Whatsapp: +5699999999,Email: Prueba@gmail.com,Instagram: www.instagram.cl'));
        // Salto de línea
        Fpdf::Ln(10);
        
       
        Fpdf::SetFont('Arial','',10);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::Cell(40,10,utf8_decode('Hola,' . $nombre));
        Fpdf::Ln(4);
        Fpdf::Cell(40,10,utf8_decode('Gracias por tu pedido. En estos momentos estamos procesando tu orden para ser entregada en los próximos días.'));
        Fpdf::Ln(6);
        Fpdf::SetTextColor(14,14,18);
        Fpdf::SetFont('Arial','B',11);
        Fpdf::Cell(40,10,utf8_decode('Datos Compra.'));
        Fpdf::Line(10, 55 , 200, 55);
        Fpdf::Ln(12);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(60,6,'Numero de despacho',0,0,'',false);
        Fpdf::SetFont('Arial','B',10);
        Fpdf::Cell(60,6,$idDespacho,0,0,'',false);
        Fpdf::Ln(4);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(60,6,'Forma de retiro',0,0,'',false);
        Fpdf::SetFont('Arial','B',10);
        Fpdf::Cell(60,6, $tipoDespacho,0,0,'',false);
        Fpdf::Ln(4);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(60,6,'Forma de pago',0,0,'',false);
        Fpdf::SetFont('Arial','B',10);
        Fpdf::Cell(60,6,$tipoPago,0,0,'',false);
        Fpdf::Ln(4);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(60,6,'Total pago (incluye despacho)',0,0,'',false);
        Fpdf::SetFont('Arial','B',10);
        Fpdf::Cell(60,6,'$ ' . $totalVenta,0,0,'',false);
    
        Fpdf::Ln(4);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Cell(60,6,'Tiempo de entrega',0,0,'',false);
        Fpdf::SetFont('Arial','B',10);
        Fpdf::Cell(60,6,utf8_decode(' Maximo 72 horas hábiles.'),0,0,'',false);
        Fpdf::Ln(8);
        Fpdf::SetTextColor(14,14,18);
        Fpdf::SetFont('Arial','B',11);
        Fpdf::Cell(40,10,utf8_decode('Notas.'));
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::Ln(6);
        Fpdf::Cell(40,10,utf8_decode('Por favor al momento de la entrega revisa los productos recibidos, si no estas conforme, puedes solicitar su cambio'));
        Fpdf::Ln(3);
        Fpdf::Cell(40,10,utf8_decode('o la devolución del dinero.'));
        Fpdf::Ln(4);
        Fpdf::Cell(40,10,utf8_decode('Puedes contactarnos con nosotros en los medios que disponemos para aquello.'));
    
        Fpdf::Line(10, 110 , 200, 110);
        Fpdf::SetTextColor(34,14,04);
        Fpdf::SetFont('Arial','',10);
        Fpdf::SetTextColor(14,14,18);
        Fpdf::SetY(110);
        Fpdf::SetFont('Arial','B',11);
        Fpdf::Cell(40,10,utf8_decode('Detalle Compra.'));
        Fpdf::SetY(120);
        Fpdf::SetX(10);
        Fpdf::SetTextColor(226,197,158);
     //   Fpdf::SetTextColor(14,14,18);
        Fpdf::SetDrawColor(25,25,12);
        Fpdf::Cell(90,6,'Producto',0,0,'C',true);
        Fpdf::Cell(60,6,'Cantidad',0,0,'C',true);
        Fpdf::Cell(40,6,'Total',0,0,'C',true);
        Fpdf::SetTextColor(34,14,04);

        $ListaDetalle=$this->oUDT->DetalleProductosVentaRepositorio()->obtieneDetalleVentaProductos($idDespacho);
        foreach($ListaDetalle as $value)
        {
            Fpdf::Ln();
            Fpdf::SetX(10);
            Fpdf::Cell(90,6,$value->DESCRIPCION. ' '.  $value->TAMANO . ' ' . $value->DESCRIPCION_UNIDAD,1,0,'C',false);
            Fpdf::Cell(60,6,$value->CANTIDAD,1,0,'C',false);
            Fpdf::Cell(40,6,$value->VENTA,1,0,'C',false);
        }

        return Fpdf::Output('S','ComprobantePago'. $idDespacho .'.pdf',false);
    }

  }
  

}


?>