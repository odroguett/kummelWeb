
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <h5 class="modal-title text-kumel-titulo" id="exampleModalLabel">Datos del Pedido</h5>
    <button type="button" id="botonCerrarDespacho" class="close text-kumel-titulo" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body ">
    <div class="form-inline">
        <div class="col-md-3">
            <img class="img-fluid logo-img " src="img/logo.png">

        </div>

        <div class="col-md-9">
            <p class="text-kumel-titulo" style="margin-top: 5%;"> Por favor completa los datos correctamente. </p>
        </div>



    </div>


    <body class="fixed-bottom-padding">
        <div class="row">
            <div class="col-md-6">
                <label id="idError" type="text" class="text-danger" hidden></label>
            </div>
        </div>
        <!-- body -->
        <section class="py-4 osahan-main-body">

            <div class="title d-flex align-items-center py-3">
                <form action="" method="" class="">


                    <div class="row form-group">
                        <div class="col-md-6">
                            <input placeholder="Nombre" id="nombre" type="text" class="form-control input-personalizado"
                                required value="{{$oDatosDespacho->sNombre}}">  </span>

                        </div>
                        <div class="col-md-6">
                            <input placeholder="Apellidos" id="apellido" type="text"
                                class="form-control input-personalizado" required value="{{$oDatosDespacho->sApellido}}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input placeholder="Dirección" id="direccion" type="text"
                                class="form-control input-personalizado" required value="{{$oDatosDespacho->sDireccion}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input placeholder="Departamento" id="departamento" type="text"
                                class="form-control input-personalizado" value="{{$oDatosDespacho->sDepartamento}}">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-6">
                            <input placeholder="Ciudad" id="ciudad" type="text" class="form-control input-personalizado"
                                required value="{{$oDatosDespacho->sCiudad}}">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Comuna" id="comuna" type="text" class="form-control input-personalizado"
                                required value="{{$oDatosDespacho->sComuna}}">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12 ">
                            <input placeholder="Region" id="region" type="text" class="form-control input-personalizado"
                                value="{{$oDatosDespacho->sRegion}}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input placeholder="Teléfono" id="telefono" type="text"
                                class="form-control input-personalizado" required value="{{$oDatosDespacho->sTelefono}}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input placeholder="Email" id="email" type="email" class="form-control input-personalizado"
                                required value="{{$oDatosDespacho->sEmail}}">
                        </div>

                    </div>

                </form>

            </div>
            <div class="row form-group">
                <div class="col-md-11">
                    <button type="button" id="btnIngresar" class="btn btn-kumel-1 btn-block">Ingresar</button>
                </div>
            </div>
        </section>
    </body>
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
