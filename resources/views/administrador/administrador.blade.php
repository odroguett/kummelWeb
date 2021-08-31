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
                                            <th class="texto-parrafo">ID</th>
                                            <th class="texto-parrafo">Descripcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($cargarDatos->categorias))
                                  
                                        @foreach ($cargarDatos->categorias as $value )
                                        <tr>
                                            |<td class="texto-parrafo">{{$value->ID_CATEGORIA}} </td>
                                            <td class="texto-parrafo">{{$value->DESCRIPCION}}</td>

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
                                <button type="submit">Modificar</button>
                                <br>
                                <table id="example"
                                    class="   responsive-table display table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripcion</th>
                                            <th>Habilita Menu</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            |<td>Tiger Nixon</td>
                                            <td>Tiger Nixon</td>
                                            <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

                                        </tr>
                                        <tr>
                                            |<td>Tiger Nixon</td>
                                            <td>Tiger Nixon</td>
                                            <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                        </tr>
                                        <tr>
                                            |<td>Tiger Nixon</td>
                                            <td>Tiger Nixon</td>
                                            <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                        </tr>
                                        <tr>
                                            |<td>Tiger Nixon</td>
                                            <td>Tiger Nixon</td>
                                            <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

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
                                          <th>Habilita Menu</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          |<td>Tiger Nixon</td>
                                          <td>Tiger Nixon</td>
                                          <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

                                      </tr>
                                      <tr>
                                          |<td>Tiger Nixon</td>
                                          <td>Tiger Nixon</td>
                                          <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                      </tr>
                                      <tr>
                                          |<td>Tiger Nixon</td>
                                          <td>Tiger Nixon</td>
                                          <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                      </tr>
                                      <tr>
                                          |<td>Tiger Nixon</td>
                                          <td>Tiger Nixon</td>
                                          <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

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
                            <button type="submit">Modificar</button>
                            <br>
                            <table id="example"
                                class="   responsive-table display table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Habilita Menu</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        |<td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

                                    </tr>
                                    <tr>
                                        |<td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                    </tr>
                                    <tr>
                                        |<td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                    </tr>
                                    <tr>
                                        |<td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
                                        <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

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
        $("#example").DataTable({

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
    });
</script>