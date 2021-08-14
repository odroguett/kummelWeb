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
<section class="py-4 osahan-main-body">
    <body class="fixed-bottom-padding">
        <div class="col-lg-7 col-sm-7 col-md-7 mx-auto " style="margin-top: 5px; margin-left: 10px">
            <h5 class="text-kumel-titulo mx-auto d-flex">Condiciones y póliticas</h5>
        </div>
        <br>
            <div class="container " style="  max-width: 90%; min-height: 40vh" >
                   <div class="col-lg-8 col-sm-8 col-md-8 mx-auto d-flex  bg-kummel ">
                     <div id="accordion">
                         <div class="card">
                           <div class="card-header" id="headingOne">
                             <h5 class="mb-0">
                               <button class="btn btn-Kummel" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Informción general
                               </button>
                             </h5>
                           </div>
                       
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                             <div class="card-body bg-kumel-2 ">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <div class="card-header" id="headingTwo">
                             <h5 class="mb-0">
                               <button class="btn btn-Kummelcollapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cobros Indebidos
                               </button>
                             </h5>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                             <div class="card-body bg-kumel-2 ">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <div class="card-header" id="headingThree">
                             <h5 class="mb-0">
                               <button class="btn btn-Kummel collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Póliticas de cambio
                               </button>
                             </h5>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                             <div class="card-body bg-kumel-2 ">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                           </div>
                         </div>
                        
                   </div>
             </div>
        
           
       
    </body>
    
</section>

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

@endsection