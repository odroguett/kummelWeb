<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="/image/png" href="/img/logo.png">
    <title>Agregar Dirección</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{"/slick/slick.min.css"}}" />
    <link rel="stylesheet" type="text/css" href="{{"/slick/slick-theme.min.css"}}" />
    <!-- Icofont Icon-->
    <link href="{{"/icons/icofont.min.css"}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{"/bootstrap/css/bootstrap.min.css"}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{"/css/style.css"}}" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="{{"/sidebar/demo.css"}}" rel="stylesheet">
</head>

<body class="fixed-bottom-padding">




    <!-- bread_cum -->
    <nav aria-label="breadcrumb" class="breadcrumb mb-0">
        <div class="container">
            <ol class="d-flex align-items-center mb-0 p-0">
                <li class="breadcrumb-item"><a href={{route('kummel')}} class="text-kumel-bold">Kummel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mi cuenta</li>
            </ol>
        </div>
    </nav>
    <!-- body -->
    <section class="py-4 osahan-main-body">
        <div class="container ">
            <div class="row">

                <div class="col-lg-8 p-3 bg-white rounded shadow-sm">
                    <div class="form-inline">
                        <div class="col-md-2">
                            <img class="img-fluid logo-img " src="/img/logo.png">

                        </div>
                        <h4 class="mb-4 profile-title text-kumel-titulo" style="margin-top: 5%;">
                            {{'Hola ' . auth()->user()->name}}</h4>

                    </div>

                    <hr>
                    <div id="edit_profile">
                        <div class="p-0">
                            <form action="{{route('agregaDatosClientes')}}" method="POST">
                                @csrf
                                <input type="text" class="form-control" name="idUsuario" id="idUsuario"
                                    value="{{auth()->user()->id}}" hidden>
                                  
                                @if(isset($datosCliente) &&  $datosCliente->count() > 0  )
                                @foreach ($datosCliente as $val )


                                <h6 class="mb-4 profile-title text-kumel-titulo" style="margin-top: 5%;">Ingresa tus
                                    datos para despacho.</h6>
                                <div class="form-group row">
                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Nombre</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control text-kumel-titulo" name="nombre"
                                            id="nombre" placeholder="" value=@if(isset($val->NOMBRE)) {{$val->NOMBRE}}
                                        @endif required >
                                    </div>

                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Apellidos</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="apellido" id="apellido"
                                            placeholder="" value=@if(isset($val->APELLIDOS)) {{$val->APELLIDOS}} @endif
                                        required>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-1 col-form-label text-kumel-titulo">Direccion</label>
                                    <div class="col-sm-11 col-md-11 col-lg-11">
                                        <input type="text" class="form-control" name="direccion" id="direccion"
                                            placeholder="" value=@if(isset($val->DIRECCION)) {{$val->DIRECCION}} @endif
                                        required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Ciudad</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder=""
                                            value=@if(isset($val->CIUDAD)) {{$val->CIUDAD}} @endif required>
                                    </div>

                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Comuna</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="comuna" id="comuna" placeholder=""
                                            value=@if(isset($val->COMUNA)) {{$val->COMUNA}} @endif required>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Region</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="region" id="region" placeholder=""
                                            value=@if(isset($val->REGION)) {{$val->REGION}} @endif required>
                                    </div>

                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Depto</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="departamento" id="departamento"
                                            placeholder="" value=@if(isset($val->DEPARTAMENTO)) {{$val->DEPARTAMENTO}}
                                        @endif >
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Email</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="email" id="email" placeholder=""
                                            value=@if(isset($val->EMAIL)) {{$val->EMAIL}} @endif required>
                                    </div>

                                    <label for=""
                                        class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Telefono</label>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input type="text" class="form-control" name="telefono" id="telefono"
                                            placeholder="" value=@if(isset($val->TELEFONO)) {{$val->TELEFONO}} @endif
                                        required>
                                    </div>




                                    @endforeach
                                    @else
                                    <h6 class="mb-4 profile-title text-kumel-titulo" style="margin-top: 5%;">Ingresa tus
                                        datos para despacho.</h6>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Nombre</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="nombre" id="nombre"
                                                placeholder="" required>
                                        </div>

                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Apellidos</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="apellido" id="apellido"
                                                placeholder="" required>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-sm-1 col-form-label text-kumel-titulo">Direccion</label>
                                        <div class="col-sm-11 col-md-11 col-lg-11">
                                            <input type="text" class="form-control" name="direccion" id="direccion"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Ciudad</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="ciudad" id="ciudad"
                                                placeholder="" required>
                                        </div>

                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Comuna</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="comuna" id="comuna"
                                                placeholder="" required>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Region</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="region" id="region"
                                                placeholder="" required>
                                        </div>

                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Depto</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="departamento"
                                                id="departamento" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Email</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="" required>
                                        </div>

                                        <label for=""
                                            class="col-sm-1 col-md-1 col-lg-1 col-form-label text-kumel-titulo">Telefono</label>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <input type="text" class="form-control" name="telefono" id="telefono"
                                                placeholder="" required>
                                        </div>

                                        @endif



                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2 ml-auto d-flex">
                                            <button type="submit" class="btn btn-kumel-1 ">Guardar</button>

                                        </div>
                                    </div>
                            </form>
                        </div>
                        <hr>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <a href="change_password.html"
                                    class="p-3 btn-light border btn d-flex align-items-center text-kumel-titulo">Cambiar
                                    Password
                                    <i class="icofont-rounded-right ml-auto"></i></a>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <a href="deactivate_account.html"
                                    class="p-3 btn-light border btn d-flex align-items-center text-kumel-titulo">Eliminar
                                    Cuenta
                                    <i class="icofont-rounded-right ml-auto"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{"/jquery/jquery.min.js"}} "></script>
    <script type="text/javascript" src=" {{"/DataTables/datatables.min.js"}} "></script>
    <script src="{{"/bootstrap/js/bootstrap.bundle.min.js"}}"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="{{"/slick/slick.min.js"}}"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="{{"/sidebar/hc-offcanvas-nav.js"}}"></script>
    <!-- Custom scripts for all pages-->
    <script src={{"/js/osahan.js"}}></script>
    <script src={{"/js/topuva.js"}}></script>
    {{-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 
    </script>--}}
</body>

</html>