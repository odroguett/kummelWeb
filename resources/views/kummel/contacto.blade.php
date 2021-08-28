@extends('layouts.plantilla')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="icon" type="image/png" href="img/logo.png">
   <title>Contacto</title>
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


<body class="fixed-bottom-padding bg-light">

   <section class="py-4 osahan-main-body">
      <div class="container ">
         <div class="row">

            <div class="col-lg-12  bg-light rounded border shadow-sm">

               <div id="edit_profile">
                 
                     <form action="../Negocio/enviarDatosContacto.php" method="POST">
                        @csrf
                        <div class="form-group row ">
                           <div class="col-lg-4">
                              <label class="text-kumel-titulo" for="exampleInputName1">Tu nombre</label>
                              <input type="text" placeholder="Ingresa tu nombre" class="form-control"
                                 id="exampleInputName1" name="nombre" required>
                           </div>
                           
                           <div class="col-lg-4">
                              <label class="text-kumel-titulo" for="exampleInputEmail1">Correo</label>
                              <input type="email" placeholder="Correo" class="form-control" id="exampleInputEmail1"
                                 name="mail" aria-describedby="emailHelp" required>
                           </div>



                        </div>
                       

                        <div class="form-inline ">
                           <div class="col-md-5">
                              <textarea class="text-kumel-titulo" rows="10" cols="100" id="ContactFormMessage"
                                 name="mensaje" placeholder="Mensaje" required></textarea>
                           </div>
                         
                        </div>
                       <br>
                        <div class="col-md-9 " style="float: right;">
                           <input type="submit" class="btn btn-kumel-1" 
                              value="enviar">
                        </div>

                       

                     </form>
                 
               </div>
            </div>
         </div>

   </section>




</body>

</html>
@endsection
<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>