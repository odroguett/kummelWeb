@extends('layouts.plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="csrf-token" content="{{ csrf_token() }}" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="img/logo.png">
        <title>Frutos Secos</title>
        <!-- Slick Slider -->
        <link rel="stylesheet" type="text/css" href="slick/slick.min.css" />
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.min.css" />
        <!-- Icofont Icon-->
        <link href="icons/icofont.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Sidebar CSS -->
        <link href="sidebar/demo.css" rel="stylesheet">
    </head>
   <body class="fixed-bottom-padding bg-success">
   
   
      @csrf
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <!-- content -->
      <div class="bg-ligth row d-flex justify-content-center">
         <div class="col-md-6 bg-kumel-2">
            <div class="p-5 text-center">
               <i class="icofont-check-circled display-1 text-warning"></i>
               <h1 class="text-kumel-titulo font-weight-bold">Kummel, tu orden ha sido procesada exitosamente 🎉</h1>
            </div>
            <hr></hr>
            <!-- continue -->
            <div class=" bg-ligth rounded p-3 m-5 text-center">
               <h6 class="text-kumel-bold mb-2">Prepararemos tu pedido</h6>
               <p class="small text-muted text-kumel-bold">Encontraras tu comprobante de compra en tu correo</p>
               <p class="small text-muted text-kumel-bold">Para dudas o consultas contactanos por Whatsapp</p>
             
            </div>
         </div>
      </div>
      <br>
      <!-- footer -->
      <script src="jquery/jquery.min.js"></script>
      <script type="text/javascript" src="DataTables/datatables.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="slick/slick.min.js"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/osahan.js"></script>
      <script src="js/topuva.js"></script>
      <script type="text/javascript">
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         </script>
      <script>
         $(document).ready(function () {
            $("#loader").show();
            oCarrito.ProcesarPago();
            $("#loader").hide();
         });
      </script> 
   </body>
</html>

@endsection