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
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
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


    <div class=" col-sm-12 col-md-12 col-lg-12  ">
        <div class="form-inline ">

            <div class="col-sm-4 col-md-4 col-lg-4 ">

                <div class="form-inline">
                    <img class="img-fluid logo-img  " src="img/logo.png">

                    <div class="bg-ligth" style="margin-top: 5px;">
                        <h5 class="text-kumel-titulo">Productos naturales, chocolatería y gourmet</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-inline">
                   
                    <input type="text" class="form-control input-lg bg-light idPatronBusqueda " id="idPatronBusqueda"
                        placeholder="Buscar Productos              ">
                    <div class="input-group-prepend border-right  ">
                        <div id="btnBuscarProductos" class="btn btn-light rounded"><i class="icofont-search"></i>
                        </div>
                    </div>
                   
                    <div class="col-md-4 offset-md-1 "></div>

              
                        <a href="#" id="carrito"
                            class="ml-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm">
                            <i class="icofont-brand-aliexpress"><span class="border-left"> Carrito</span></i>
                        </a>
                        <div class="Contenedor-Carrito">
                            <label id="numCarrito" class="text-kumel-bold numberCircle  "
                                style="margin-bottom: 35px; margin-left: -4px;" hidden>0</label>

                        </div>
                       
                       
                    <div style="margin-left: 40px">

                        @if (isset(auth()->user()->name))
                        <a href="{{'register'}}" id="usuario"
                            class="ml-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm">
                            <i class="icofont-user-alt-5"></i>

                            @else
                            <a href="{{'register'}}" id="usuario"
                                class="ml-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm">
                                <i class="icofont-user-alt-5"><span>Ingresa</span></i>
                                @endif


                                @isset(auth()->user()->name) {{auth()->user()->name}} @endisset

                            </a>
                            @isset(auth()->user()->name)
                            <a href={{'logout'}} id="logout"
                                class="ml-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm"
                                data-toggle="tooltip" title="Cerrar Sesión">
                                <i class="icofont-logout"></i>
                            </a>
                            @endisset
                    </div>



                </div>

            </div>

        </div>



        <div class="col-lg-12 bg-kumel-2  border">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container-fluid">


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-kumel-titulo m-auto">
                            <li class="nav-item  active ">
                                <a href="{{ route('kummel') }}" class="h6  nav-link   " id="">Inicio</a>

                            </li>
                            <li class="menu-item border-right">
                                <a class="nav-link  h6   " aria-current="page" href={{ route('semillas') }}>Semillas</a>
                            </li>
                            <li class="nav-item border-right">
                                <a class="nav-link  h6" href="{{ route('frutosSecos') }}">Frutos Secos</a>
                            </li>
                            <li class="nav-item border-right">
                                <a class="nav-link  h6" href="{{ route('frutasDeshidratadas') }}">Frutas
                                    Deshidratadas</a>
                            </li>
                            <li class="nav-item border-right">
                                <a href="{{ route('especiasCondimientos') }}" class="h6 level-1 nav-link  "
                                    id="">Especias y
                                    Condimentos</a>
                            </li>
                            <li class="nav-item border">
                                <a href="{{ route('snackMix') }}" class="h6 level-1 nav-link  " id="">Snack y
                                    Mix</a>
                            </li>
                            <li class="nav-item border">
                                <a a href="{{ route('chocolates') }}" class="h6 level-1 nav-link  " id="">Chocolates</a>
                            </li>
                            <li class="nav-item">

                                <div class="form-inline">
                                    <h6 class="text-kumel-titulo " style="margin-left: 50px;">Siguenos en:
                                    </h6>
                                    <div class="" style="margin-left: 10px; margin-bottom: 10px">
                                        <a href="https://web.facebook.com/K%C3%BCmmel-738292063549140" target="_blank"
                                            rel="nofollow noopener" class="btn btn-icon btn-light"> <i
                                                class="icofont-facebook"></i></a>
                                        <a href="https://www.instagram.com/kummel.cl/" target="_blank"
                                            rel="nofollow noopener" class="btn btn-icon btn-light "><i
                                                class="icofont-instagram"></i></a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>



        <!-- Nav bar -->


        <div class="col-lg-12">

            <div class="container" style="max-width: 100%;">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- home page -->
                        <div class="osahan-home-page">
                            <!-- body -->
                            <div class="osahan-body">
                                <!-- categories -->
                                <div id="ContenedorPaginas"> @yield('content') </div>

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

                    <aside class="col-md-3" style="height: 200px">
                        <h5 class="title text-kumel-texto">Tienda</h5>
                        <ul class="list-unstyled list-padding">
                            <li> <a href="{{ route('semillas') }}" class="text-kumel-texto ">Semillas</a></li>
                            <li> <a href="{{ route('snackMix') }}" class="text-kumel-texto">Snack y Mix</a></li>
                            <li> <a href="{{ route('frutosSecos') }}" class="text-kumel-texto">Frutos Secos</a></li>
                            <li> <a href="{{ route('frutasDeshidratadas') }}" class="text-kumel-texto">Frutas
                                    Deshidratadas</a></li>
                            <li> <a href="{{ route('chocolates') }}" class="text-kumel-texto">Chocolates</a></li>
                            <li> <a href="{{ route('especiasCondimientos') }}" class="text-kumel-texto">Especias y
                                    Condimentos</a></li>
                        </ul>
                    </aside>



                    <div class="row " style="height: 200px">


                        <aside class="col-md-3" style="height: 200px">
                            <h5 class="title text-kumel-texto">Contactanos</h5>
                            <ul class="list-unstyled list-padding">
                                <li class="text-kumel-texto"> Whatsapp:9999999</li>
                                <li class="text-kumel-texto"> Email: prueba@gmail.com</a></li>
                                <li class="text-kumel-texto"> Faceboob:www.faceboork.com</a></li>

                            </ul>
                        </aside>

                    </div>
                    <div class="col-md-1 offset-md-1"></div>
                    <div class="row" style="height: 200px">
                        <aside>
                            <h5 class="title text-kumel-texto ">Extras</h5>
                            <ul class="list-unstyled list-padding">
                                <li><a href={{"recetas"}} class="text-kumel-texto"> Recetas </a></li>
                                <li><a href={{"condiciones"}} class="text-kumel-texto"> Condiciones </a></li>
                                <li><a href={{"contacto"}} class="text-kumel-texto"> Contacto </a></li>
                                <li><a href={{"preguntasFrecuentes"}} class="text-kumel-texto"> Preguntas Frecuentes
                                    </a>
                                </li>

                            </ul>
                        </aside>
                    </div>


                    <div class="row">
                        <aside style="height: 200px; margin-left:100px">
                            <h5 class="title text-kumel-texto ">Suscribete</h5>
                            <div class="form-inline">

                                <input type="text" placeholder="Email" class="form-control" name="">
                                <button type="submit" class=" btn btn-kumel ">Ingresar</button>
                            </div>

                            <hr style="border: 0.5px solid #fbdb9b">

                            <h5 class="title text-kumel-texto ">Medios de Pago</h5>
                            <div class="form-inline">
                                <div class="col-sm-4">
                                    <p class="text-kumel-texto"> Transferencia</p>
                                    <p class="text-kumel-texto"> Domicilio</p>
                                </div>

                                <img style=" margin-top:-10px " class="img-fluid-2 logo-img  " src="img/Flow.png">
                            </div>

                        </aside>

                    </div>

                </div>
                <br>

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
                        <h4 style="text-align: left;" class=" text-kumel-titulo"> Total (CLP): </h4>
                        <h4 style="text-align: left;" class="totalizador text-kumel-bold"> </h4>
                        <button type="button" onclick="oCarrito.Comprar()"
                            class="btn btn-kumel-1 btn-block">Comprar</button>

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
<script src="bootstrap/js/bootstrap.js"></script>
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

        if ($('#numCarrito').text() > 0) {
            $('#numCarrito').removeAttr('hidden', true);
        } else {
            $('#numCarrito').attr('hidden', true);
        }
        // $("#ContenedorPaginas").load('/TopuvaWeb/Vistas/home.php');
        $("#loader").hide();

    });
</script>