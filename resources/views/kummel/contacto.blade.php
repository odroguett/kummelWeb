@extends('layouts.plantilla')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
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
      <div class="container" style="max-width: 60%; ">
         <div class="row ">
         <img src="../img/Kummel.jpg"  class="img-contacto  bg-Kumel" alt="Responsive image">
         </div>
      </div>
   </section>
   
   <section class="py-4 osahan-main-body">
      <div class="container ">
         <div class="row">

            <div class="col-lg-12 p-4 bg-light rounded shadow-sm">

               <div id="edit_profile">
                  <div class="p-0">
                     <form action="../Negocio/enviarDatosContacto.php" method="post">

                        <div class="form-group row ">
                           <div class="col-lg-6">
                              <label class="text-kumel-titulo" for="exampleInputName1">Tu nombre</label>
                              <input type="text" placeholder="Ingresa tu nombre" class="form-control"
                                 id="exampleInputName1" name="nombre" required>
                           </div>
                           <div class="col-lg-6">
                              <label class="text-kumel-titulo" for="exampleInputEmail1">Correo</label>
                              <input type="email" placeholder="Correo" class="form-control" id="exampleInputEmail1"
                                 name="mail" aria-describedby="emailHelp" required>
                           </div>



                        </div>

                        <div class="form-group row">
                           <div class="col-lg-7">
                              <textarea class="text-kumel-titulo" rows="10" cols="100" id="ContactFormMessage"
                                 name="mensaje" placeholder="Mensaje" required></textarea>
                           </div>

                           <div class="col-lg-4">
                              <input type="submit" class="btn btn-kumel-1" style="position: absolute;top: 80%;"
                                 value="enviar">
                           </div>


                        </div>

                     </form>
                  </div>
               </div>
            </div>
         </div>

   </section>




</body>

</html>
@endsection