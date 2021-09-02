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
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="sidebar/demo.css" rel="stylesheet">
</head>

<body class="fixed-bottom-padding">
    <div class="col-lg-8 col-sm-8 col-md-8 mx-auto   " style="margin-top: 5px;  ">
        <h5 class="text-kumel-titulo  ">Administador</h5>
    </div>
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="container" style="  max-width: 90%; min-height: 40vh">


        <div class="col-lg-10 col-sm-10 col-md-10 p-4  ">
            <div id="accordion">

                <div class="card">

                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Categorias
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body bg-light ">
                            <div class='modal-body '>
                                
                                <table id="tbCategorias"
                                    class="  responsive-table table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th hidden class="texto-parrafo">ID</th>
                                            <th class="texto-parrafo">Descripcion</th>
                                            <th style="Editar">
                                            <th style="Eliminar">
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($cargarDatos->categorias))
                                  
                                        @foreach ($cargarDatos->categorias as $value )
                                        <tr>
                                            |<td hidden class="texto-parrafo">{{$value->ID_CATEGORIA}} </td>
                                            <td class="texto-parrafo">{{$value->DESCRIPCION}}</td>
                                            <td> <a href="#" onclick="oCarrito.cargarCategoria( '{{ $value->ID_CATEGORIA}}','{{$value->DESCRIPCION}}')" data-original-title="Editar" data-container="body" >Editar</a></td>
                                            <td><a href="#" onclick="oCarrito.eliminarCategoria( '{{ $value->ID_CATEGORIA}}','{{$value->DESCRIPCION}}')" data-original-title="Delete" id="btnEliminarBonosAguinaldos" >  Eliminar </a></td>
                                            
                                        </tr>
                                        @endforeach
                                  @endif
                                        
                                    

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="card  ">

                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                Unidades
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body bg-light ">
                            <div class='modal-body '>
                               
                                <br>
                                <table id="example"
                                    class="   responsive-table display table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripcion</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @if(isset($cargarDatos->unidades))
                                  
                                                 @foreach ($cargarDatos->unidades as $value )
                                                    <tr>
                                                        |<td class="texto-parrafo">{{$value->ID_UNIDAD}} </td>
                                                         <td class="texto-parrafo">{{$value->DESCRIPCION_UNIDAD}}</td>
    
                                                    </tr>
                                                @endforeach
                                            @endif
                                            

                                        </tr>
                                      

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="card  ">

                  <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"
                              aria-expanded="true" aria-controls="collapseThree">
                              Productos
                          </button>
                      </h5>
                  </div>

                  <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body bg-light ">
                          <div class='modal-body '>
                              <button type="submit">Modificar</button>
                              <table id="example"
                                  class="   responsive-table display table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Imagen</th>
                                        <th>Categoria</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        |@if(isset($cargarDatos->productos))
                                  
                                        @foreach ($cargarDatos->productos as $value )
                                           <tr>
                                               |<td class="texto-parrafo">{{$value->ID_PRODUCTO}} </td>
                                                <td class="texto-parrafo">{{$value->DESCRIPCION}}</td>
                                                <td class="texto-parrafo">{{$value->IMAGEN}}</td>
                                                <td class="texto-parrafo">{{$value->ID_CATEGORIA}}</td>

                                           </tr>
                                       @endforeach
                                   @endif

                                    </tr>
                                   

                                </tbody>


                              </table>

                          </div>

                      </div>
                  </div>
              </div>
              <div class="card  ">

                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="true" aria-controls="collapseFour">
                            Productos Ventas
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body bg-light ">
                        <div class='modal-body '>
                            
                            <br>
                            <table id="example"
                                class="   responsive-table display table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Precio Venta</th>
                                        <th>Porcentaje Descuento</th>
                                        <th>Stock</th>
                                        <th>Destacado</th>
                                        <th>UNIDAD</th>
                                        <th>IMAGEN1</th>
                                        <th>CATEGORIA</th>
                                        <th>RELACIONADO</th>
                                        <th>TITULO</th>
                                        <th>PARRAFO1</th>
                                        <th>PARRAFO2</th>
                                        <th>PARRAFO3</th>
                                        <th>PARRAFO4</th>
                                        <th>IMAGEN2</th>
                                        <th>IMAGEN3</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        |@if(isset($cargarDatos->productosVenta))
                                  
                                        @foreach ($cargarDatos->productosVenta as $value )
                                           <tr>
                                               |<td class="texto-parrafo">{{$value->ID_PRODUCTO}} </td>
                                                <td class="texto-parrafo">{{$value->DESCRIPCION}}</td>
                                                <td class="texto-parrafo">{{$value->PRECIO_VENTA}}</td>
                                                <td class="texto-parrafo">{{$value->PORCENTAJE_DESCUENTO}}</td>
                                                <td class="texto-parrafo">{{$value->STOCK}}</td>
                                                <td class="texto-parrafo">{{$value->DESTACADO}}</td>
                                                <td class="texto-parrafo">{{$value->ID_UNIDAD}}</td>
                                                <td class="texto-parrafo">{{$value->IMAGEN1}}</td>
                                                <td class="texto-parrafo">{{$value->ID_CATEGORIA}}</td>
                                                <td class="texto-parrafo">{{$value->RELACIONADO}}</td>
                                                <td class="texto-parrafo">{{$value->TITULO}}</td>
                                                <td class="texto-parrafo">{{$value->PARRAFO1}}</td>
                                                <td class="texto-parrafo">{{$value->PARRAFO2}}</td>
                                                <td class="texto-parrafo">{{$value->PARRAFO3}}</td>
                                                <td class="texto-parrafo">{{$value->PARRAFO4}}</td>
                                                <td class="texto-parrafo">{{$value->IMAGEN2}}</td>
                                                <td class="texto-parrafo">{{$value->IMAGEN3}}</td>

                                           </tr>
                                       @endforeach
                                   @endif

                                    </tr>
                                   

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>



</body>
<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="modalModificar">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content" id="mContent">
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
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>

<script>
    $(document).ready(function () {
      $("#tbCategorias").DataTable({

            "language": {
                "url": "js/Spanish.json.js",


            },

            /* 'columns' : [
                null,
                {'visible' : false,"width": "0px" },
                {'visible' : false,"width": "0px" },
                null,
                null,
                null,
                //hide the fourth column
                {'visible' : false,"width": "0px" },
                {'visible' : false,"width": "0px" },
                {'visible' : false,"width": "0px" },
                {'visible' : false,"width": "0px" },
            ], */
            "responsive": true,
            "lengthChange": true,
            "ordering": false,
            "info": false,
            "lengthChange": true,
           


        });
      
} );
   
</script>