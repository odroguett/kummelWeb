@php

//include_once($_SERVER['DOCUMENT_ROOT'].'/TopuvaWeb/rutas.php');
//require_once(BD . "catalogoBD.php");
//require_once(COMPARTIDA . "parametros.php");
// $arrayPago = $_POST["arrayPago"];
//$idDespacho = json_decode($_POST["idDespacho"],true);
//$idTipoDespacho = json_decode($_POST["tipoDespacho"],true);
//$totalProductosPago = json_decode($_POST["totalProductosPago"],true);
//$totalPago = json_decode($_POST["totalPago"],true); */
$idTipoPago =1;
$totalConDespacho =0;
$costoEnvio = 4000;
if($datosPagoOtd->totalPago < 40000) { $totalConDespacho=$datosPagoOtd->totalPago + $costoEnvio;

    }
    else
    {
    $totalConDespacho = $datosPagoOtd->totalPago;

    }


    @endphp


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" type="image/png" href="img/logo.png">
        <title>Agregar Dirección</title>
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



    <div class="modal-header bg-kumel-2">
        <h5 class="modal-title text-kumel-titulo" id="exampleModalLabel">Finalizar Pedido</h5>
        <button type="button" class="close text-kumel-titulo" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-light">

        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="">

            <!-- address header -->
            <div class="row bg-light ">



                <div class="col-md-12 text-right">
                    <button type="button" id="btnBorrarCarrito" class=" btn  btn-kumel-1" style="border:none">Borrar
                        Carrito</button>


                </div>
                <br />
                <br />

                <hr />
                <div class="col-md-12">
                    <div id="classDespacho">
                        <div class="p-3 bg-white rounded shadow-sm w-100 border">
                            <div class="d-flex align-items-center mb-2">
                                <div class="row">
                                    <h5 class="mb-0   text-kumel-titulo">Detalle Compra</h5>
                                </div>

                            </div>
                            <hr />

                            <div class="form-inline ">

                                <div class="col-lg-7">
                                    <h7 class=" text-kumel-titulo">Total Productos </h7>
                                </div>


                                <div class="col-md-4">
                                    <input type="text" style="max-width: 99%"
                                        class="form-control form-control-sm text-kumel-titulo  text-right "
                                        name="direccion" id="direccion" value="{{ $datosPagoOtd->totalProductosPago }} "
                                        readonly>
                                </div>

                            </div>
                            <br />

                          


                                <div class="form-inline ">
                                    <div class="col-lg-7">
                                        <h7 class=" text-kumel-titulo">Sub total </h7>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" style="max-width: 99%"
                                            class="form-control form-control-sm text-kumel-titulo text-right "
                                            name="direccion" id="direccion" value="{{ ' ' . number_format($datosPagoOtd->totalPago,0,',','.')  . " (CLP)" }} "
                                            readonly>
                                    </div>
                                  
                                </div>
                                <br />
                              


                                <div class="form-inline ">
                                    <div class="col-lg-7">
                                        <h7 class=" text-kumel-titulo"> Despacho  </h7>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" style="max-width: 99%"
                                            class="form-control form-control-sm text-dark text-right "
                                            name="direccion" id="direccion" value=" {{' ' .  number_format($costoEnvio,0,',','.')   . " (CLP)"  }} "
                                            readonly>
                                    </div>
                                  
                                </div>
                                <hr />

                                
                                <div class="form-inline ">
                                    <div class="col-lg-7">
                                        <h7 class=" text-kumel-titulo"> Total   </h7>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" style="max-width: 99%"
                                            class="form-control form-control-sm text-kumel-titulo text-right "
                                            name="direccion" id="direccion" value="  {{ ' ' .  number_format($totalConDespacho,0,',','.') . " (CLP)"     }} "
                                            readonly>
                                    </div>
                                  
                                </div>

                           
                        </div>
                    </div>


                </div>

            </div>
            <hr />


            <!-- body address -->
            <div class="row ">
                <div class=" col-lg-12   ">
                    <div id="classDespacho">
                        <div class="p-3  rounded bg-white shadow-sm w-100 border">
                            <div class="d-flex align-items-center mb-2">
                                <div class="row">
                                    <h5 class="mb-0   text-kumel-titulo">Seleccionar Medio de pago</h5>
                                </div>
                                <br>
                            </div>

                            <hr>
                            <div class="row">


                                <div class="form-check form-check-inline class-transferencia">
                                    <input class="form-check-input" id="rdTransferencia" type="radio"
                                        name="rdTransferencia" value="option1" checked>
                                    <label class="form-check-label h7  text-kumel-titulo" for="inlineRadio1">Transferencia
                                    </label>
                                </div>


                               {{--  <div class="form-check form-check-inline class-transferencia ">
                                    <input class="form-check-input" id="rdEntrega" type="radio" name="rdEntrega"
                                        value="option2">
                                    <label class="form-check-label h7  text-kumel-titulo text-right" for="inlineRadio2">
                                        Pago a la entrega</label>
                                </div> --}}
                                <div class="form-check form-check-inline class-transferencia ">
                                    <input class="form-check-input" id="rdTarjetasBancarias" type="radio"
                                        name="rdTarjetasBancarias" value="option3">
                                    <label class="form-check-label h7  text-kumel-titulo text-right" for="inlineRadio2">
                                        Tarjetas Bancarias</label>
                                </div>




                            </div>
                            <br>
                            
                                <div id="idTransferencia">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <h7 class=" text-kumel-titulo"> Banco   </h7>
                                    
                                    
                                            <input type="text" 
                                            class="form-control form-control-sm text-kumel-titulo  "
                                            name="direccion" id="direccion" value=" Banco de Chile"
                                            readonly>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group  row ">
                                        <div class="col-md-6">
                                            <h7 class=" text-kumel-titulo"> Cuenta vista  </h7>
                                        
                                        
                                            <input type="text" 
                                            class="form-control form-control-sm text-kumel-titulo  "
                                            name="direccion" id="direccion" value=" 43521195 "
                                            readonly>
                                        </div>


                                            <div class="col-md-6">
                                                <h7 class=" text-kumel-titulo"> Rut   </h7>
                                        
                                        
                                                <input type="text" 
                                                class="form-control form-control-sm text-kumel-titulo  "
                                                name="direccion" id="direccion" value="  16.357.503-5 "
                                                readonly>
                                            </div>
                                          

                                      
                                    </div>
                                   
                                   
                                   
                                    <div class="form-group  row ">
                                        <div class="col-md-6">
                                            <h7 class=" text-kumel-titulo"> Nombre   </h7>
                                        
                                        
                                            <input type="text" 
                                            class="form-control form-control-sm text-kumel-titulo  "
                                            name="direccion" id="direccion" value=" Daphne Droguett Contreras "
                                            readonly>
                                        </div>


                                            <div class="col-md-6">
                                                <h7 class=" text-kumel-titulo"> Correo   </h7>
                                        
                                        
                                                <input type="text" 
                                                class="form-control form-control-sm text-kumel-titulo  "
                                                name="direccion" id="direccion" value=" daphnedroguett@gmail.com "
                                                readonly>
                                            </div>
                                          

                                      
                                    </div>

                                </div>




                         

                            <div id="idPagoDomicilio" hidden>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <p class=" text-kumel-titulo h6">El cobro se efectuará al momento de entrega del producto.</p>
                                       
                                        <p class=""> </p>
                                        <p class=""></p>
                                    </div>
                                </div>
                            </div>

                            <div id="idPagoBancario" hidden>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <p class="  text-kumel-titulo h6">El cobro se efectuará mediante Pago Flow</p>

                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                    <br>
                </div>

            </div>

        </div>
        <div class="row float-right">
            <div class="col-md-12">
                <button type="button" id="btnFinalizarPago" class="btn btn-kumel-1 btn-block"
                    onclick='oCarrito.FinalizarPago(  {{  $datosPagoOtd->arrayPago}}, {{$datosPagoOtd->idDespacho }}  , {{ $datosPagoOtd->totalProductosPago}}  , {{ $datosPagoOtd->totalPago}} , {{$datosPagoOtd->idTipoDespacho }})'>Solicitar
                    Pedido</button>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>