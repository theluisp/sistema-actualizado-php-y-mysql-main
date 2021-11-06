<?php session_start();
    if(isset($_SESSION['administrador'])){
?> 

<!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Farmacia</title>
     <!--Calendario-->
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
     <!-- Bootstrap core CSS -->
     <link href="../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/util.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/main.css">
    <!-- Custom fonts for this template -->
    <link href="../estilos/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- Plugin CSS -->
     <link href="../estilos/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

     <!-- Custom styles for this template -->
     <link href="../estilos/css/freelancer.min.css" rel="stylesheet">

 </head>
 <?php  include '../includes/navbar1.php'; ?>

 <body id="page-top">

     <div class="container text-center">
         <div class="row">
             <div class="col-lg-8 mx-auto">
                 <div class="container-login100">
                     <div class="wrap-login100 p-t-85 p-b-20">
                         <form action="registro_sucursal.php" method="post">
                             <!-- <form class="login100-form validate-form" action="registro.php" method="post">-->
                             <span class="login100-form-title p-b-70">
                                 <h2>Agregar Nueva Sucursal</h2>
                             </span>
                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50" data-validate="Enter nomnbre">
                                     <input class="input100" type="number" name="Codigo" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Codigo Postal"></span>
                                 </div>
                             </div>

                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50" data-validate="Enter nomnbre">
                                     <input class="input100" type="text" name="Nombre" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Nombre de la Sucursal"></span>
                                 </div>
                             </div>
                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50" data-validate="Enter email">
                                     <input class="input100" type="text" name="Telefono" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Telefono de la Sucursal"></span>
                                 </div>
                             </div>

                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50">
                                     <input class="input100" type="text" name="Estado" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Estado"></span>
                                 </div>
                             </div>
                             
                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50">
                                     <input class="input100" type="text" name="Municipio" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Municipio"></span>
                                 </div>
                             </div>
                             
                             <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50">
                                     <input class="input100" type="text" name="Colonia" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Colonia"></span>
                                 </div>
                                 
                            <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50">
                                     <input class="input100" type="text" name="Calle" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Calle"></span>
                                 </div> 
                                 
                            <div class="md-form">
                                 <div class="wrap-input100 validate-input m-b-50">
                                     <input class="input100" type="text" name="Domicilio" class="form-control" required>
                                     <span class="focus-input100" data-placeholder="Numero de Domicilio"></span>
                                 </div>     
                             </div>

                             <div class="md-form">
                                 <button class="btn btn-lg btn-black waves-effect waves-light">Registrar</button>
                             </div>

                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </div>


     <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
     <div class="scroll-to-top d-lg-none position-fixed ">
         <a class="../js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
             <i class="fa fa-chevron-up"></i>
         </a>
     </div>

     <!-- Bootstrap core JavaScript -->
     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <div id="dropDownSelect1"></div>
     <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
     <script src="../vendor/animsition/js/animsition.min.js"></script>
     <script src="../vendor/bootstrap/js/popper.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="../vendor/select2/select2.min.js"></script>
     <script src="../vendor/daterangepicker/moment.min.js"></script>
     <script src="../vendor/daterangepicker/daterangepicker.js"></script>
     <script src="../vendor/countdowntime/countdowntime.js"></script>
     <script src="../js/main.js"></script>
     <!-- Plugin JavaScript -->
     <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
     <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

     <!-- Contact Form JavaScript -->
     <script src="../js/jqBootstrapValidation.js"></script>
     <script src="../js/contact_me.js"></script>

     <!-- Custom scripts for this template -->
     <script src="../js/freelancer.min.js"></script>
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

 </body>

 </html>
<?php
    }else{
        header('location:../index.php');
    }
?>