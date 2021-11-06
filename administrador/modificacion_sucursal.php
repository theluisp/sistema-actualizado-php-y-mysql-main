<?php session_start();
    if(isset($_SESSION['administrador'])){
?>  

<!DOCTYPE html>
<html lang="es">

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

<body>
    <?php  include '../includes/navbar1.php'; ?>

    <!--  <section id="productos"> -->
    <div class="container">
        <!-- <h2 class="text-center text-uppercase text-secondary mb-0">Modificar Productos</h2> -->
        <span class="login100-form-title p-b-70">
            <!-- <h2>De productos de Usuarios</h2>-->
        </span>
        <!--  <hr class="star-dark mb-5">-->
        <div class="row">

            <?php
            include('../conexion/conexion1.php');
        
            $id = $_REQUEST['id'];    
        
            $query = "SELECT * FROM sucursal where id_sucursal ='$id'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
                
        
        ?>

            <div class="container">
                <h3>Modificar Sucursales</h3>
                <form action="actualizacion_sucursal.php?id=<?php echo $row['id_sucursal']; ?>" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="nombre">Nombre de la Sucursal:</label>
                        <input type="text" class="form-control" placeholder="Modifica el nombre de la Sucursal" name="nombre" value="<?php echo $row['nombre_sucursal']; ?>" readonly="readonly">
                    </div>


                    <div class="form-group">
                        <label for="precio">Telefono de la Sucursal:</label>
                        <input type="text" class="form-control" placeholder="Modifca el Telefono de la Sucursal" name="telefono" value="<?php echo $row['telefono']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Direccion de la Sucursal:</label>
                        <input type="text" class="form-control" placeholder="Direccion de la Sucursal" name="direccion" value="<?php echo $row['calle']; ?>">
                    </div>

                   <button type="submit" class="btn btn-primary">Aceptar</button><br><br>

                </form>
            </div>

        </div>
    </div>
    <!-- </section> -->

    <!-- foorter 
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Luis Fernando Bolaños Silva</small>
        </div>
    </div> -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../estilos/vendor/jquery/jquery.min.js"></script>
    <script src="../estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div id="dropDownSelect1"></div>
    <script src="../estilos/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../estilos/vendor/animsition/js/animsition.min.js"></script>
    <script src="../estilos/vendor/bootstrap/js/popper.js"></script>
    <script src="../estilos/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../estilos/vendor/select2/select2.min.js"></script>
    <script src="../estilos/vendor/daterangepicker/moment.min.js"></script>
    <script src="../estilos/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../estilos/vendor/countdowntime/countdowntime.js"></script>
    <script src="../estilos/js/main.js"></script>
    <!-- Plugin JavaScript -->
    <script src="../estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../estilos/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

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
        header('location:../login.php');
    }
?>