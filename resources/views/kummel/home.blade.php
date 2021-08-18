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
    <!--<link rel="icon" type="image/png" href="img/logo.png"> -->
    <title>Kummel productos naturales y gourmet</title>
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

        d-block w-100 .modal.right.fade.show .modal-dialog {
            right: 0;
        }
    </style>
</head>

<body class="fixed-bottom-padding bg-light">

    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
        <div class="row">
            <div class="col-lg-12">

                <div class="py-3 osahan-promos">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="contenedor">

                                    <img class="d-block w-100" src="img/despacho.jpg" alt="">

                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="contenedor">
                                    <img class="d-block w-100" src="img/miami.jpg" alt="Second slide">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="contenedor">

                                    <img class="d-block w-100" src="img/volcanOsorno.jpg" alt="">

                                </div>
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    

    <br />
    <section class="py-4 osahan-main-body">

        <!-- pick today -->
        <div class="d-flex align-items-center mb-3">
            <h5 style="text-align: left;" class="text-kumel-titulo ">Top Ventas</h5>
        </div>
        <div class="pick_today">

            <div class="row">




                @foreach($topVentas as $value)

                @if ($value->STOCK <=0) <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="list-card bg-light h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">

                            <a onclick="oCarrito.LinkProducto( '{{ $value->IMAGEN1}}','{{ $value->IMAGEN2}}','{{ $value->IMAGEN3}}','{{$value->DESCRIPCION}}','{{$value->PRECIO_VENTA}}','{{$value->TAMANO}}','{{$value->CODIGO_UNIDAD}}','{{$value->STOCK}}','{{$value->ID_PRODUCTO}}')"
                                href="#" class="text-dark">

                                <div class=" claseTexto col-sm-12 col-md-12 col-lg-12">

                                    <input type="text" class="text-info codigo-precio-producto"
                                        value="{{ $value->ID_PRODUCTO}} " hidden>
                                    <input type="text" class="text-info stock-producto" value="{{$value->STOCK}} "
                                        hidden>
                                    <div class="contenedor-imagen col-sm-12 col-md-12 col-lg-12 ">
                                        <figure>
                                            <img class="imagen-producto" src=" {{$value->IMAGEN1}}">


                                            <div class="capa">

                                                <h3 class=""> @if(isset($value->TITULO)){{$value->TITULO}}@endif</h3>
                                                <p>
                                                    @if(isset($value->PARRAFO1)){{$value->PARRAFO1}}@endif
                                                    @if(isset($value->PARRAFO2)){{$value->PARRAFO2}}@endif
                                                    @if(isset($value->PARRAFO3)){{$value->PARRAFO3}}@endif
                                                    @if(isset($value->PARRAFO4)){{$value->PARRAFO4}}@endif
                                                </p>

                                            </div>

                                        </figure>

                                    </div>



                                    <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                        <h6 class="textoProducto text-kumel-titulo">
                                            {{ $value->DESCRIPCION }}
                                        </h6>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class=" form-inline precio">
                                            <div class="col-lg-3">

                                                <span class="ml-auto" href="#" hidden>
                                                    <form id='myform' class="cart-items-number d-flex" method='POST'
                                                        action='#'>
                                                        <input type='button' value='-'
                                                            class='qtyminus btn btn-success btn-sm ' field='quantity' />
                                                        <input type='text' name='quantity ' value='1'
                                                            class='qty form-control cantidad' />
                                                        <input type='button' value='+'
                                                            class='qtyplus btn btn-success btn-sm ' field='quantity' />
                                                    </form>

                                                </span>

                                            </div>

                                            <div class="col-lg-4" hidden>
                                                <div class="input-group-prepend">
                                                    <div class=" btn btn-icon btn-light btn-valor"><i
                                                            class="icofont-cart"></i></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5" hidden>
                                                <h6 class="text-kumel-texto-1">
                                                    {{ 'Disponible:'. ' ' . $value->STOCK}} </h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 " style="text-align: center;">
                                            <h6 class="txtStock font-weight-light text-danger">
                                                {{'Producto no disponible'}} </h6>
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
            </div>

            @else
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="list-card bg-light h-100 rounded overflow-hidden ">
                    <div class="list-card-image">
                        <a onclick="oCarrito.LinkProducto( '{{ $value->IMAGEN1}}','{{ $value->IMAGEN2}}','{{ $value->IMAGEN3}}','{{$value->DESCRIPCION}}','{{$value->PRECIO_VENTA}}','{{$value->TAMANO}}','{{$value->CODIGO_UNIDAD}}','{{$value->STOCK}}','{{$value->ID_PRODUCTO}}')"
                            href="#" class="text-dark">

                            <div class="col-sm-12 col-md-12 col-lg-12 claseTexto">
                                <input type="text" class="text-info codigo-precio-producto"
                                    value="{{$value->ID_PRODUCTO}}" hidden>
                                <input type="text" class="text-info stock-producto" value="{{$value->STOCK}}" hidden>


                                <div class="contenedor-imagen">
                                    <figure>
                                        <img class="imagen-producto" style="" src="{{$value->IMAGEN1}}">

                                        <div class="capa">

                                            <h3 class=""> @if(isset($value->TITULO)){{$value->TITULO}}@endif</h3>
                                            <p>
                                                @if(isset($value->PARRAFO1)){{$value->PARRAFO1}}@endif
                                                @if(isset($value->PARRAFO2)){{$value->PARRAFO2}}@endif
                                                @if(isset($value->PARRAFO3)){{$value->PARRAFO3}}@endif
                                                @if(isset($value->PARRAFO4)){{$value->PARRAFO4}}@endif
                                            </p>

                                        </div>

                                    </figure>


                                </div>



                                <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                    <h6 class="textoProducto text-kumel-titulo">
                                        {{ $value->DESCRIPCION }}
                                    </h6>

                                </div>




                                <div class=" col-sm-12 col-md-12 col-lg-12 price" style="text-align: center;">
                                    <h6 class=" text-kumel-bold" style="margin-bottom: 4%;">
                                        <?php echo  ' CLP '  . number_format($value->PRECIO_VENTA,0,',','.')    ?>
                                    </h6>
                                </div>



                                <div class="col-lg-10 col-sm-12 col-md-12" style="margin-left: 8%;">
                                    <div class="form-inline">
                                        <div class="col-lg-4 col-sm-4 col-md-4">

                                            <span class="" href="#">
                                                <form id='myform' class="cart-items-number d-flex" method='POST'
                                                    action='#'>
                                                    <input type='button' value='-'
                                                        class='qtyminus btn btn-success btn-sm ' field='quantity' />
                                                    <input type='text' name='quantity ' value='1'
                                                        class='qty form-control cantidad' />
                                                    <input type='button' value='+'
                                                        class='qtyplus btn btn-success btn-sm ' field='quantity' />
                                                </form>

                                            </span>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-md-4">
                                            <div class="input-group-prepend">
                                                <div class=" btn btn-icon btn-light btn-valor"><i
                                                        class="icofont-shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-3 col-md-5 ">
                                            <h7 class="text-kumel-texto-1">
                                                <?php echo  'Stock:'. ' ' . $value->STOCK  ?> </h7>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif



            @endforeach

        </div>
        </div>
    </section>
    <div class="col-lg-12">
        <hr></span>

    </div>


    <div class="container " style="max-width: 100%;">


        <div class="row bg-kumel-2 ">


            <div class="form-inline bg-kumel-2">
                <div class=" col-sm-6  col-md-6 col-lg-6">
                    <img class="img-nuestra-tienda" style="max-width: 100%;" src="img/despacho.jpg">

                </div>

                <div class=" col-sm-5 col-md-5 col-lg-5 " style="margin-bottom: 3%;">
                    <div class="form-inline">
                        <div class=" col-sm-5 col-md-5 col-lg-5 ">
                            <img class="img-fluid logo-img  " src="img/logo.png">
                        </div>

                        <h4 style="text-align: center;" class="text-kumel-titulo">Despacho</h4>
                    </div>


                    <p style="text-align: justify;" class="h5 text-kumel-titulo">
                        Entregas a domicilio RM: Ñuñoa, La Reina, Providencia,Las Condes.
                        <p style="text-align: justify;" class="h5 text-kumel-titulo"> Envio a domicilio: 4.000 CLP RM.
                        </p>
                        <p class="h5 text-kumel-titulo">
                            Por compras superiores a 35 mil CLP despacho gratuito en RM.
                        </p>
                        <p class="h5 text-kumel-titulo">
                            Entregas en Metro Plaza Egaña y Rojas Magallanes (L4) sin costo, coordinar por Whatsapps.
                        </p>
                        <p class="h5 text-kumel-titulo">
                            Otras comunas y todo Chile envio por pagar, coordinar por Whatsapps.
                        </p>

                        <br>
                        <p style="text-align: justify;" class="text-kumel-titulo h5 text-kumel-titulo">
                            Cualquier duda o consulta no dudes en contactarnos por los medios diponibles,
                            estaremos gustosos en atenderte.
                        </p>

                </div>


                <!-- <div class="col-lg-6" style="margin-bottom: 7%;">
               <img class="img-fluid logo-img  " src="img/logo.png">
               <h4 style="text-align: center;" class="text-kumel-titulo">Despacho</h4>
               <p class="h5 text-kumel-titulo">
                  Entregas a domicilio RM: Ñuñoa, La Reina, Providencia,Las Condes.
               </p>
               <p class="h5 text-kumel-titulo">
                  Envio a domicilio: 4.000 CLP RM.
               </p>
               <p class="h5 text-kumel-titulo">
                  Por compras superiores a 35 mil CLP despacho gratuito en RM.
               </p>
               <p class="h5 text-kumel-titulo">
                  Entregas en Metro Plaza Egaña y Rojas Magallanes (L4) sin costo, coordinar por Whatsapps.
               </p>
               <p class="h5 text-kumel-titulo">
                  Otras comunas y todo Chile envio por pagar, coordinar por Whatsapps.
               </p>

            </div> -->






            </div>
        </div>


    </div>

    <div class="col-lg-12">
        <hr></span>

    </div>




    <div class="container" style="max-width: 100%;">


        <div class="row bg-kumel-2 ">


            <div class="form-inline bg-kumel-2">
                <div class=" col-sm-6 col-md-6 col-lg-6">
                    <img class="img-nuestra-tienda" style="max-width: 100%;" src="img/tienda.jpg">

                </div>



                <div class=" col-sm-5 col-md-5 col-lg-5 " style="margin-bottom: 7%;">
                    <div class="form-inline">
                        <div class=" col-sm-5 col-md-5 col-lg-5 ">
                            <img class="img-fluid logo-img  " src="img/logo.png">
                        </div>

                        <h4 style="text-align: center;" class="text-kumel-titulo">Nuestra tienda</h4>
                    </div>



                    <p style="text-align: justify;" class="text-kumel-titulo h5 text-kumel-titulo">
                        Inspirados en lo natural, el bienestar y el buen gusto, nace Kummel, para satisfacer
                        las necesidades y los paladares de nuestros clientes. Para ello,contamos con productos naturales
                        y elaborados gourmet de alta calidad, provenientes de nuestro sur de Chile y diversas
                        lugares del mundo. </p>
                    <p style="text-align: justify;" class="text-kumel-titulo h5 text-kumel-titulo">
                        Somos un emprendimiento familiar, dedicado a la venta al por menor
                        de productos naturales y gourmet que busca ir creciendo acorde de las necesidades de nuestros
                        clientes. </p>

                </div>






            </div>
        </div>


    </div>
    <div class="col-lg-12">
        <hr></span>

    </div>


    </div>
    </div>
</body>

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
<script>
    $(document).ready(function () {

        $("#loader").show();
        $('#numCarrito').text(Number(localStorage.getItem('numeroCarrito')));

        if ($('#numCarrito').text() > 0) {
            $('#numCarrito').removeAttr('hidden', true);
        } else {
            $('#numCarrito').attr('hidden', true);
        }
        $("#loader").hide();
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@endsection