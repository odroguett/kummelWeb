
@php
$arrayCarrito = $datosCompraOtd->arrayCarrito;
$arrayStock = $datosCompraOtd->arrayStock;
$totalProductos=0;
$totalPago=0;
$stock=0;    
$idDespacho = $datosCompraOtd->idDespacho;



foreach ($arrayCarrito as  $value) {
    if(isset($value['Producto']))
    {
        $totalProductos = $totalProductos + (int)$value['Cantidad'];
         $totalPago = ($totalPago + (int)$value['Precio'] * (int)$value['Cantidad'] );
        
    }
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
   <title>Comprar Productos</title>
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

<input id="comIdDespacho" type="text" class="text-info" value="  {{$idDespacho}} " hidden>
<input id="totalProductosPago" type="text" class="text-info" value="{{ $totalProductos}}" hidden>

 <body>


   <section class="py-4 osahan-main-body">

      <div class="container ">
         <div class="col-md-10 ">

            <div class="form-inline rounded">
               <span class="c-number">1</span>
               <div class="form-group">
                  <span class="text-kumel-titulo">Total Productos:</span>
                  <span id="totalProductos">{{$totalProductos }} </span>

               </div>
            </div>
            @php
                
                
            @endphp
        
            @foreach($arrayCarrito as $value)
           
           
            
                  @if(isset($value['CodigoProducto']))
            
                        <div class="comprar">
                        <input id="codigoProducto" type="text" class="text-info codigo-producto"
                        value="{{ trim($value['CodigoProducto'])}}"   hidden>
                         <div class="form-inline precio_total">

                         <div class="col-md-6">
                            <div class="d-flex  align-items-center p-3">
                                <a href="#"><img src="img/cart/g1.png" class="img-fluid"></a>
                                    <a href="#" class="ml-3 text-kumel-titulo text-decoration-none w-100 ">
                                <h6 class=" text-kumel-titulo">
                                     @if(isset($value['Producto'])) {{ $value['Producto']}} @endif
                                </h6>
                                <div class="d-flex align-items-center   ">
                                    <p class=" m-0  text-kumel-bold mostrar-precio ">
                                    @if(isset($value['Precio'])) {{ '$ ' .  number_format($value['Precio']*  $value['Cantidad'],0,',','.') }} @endif 
                                    </p>

                                </div>

                                </a>

                            </div>
                        </div>
                          <div class="col-md-1 clase-cantidad">
                                <input type="text" class="precio-total" value= {{ $value['Precio'] }}  hidden>
                                <input id="stockProducto" type="text" class="text-info stock-producto"  value={{  trim($arrayStock->get('stock'))}} hidden>
                                <span class="ml-auto" href="#">
                                <form id='myform' class="cart-items-number d-flex" method='POST' action='#'>
                                <input type='button' value='-' class='qtyminus qtyBajar btn btn-success btn-sm '
                                field='quantity' />
                                <input type='text' name='quantity '
                                value= @if(isset($value['Cantidad'])) {{$value['Cantidad']}}@endif
                                class='qty form-control cantidad ' />
                                <input type='button' value='+' class='qtyplus qtySubir btn btn-success btn-sm '
                                field='quantity' />
                                </form>

                                </span>
                            </div>
                        </div> 
                        </div> 

                @endif
            @endforeach

           <div class="rounded shadow bg-info d-flex align-items-center p-3 ">

               <div class="more">

                  <div class="form-inline">
                     <h6 class="text-left text-kumel-titulo "> SUB TOTAL CLP: </h6>
                     <h6 id="subTotal" class="text-left text-kumel-titulo">
                        {{ ' ' .  number_format($totalPago,0,',','.')  }}
                     </h6>
                  </div>
                  <h7 class="text-left text-kumel-titulo">Costo por despacho se agrega al
                     finalizar
                     la
                     compra.</h7>
               </div>
            </div>

         </div>
         </br>
         <div class="col-lg-12">
            <hr></span>

         </div>
         <div class="col-md-10  ">

            <!-- address header -->

            <div class="form-inline">
               <span class="c-number">2</span> Medio de Entrega
            </div>
            </br>
            <div class="form-inline border-0">
               <div class="form-check bg-light  form-check-inline">
                  <input class="form-check-input" id="rdDespacho" type="radio" name="inlineRadioOptions"
                     id="inlineRadio1" value="option1" checked>
                  <label class="form-check-label" for="inlineRadio1">Despacho</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" id="rdRetiro" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                     value="option2">
                  <label class="form-check-label" for="inlineRadio2">Retiro</label>
               </div>
            </div>
            </br>

            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                  <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">

                     <label class="custom-control-label w-100" for="customRadioInline1">
                        <div id="classDespacho">
                           <div class="p-3 bg-light rounded  ">
                              <div class="row form-group">
                                 <div class="col-md-6">
                                    <button type="button" id="btnAgregarDireccion" style="border: none;"  class="btn btn-kumel-1">Agregar/Modificar</button>
                                    </span>
                                 </div>

                                 <div class="col-md-6">
                                 <button type="button"  id="btnEliminarDespacho" style="border: none;" class=" btn  btn-kumel-1">Eliminar</button></span>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <hr></span>

                              </div>
                              <div class="d-flex align-items-center  mb-2 ">
                                 <p class="mb-0 text-kumel-bold h6">Despacho</p>

                              </div>



                              <div class="row">
                                 <div class="col-md-10">
                                    <label class=" margin-left text-kumel-titulo">Direccion: </label>
                                    <label id="comDireccion" class=" text-kumel-titulo">  {{$datosCompraOtd->direccion}} 
                                    </label>
                                 </div>


                              </div>
                              <div class="row ">

                                 <div class="col-md-6">
                                    <label type="text" class=" text-kumel-titulo">Comuna: </label>
                                    <label id="comComuna" type="text" class=" text-kumel-titulo">{{ $datosCompraOtd->comuna}}  
                                    </label>
                                 </div>
                                 <div class="col-md-6">
                                    <label type="text" class=" text-kumel-titulo">Ciudad: </label>
                                    <label id="comCiudad" type="text" class=" text-kumel-titulo">{{ $datosCompraOtd->ciudad }} 
                                    </label>
                                 </div>

                              </div>
                              <div class="row">

                                 <div class="col-md-6">
                                    <label type="text" class=" text-kumel-titulo">Region: </label>
                                    <label id="comRegion" type="text" class=" text-kumel-titulo">{{$datosCompraOtd->region }} 
                                    </label>
                                 </div>

                                 <div class="col-md-6">
                                    <label type="text" class="text-kumel-titulo">Depto: </label>

                                    <label id="comDepartamento" type="text"
                                       class="text-kumel-titulo">{{  $datosCompraOtd->departamento }} 
                                    </label>
                                 </div>
                              </div>
                              

                              <div hidden id="classRetiro">
                              <div class="col-lg-12">
                                 <hr></span>

                              </div>

                                 <div class="d-flex align-items-center mb-2">
                                    <p class="mb-0 h6 text-kumel-bold"> Direcciones de Retiro</p>

                                 </div>
                                 <p class="text-kumel-titulo">Comuna Ñuñoa</p>
                                 <p class="text-kumel-titulo"> Plaza Egaña/ Metro Linea 4</p>
                                 <p class="text-kumel-titulo">Comuna La Florida</p>
                                 <p class="text-kumel-titulo"> Rojas Magallanes/ Metro Linea 4</p>



                              </div>


                           </div>

                        </div>

                     </label>
                  </div>


                  <a href="#" id="btnContinuarPago" class="btn btn-kumel-1  btn-block" type="button"
                     data-toggle="collapse" data-target="#collapsethree" aria-expanded="true"
                     aria-controls="collapsethree">Continuar Pago</a>

                  {{--    <a href="{{ route('comprobante') }}" class=" btn  btn-sm">
                        <p class=" text-kumel-titulo font-weight-light h5 ">Contacto</p>
                     </a> --}}

                    
               </div>
            </div> 






         </div>


      </div>





   </section>
   <!-- Modal -->
   <div class="modal fade" id="modalDireccion" tabindex="-1" role="dialog" aria-labelledby="modalDireccion">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content" id="mContent">


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
<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
   </script> 

