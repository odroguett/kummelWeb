
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
<div class="modal-header bg-light">
    <h5 class="modal-title text-kumel-titulo" id="exampleModalLabel">Modificar Categoria</h5>
    <button type="button" id="botonCerrarDespacho" class="close text-kumel-titulo" data-dismiss="modal"
        aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body ">
<body class="fixed-bottom-padding">
        <div class="row">
            <div class="col-md-6">
                <label id="idError" type="text" class="text-danger" hidden></label>
            </div>
        </div>
        <!-- body -->
        <form action="{{route('modificarCategoria')}}" method="POST" class="">

            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row form-group inline">
                        <div class="col-md-1">
                            <input placeholder="" name="id_categoria" id="id_categoria" type="text" class="form-control "
                                hidden value=" {{$categoria['categoria']}}">  </span>

                        </div>
                        <div style="margin-bottom: -20px" class="col-md-3">
                            <h6>Descripcion:</h6>

                        </div>
                        <div class="col-md-6">
                            <input placeholder="" name="descripcion" id="descripcion" type="text"
                                class="form-control " required value="{{$categoria['descripcion']}}">
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 float-right d-flex ml-auto">
                          <button type="submit" id="" class="btn btn-kumel-1 btn-sm btn-block">Modificar</button> 
                             {{-- <button type="submit" id="" class="btn btn-kumel-1 btn-block">Ingresar</button>  --}}
                        </div>
                    </div>
                </form>

                   

            
           
        
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
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>