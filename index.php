<html>

<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Login  </title>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Calendario-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <!-- Bootstrap core CSS -->
    <link href="estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/util.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/main.css">
    <!-- Custom fonts for this template -->
    <link href="estilos/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    
    <!-- Plugin CSS -->
    <link href="estilos/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="estilos/css/freelancers.css" rel="stylesheet">

</head>
    <?php  include 'includes/navbar2.php'; ?>
    <!-- <a class="nav-link " href="index.php" style="color:white;">Regresar</a>-->
</ul>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="container-login100">
                    <div class="col">
                        <h2>Iniciar Sesión</h2><br>
                        <div class="form-group">
                            <form action="ingresar.php" method="POST">
                                <span class="login100-form-avatar">
                                        <img src="img_sitio/usi.png" alt="AVATAR">
                                </span>
                                <br>
                                <input type="text" placeholder="Usuario" name="txtusuario" id="txtusuario" class="form-control" /><br>
                                <input type="password" placeholder="Contraseña" id="txtpassword" name="txtpassword" class="form-control" /><br>
                                <label for="tipo"><b>Tipo de cuenta</b></label>
                                <br>
                                <select id="tipo" name="tipo" class="form-control" required>
                                    <option>Seleccionar</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select>
                                <br><br>
                                <input class="btn btn-primary btn-lg btn-block" style="background-color:#04AA6D" type="submit" value="Entrar" name="Entrar" />
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Bootstrap core JavaScript -->
<script src="estilos/vendor/jquery/jquery.min.js"></script>
<script src="estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<div id="dropDownSelect1"></div>
<script src="estilos/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="estilos/vendor/animsition/js/animsition.min.js"></script>
<script src="estilos/vendor/bootstrap/js/popper.js"></script>
<script src="estilos/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="estilos/vendor/select2/select2.min.js"></script>
<script src="estilos/vendor/daterangepicker/moment.min.js"></script>
<script src="estilos/vendor/daterangepicker/daterangepicker.js"></script>
<script src="estilos/vendor/countdowntime/countdowntime.js"></script>
<script src="estilos/js/main.js"></script>
<!-- Plugin JavaScript -->
<script src="estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="estilos/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="estilos/js/jqBootstrapValidation.js"></script>
<script src="estilos/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="estilos/js/freelancer.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

</html>

