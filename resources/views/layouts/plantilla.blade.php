<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <!--<link rel="icon" type="image/png" href="img/logo.png"> -->
   <title>Kummel-Productos naturales y gourmet</title>
   <!-- Slick Slider -->



   <link rel="stylesheet" type="text/css" href="slick/slick.min.css" />
   <link rel="stylesheet" type="text/css" href="slick/slick-theme.min.css" />
   <link rel="stylesheet" type="text/css" href="css/alertify/alertify.css" />
   <link rel="stylesheet" type="text/css" href="css/animate.css" />
   <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
   <!-- Icofont Icon-->
   <link href="icons/icofont.min.css" rel="stylesheet" type="text/css">
   <!-- Bootstrap core CSS -->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet">
   <!-- Sidebar CSS -->
   <link href="sidebar/demo.css" rel="stylesheet">
   <style type="text/css">
   
      .modal.left .modal-dialog {
         position: fixed;
         right: 0;
         margin: auto;
         width: 320px;
         height: 100%;
         -webkit-transform: translate3d(0%, 0, 0);
         -ms-transform: translate3d(0%, 0, 0);
         -o-transform: translate3d(0%, 0, 0);
         transform: translate3d(0%, 0, 0);
      }

      .modal.left .modal-content {
         height: 100%;
         overflow-y: auto;
      }

      .modal.right .modal-body {
         padding: 15px 15px 80px;
      }

      .modal.right.fade .modal-dialog {
         left: -320px;
         -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
         -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
         -o-transition: opacity 0.3s linear, left 0.3s ease-out;
         transition: opacity 0.3s linear, left 0.3s ease-out;
      }

      .modal.right.fade.show .modal-dialog {
         right: 0;
      }
   </style>
</head>

