

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
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
  
          .modal.right.fade.show .modal-dialog {
              right: 0;
          }
      </style>
  </head>
  
<body class="fixed-bottom-padding">

   <!-- body -->
   <section class="py-4 osahan-main-body">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">

               <div class="osahan-slider-item">
                  <img id="imagenProducto" src="{{$detalleProductosVenta->imagen }}" class="img-fluid mx-auto shadow-sm rounded "
                     alt="Responsive image">
               </div>
               </br>
               <div class="row">

               </div>
            </div>
            <div class="col-lg-6 claseTexto">

               <input type="text" class="text-info codigo-precio-producto" value="{{$detalleProductosVenta->codigoProducto}}"
                  hidden>

               <div class="p-4 bg-light rounded shadow-sm ">


                  <h5 tyle="text-align: left;" class="text-kumel-titulo textoProducto">
                     {{ $detalleProductosVenta->descripcion . ' ' . $detalleProductosVenta->tamanoUnidad .$detalleProductosVenta->codigoUnidad  }}  </h5>
              @if($detalleProductosVenta->stock==0)
                  <div class="row">
                     <div class="col-md-12 ">
                        <h6 class="txtStock font-weight-light text-danger">
                           <?php echo 'Producto no disponible'    ?> </h5>
                     </div>
                  </div>
               @endif
                  <p class=" h6 text-kumel-titulo m-0 d-flex align-items-center">
                     Precio Unidad (CLP) : <b
                        class="h6 m-0 text-kumel-bold price">{{ ' ' .  number_format($detalleProductosVenta->precioVenta,0,',','.')}}     </b>
                  </p>
                  </br>
               @if($detalleProductosVenta->stock==0)
                  <div class="row justify-content-start ">
                     <div class="col-3">
                        <form id="myform" class="cart-items-number d-flex" method="POST" action="#">
                           <input type="button" value="-" class="qtyminus btn btn-success btn-sm" field="quantity"
                              disabled>
                           <input type="text" name="quantity" value='{{$detalleProductosVenta->cantidad }}'
                              class="qty form-control cantidad">
                           <input type="button" value="+" class="qtyplus btn btn-success btn-sm" field="quantity"
                              disabled>
                        </form>
                     </div>
               @else
                     <div class="row justify-content-start ">
                        <div class="col-3">
                           <form id="myform" class="cart-items-number d-flex" method="POST" action="#">
                              <input type="button" value="-" class="qtyminus btn btn-success btn-sm" field="quantity">
                              <input type="text" name="quantity" value='{{$detalleProductosVenta->cantidad }}'
                                 class="qty form-control cantidad">
                              <input type="button" value="+" class="qtyplus btn btn-success btn-sm" field="quantity">
                           </form>
                        </div>
               @endif
                     
               @if($detalleProductosVenta->stock==0)
                        <div class="col-9  align-items-right">
                           <button type="button" id="btnAgregarCarro" class="btn btn-kumel-1 rounded  btn-block  "
                              disabled> Agregar al
                              Carro</button>
                        </div>
               @else
                        <div class="col-9  align-items-right">
                           <button type="button" id="btnAgregarCarro" class="btn btn-kumel-1 rounded  btn-block  ">
                              Agregar al
                              Carro</button>
                        </div>
               @endif


                     </div>
                     </br>
                     <div class="row divider">
                        <div class="col-3">
                           <p class="h6 text-kumel-titulo">Disponible en:</p>

                        </div>
                     </div>
                     <div class="row">
                        <div class="col-9">
                           <p class="text-kumel-texto-1">{{ $detalleProductosVenta->disponible }} </p>
                        </div>
                     </div>
                  </div>


                  <div class="details">
                     <div class="pt-3 bg-light">
                        <p class="text-kumel-texto-1">Finas almendras naturales.........</p>
                     </div>

                  </div>



               </div>




            </div>
         </div>
      </div>
      <h5 style="text-align: left;" class="text-kumel-titulo ">Productos Similares</h5>
      <div class="pick_today">

         <div class="row">

           
           @foreach($detalleProductosVenta->arrProductosRelacionados as  $value)
           
        

            <div class="col-6 col-md-3 mb-3">
               <div class="list-card bg-light h-100 rounded overflow-hidden position-relative shadow-sm">
               @if($detalleProductosVenta->stock ==0)
               
                  <div class="list-card-image">


                     <div class="p-3 claseTexto">
                        <input type="text" class="text-info codigo-precio-producto"
                           value="{{  $value->ID_PRODUCTO  }} " hidden>
                        <div class="contenedor-imagen">
                           <figure>
                              <img class="imagen-producto" src="{{  $value->IMAGEN  }}">

                              <div class="capa">

                                 <h3 class=""> @if(isset($value->TITULO)){{ $value->TITULO }} @endif</h3>
                                 <p>
                                     @if(isset($value->PARRAFO1)){{ $value->PARRAFO1 }} @endif
                                     @if(isset($value->PARRAFO2)){{ $value->PARRAFO2 }} @endif
                                     @if(isset($value->PARRAFO3)){{ $value->PARRAFO3 }} @endif
                                     @if(isset($value->PARRAFO4)){{ $value->PARRAFO4 }} @endif
                                 </p>

                              </div>

                           </figure>

                        </div>
                        <div class="col-lg-12" style="text-align: center;">
                           <h6 class="textoProducto text-kumel-titulo">
                              {{ $value->DESCRIPCION . ' ' . $value->TAMANO_UNIDAD  .  $value->CODIGO_UNIDAD  }}
                               
                           </h6>

                        </div>

                        <div class="col-lg-12">
                           <div class=" form-inline precio">
                              <div class="col-lg-3">

                                 <span class="ml-auto" href="#" hidden>
                                    <form id='myform' class="cart-items-number d-flex" method='POST' action='#'>
                                       <input type='button' value='-' class='qtyminus btn btn-success btn-sm '
                                          field='quantity' />
                                       <input type='text' name='quantity ' value='1'
                                          class='qty form-control cantidad' />
                                       <input type='button' value='+' class='qtyplus btn btn-success btn-sm '
                                          field='quantity' />
                                    </form>

                                 </span>

                              </div>

                              <div class="col-lg-4" hidden>
                                 <div class="input-group-prepend">
                                    <div class=" btn btn-icon btn-light btn-valor"><i class="icofont-shopping-cart"></i>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-5" hidden>
                                 <h6 class="text-kumel-texto-1">
                                   {{'Disponible:'. ' ' . $value->STOCK }}   </h6>
                              </div>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 " style="text-align: center;">
                              <h6 class="txtStock font-weight-light text-danger">
                                 {{'Producto no disponible'}}   </h6>
                           </div>
                        </div>
                     </div>




                  </div>
                  
               @else
                
                  <div class="list-card-image">


                     <div class="p-3 claseTexto">
                        <input type="text" class="text-info codigo-precio-producto"
                           value="{{  $value->ID_PRODUCTO  }}" hidden>
                        <div class="contenedor-imagen">
                           <figure>
                              <img class="imagen-producto" src="{{  $value->IMAGEN  }}">

                              <div class="capa">

                                 <h3 class=""> @if(isset($value->TITULO)){{ $value->TITULO }} @endif</h3>
                                 <p>
                                    @if(isset($value->PARRAFO1)){{ $value->PARRAFO1 }} @endif
                                    @if(isset($value->PARRAFO2)){{ $value->PARRAFO2 }} @endif
                                    @if(isset($value->PARRAFO3)){{ $value->PARRAFO3 }} @endif
                                    @if(isset($value->PARRAFO4)){{ $value->PARRAFO4 }} @endif
                                 </p>

                              </div>

                           </figure>

                        </div>
                        <div class="col-lg-12" style="text-align: center;">
                           <h6 class="textoProducto text-kumel-titulo">
                              {{ $value->DESCRIPCION . ' ' . $value->TAMANO_UNIDAD  .  $value->CODIGO_UNIDAD  }}
                           </h6>

                        </div>

                        <div class="col-lg-12 price" style="text-align: center;">
                           <h6 class=" text-kumel-bold" style="margin-bottom: 4%;">
                              {{   ' CLP '  . number_format($value->PRECIO_VENTA,0,',','.')   }}
                                 
                           </h6>
                        </div>
                        <div class="col-lg-12">
                           <div class=" form-inline precio">
                              <div class="col-lg-3">

                                 <span class="ml-auto" href="#">
                                    <form id='myform' class="cart-items-number d-flex" method='POST' action='#'>
                                       <input type='button' value='-' class='qtyminus btn btn-success btn-sm '
                                          field='quantity' />
                                       <input type='text' name='quantity ' value='1'
                                          class='qty form-control cantidad' />
                                       <input type='button' value='+' class='qtyplus btn btn-success btn-sm '
                                          field='quantity' />
                                    </form>

                                 </span>

                              </div>

                              <div class="col-lg-4">
                                 <div class="input-group-prepend">
                                    <div class=" btn btn-icon btn-light btn-valor"><i class="icofont-shopping-cart"></i>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-5">
                                 <h6 class="text-kumel-texto-1">
                                    {{  'Disponible:'. ' ' . $value->STOCK }} </h6>
                                    
                              </div>

                           </div>
                        </div>
                     </div>




                  </div>
                  
                
              @endif
               </div>
            </div>
         @endforeach
         </div>
      </div>
      </div>
   

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
</body>

</html>