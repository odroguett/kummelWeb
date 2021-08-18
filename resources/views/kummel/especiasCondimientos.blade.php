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

<body class="fixed-bottom-padding">
    <!-- body -->
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <section class="py-4 osahan-main-body">

        <!-- pick today -->
        <div class="d-flex align-items-center mb-3">
            <h5 style="text-align: left;" class="text-kumel-titulo ">Especias Condimientos</h5>
        </div>
        <div class="pick_today">

            <div class="row">
                @foreach($precioProductos as $value)
                

                @if ($value->STOCK <=0) <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="list-card bg-light h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">

                            <a onclick="oCarrito.LinkProducto( '{{ $value->IMAGEN1}}','{{ $value->IMAGEN2}}','{{ $value->IMAGEN3}}','{{$value->DESCRIPCION}}','{{$value->PRECIO_VENTA}}','{{$value->TAMANO}}','{{$value->CODIGO_UNIDAD}}','{{$value->STOCK}}','{{$value->ID_PRODUCTO}}')"
                                href="#" class="text-dark">

                                <div class=" claseTexto col-sm-12 col-md-12 col-lg-12">

                                    <input type="text" class="text-info codigo-precio-producto"
                                        value="{{$value->ID_PRODUCTO }}" hidden>
                                    <input type="text" class="text-info stock-producto" value="{{$value->STOCK }}"
                                        hidden>
                                    <div class="contenedor-imagen col-sm-12 col-md-12 col-lg-12">
                                        <figure>
                                            <img class="imagen-producto" src="{{$value->IMAGEN1 }}">
                                            </img>

                                            <div class="capa">

                                                <h3 class="">{{$value->TITULO }}</h3>
                                                <p>
                                                     @isset($value->PARRAFO1) {{$value->PARRAFO1 }}  @endisset 
                                                     @isset($value->PARRAFO2 ) {{$value->PARRAFO2 }} @endisset 
                                                     @isset($value->PARRAFO3 ) {{$value->PARRAFO3 }} @endisset 
                                                     @isset($value->PARRAFO4 ) {{$value->PARRAFO4 }}  @endisset
                                                </p>

                                            </div>

                                        </figure>

                                    </div>



                                    <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                        <h6 class="textoProducto text-kumel-titulo">
                                            {{$value->DESCRIPCION  }}
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
                                                    {{   'Disponible:'. ' ' . $value->STOCK  }} </h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 " style="text-align: center;">
                                            <h6 class="txtStock font-weight-light text-danger">
                                                {{ 'PRODUCTO NO DISPONIBLE' }}} </h6>
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
                                    value="{{ $value->ID_PRODUCTO}}" hidden>
                                <input type="text" class="text-info stock-producto"
                                    value="{{ $value->STOCK}}" hidden>


                                <div class="contenedor-imagen">
                                    <figure>
                                        <img style="" class="imagen-producto" src="{{ $value->IMAGEN1}}">

                                        <div class="capa">

                                            <h3 class="text-kumel-texto_bold">{{ $value->TITULO}}</h3>
                                            <p class="text-kumel-texto">
                                             @isset($value->PARRAFO1) {{$value->PARRAFO1 }}  @endisset 
                                             @isset($value->PARRAFO2 ) {{$value->PARRAFO2 }} @endisset 
                                             @isset($value->PARRAFO3 ) {{$value->PARRAFO3 }} @endisset 
                                             @isset($value->PARRAFO4 ) {{$value->PARRAFO4 }}  @endisset
                                            </p>

                                        </div>

                                    </figure>


                                </div>



                                <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                    <h6 class="textoProducto text-kumel-titulo">
                                       {{$value->DESCRIPCION  }}
                                    </h6>

                                </div>




                                <div class=" col-sm-12 col-md-12 col-lg-12 price" style="text-align: center;">
                                    <h6 class=" text-kumel-bold" style="margin-bottom: 4%;">
                                       {{' CLP '  . number_format($value->PRECIO_VENTA,0,',','.')}}
                                        
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
                                                        class="icofont-cart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-lg-3 col-md-5 ">
                                            <h7 class="text-kumel-texto-1">
                                             {{'Stock:'. ' ' . $value->STOCK}}
                                                
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
</body>

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
@endsection