<body class="fixed-bottom-padding ">
   <br>
   <div class="row">
      <div class=" col-sm-12 col-md-12 col-lg-12 ">
         <div class="form-inline ">

            <div class="col-sm-5 col-md-5 col-lg-7 bg-ligth">
               <div class="bg-ligth form-inline">
                  <img class="img-fluid logo-img  " src="img/logo.png">
                  <div class="col-sm-4 col-md-4 col-lg-4  bg-ligth ">
                     <div class="bg-ligth" style="margin-top: 30px;">
                        <h5 class="text-kumel-titulo">Productos naturales y gourmet</h5>
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class= "col-sm-7 col-md-7 col-lg-4">
               <div class="form-inline ">
                  <div class=" border-right ">
                     <a href="#" class="btn btn-icon btn-light"> <i class="icofont-facebook"></i></a>
                     <a href="#" class="btn btn-icon btn-light "><i class="icofont-instagram"></i></a>
                  </div>
                  <input type="text" class="form-control idPatronBusqueda" id="idPatronBusqueda"
                     placeholder="Buscar Productos">
                  <div class="input-group-prepend border-right  ">
                     <div id="btnBuscarProductos" class="btn btn-light rounded-right"><i class="icofont-search"></i>
                     </div>
                  </div>

                  <div class="col-md-1">
                     <a href="#" id="carrito"
                        class="ml-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm">
                        <i class="icofont-shopping-cart"></i>
                     </a>
                  </div>
                  <div class="Contenedor-Carrito">
                     <div class="col-md-1">
                        <label id="numCarrito" class="text-kumel-bold numberCircle  " style="margin-bottom: 30px; margin-left: -4px;" hidden>0</label>
                     </div>
                  </div>

               </div>

            </div>

         </div>

      </div>
   </div>
   </div>
   <div class="col-lg-12">
      <hr></span>

   </div>
   <!-- Nav bar -->
   <div class="form-inline  ">
      <div class="col-md-2 offset-md-2"></div>
      <div class="col-md-5">
         <div class="">
            <div class="container menu-bar d-flex align-items-center">
               <ul class="list-unstyled form-inline mb-0">
                  <li class="nav-item active">
                     <a href={{ route('kummel') }} id="" class="nav-link font-weight-light text-kumel-titulo h5 " href="">Home <span
                           class="sr-only border border-dark">(current)</span></a>
                  </li>


                  <li class="nav-item dropdown">
                     <a class="nav-link text-kumel-titulo h5 font-weight-light dropdown-toggle" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Tienda
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href={{ route('semillas') }} class="dropdown-item text-kumel-titulo " id="">Semillas</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('snackMix') }}" class="dropdown-item text-kumel-titulo" id="">Snack y Mix</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('frutosSecos') }}" class="dropdown-item text-kumel-titulo" id="">Frutos Secos</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('frutasDeshidratadas') }}" class="dropdown-item text-kumel-titulo" id="">Frutas Deshidratadas</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('chocolates') }}" class="dropdown-item text-kumel-titulo" id="">Chocolates</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('especiasCondimientos') }}" class="dropdown-item text-kumel-titulo" id="">Especias y Condimentos</a>
                        <div class="dropdown-divider"></div>
                     </div>
                  </li>

                  </li>
                  <a href="/TopuvaWeb/Vistas/contacto.php" class=" btn  btn-sm">
                     <p class=" text-kumel-titulo font-weight-light h5 ">Contacto</p>
                  </a>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-12">
      <hr></span>
      <div class="container" style="max-width: 100%;">

         <div class="row">
            <div class="col-lg-12">
               <!-- home page -->
               <div class="osahan-home-page">
                  <!-- body -->
                  <div class="osahan-body" id="ContenedorPaginas">
                     <!-- categories -->
                     @yield('content')
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   
   </div>

   

   <!-- footer -->
   <footer class="section-footer border bg-kumel" style="max-width: 97%; margin-left:1.5%">

      <div class="container">

         <br />
         <div class="form-inline">

            <div class="col-md-1 offset-md-1"></div>
            <div class="row" style="height: 200px">


               <div class=" col-lg-6">
                  <h5 style="text-align: left;" class="text-kumel-texto">Contactanos</h5>
                  <ul>
                     <li class="text-kumel-texto ">topuva@gmail.com</li>
                     <li class="text-kumel-texto">+569999999</li>
                  </ul>
               </div>
            </div>
         </div>

      </div>
   </footer>
   <div class="modal left fade" id="myModal2" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 style="text-align: center;" class="text-kumel-bold">TU CARRITO</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
               <h4 style="text-align: left;" class=" text-kumel-titulo"> Total: </h4>
               <h4 style="text-align: left;" class="totalizador text-kumel-bold"> </h4>
               <button type="button" onclick="oCarrito.Comprar()" class="btn btn-kumel-1 btn-block">Comprar</button>

            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="modalConfirmacion" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header bg-light">
               <h6 class="" id="tituloConfirmacion"></h6>
            </div>
            <div id="mensajeConfirmacion" class="modal-body bg-light">
            </div>
            <div class="modal-footer bg-light">
               <div class="row">
                  <div class="col-lg-6">
                     <button id="btnConfirmacionOK" class="btn-primary" type="button">Aceptar </button>


                  </div>
                  <div class="col-lg-6">
                     <button id="btnConfirmacionCANCEL" class="btn-primary" type="button">Cancelar</button>


                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</body>
<div class="modal fade" id="MensajePersonalizado" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true" data-backdrop="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-light">
            <h4 class="modal-title" id="TituloModal"></h4>
         </div>
         <div class="modal-body bg-light" id="CuerpoModal">
         </div>
         <div class="modal-footer bg-light">
            <div class="row">
               <div class="col-lg-6">
                  <button data-dismiss="modal" class="btn-primary" type="button" id="btn-cerrarMensaje">Cancelar
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="modalBusqueda" tabindex="-1" role="dialog" aria-labelledby="modalBusqueda">

   <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content" id="mContent">
      </div>
   </div>

</div>

<div id="loader" style="display:none">
   <button class="btn" disabled id="set-btn" style="padding-top:20%">
      <i class="psi-gear fa-spin" style="font-size:50px;color:#000000"></i>
   </button>
</div>


</html>

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
 <script src="js/alertify.js"></script>
<script src="js/modalMensaje.js"></script>
<script>
   $(document).ready(function () {

      $("#loader").show();
      $('#numCarrito').text(Number(localStorage.getItem('numeroCarrito')));

      if($('#numCarrito').text()>0)
      {
         $('#numCarrito').removeAttr('hidden',true);
      }
      else
      {
         $('#numCarrito').attr('hidden',true);
      }
     // $("#ContenedorPaginas").load('/TopuvaWeb/Vistas/home.php');
      $("#loader").hide();
   });
</script>