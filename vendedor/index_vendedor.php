<?php session_start();
error_reporting(0);
    if(isset($_SESSION['vendedor']) && isset($_SESSION['sucursal'])){
        
        $sesion3=$_SESSION['vendedor'];
		$sucursal3=$_SESSION['sucursal'];
?>
 <!DOCTYPE html>
 <html lang="es">

 <head>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <title>Vendedor </title>
     <meta charset="UTF-8">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  
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

 <body>
     
     
      <!-- Navigation
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
     
     
    <?php  include '../includes/navbar3.php'; ?>
    
     <div class="container">
         
         <br>
         <h1 class="text-uppercase mb-0">Bienvenido a la sección de punto de venta <?php echo $_SESSION['vendedor'];?> </h1>
         <br />
     </div>
     <br>
    <body>
        <div class="row">
  <div class="col-sm-6">
    <div class="card"><center>
      <div class="card-body">
          	<center>	  <img src="../img/INVENTARIO.png" style=" max-width:25%;"></center>
        <h5 class="card-title">Inventario general sucursal <?php echo "$sucursal3";?></h5>
        <p class="card-text">Visualizar todos los productos de esta sucursal</p>
        <a href="../inventario_sucursal.php" class="btn btn-primary">Aceptar</a>
      </div></center>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card"><center>
      <div class="card-body">
          	<center>	  <img src="../img/INVENTARIO.png" style=" max-width:25%;"></center>
        <h5 class="card-title">Inventario general de todas las sucursales</h5>
        <p class="card-text">Visualizar todos los productos de todas las sucursales</p>
        <a href="../inventario_general_vendedor.php" class="btn btn-primary">Aceptar</a>
      </div></center>
    </div>
  </div>
</div>
        <script>
            function buscarproductos(cr, pa, re) {
                url = 'listado.php';
                data = {cr: cr, pa: pa, re: re};
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (r) {
                        $('#listado').html(r);
                    }
                });
            }
        </script>
    </body>
</html>

 <?php
    }else{
        header('location:../index.php');
    }
?>



