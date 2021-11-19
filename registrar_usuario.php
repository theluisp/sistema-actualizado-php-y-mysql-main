<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Alta de usuario  </title>
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


	
<?php  include 'includes/navbar.php'; ?>
    <script type="text/javascript">
	function noespacios() {
		var er = new RegExp(/\s/);
		var web = document.getElementById('contrasenia').value;
		if(er.test(web)){
			alert('No se permiten espacios en blanco en el campo de la contraseña, favor de verificar');
			return false;
		}
                else
			return true;
	}
        
// Campos Nombres
$(document).ready(function () {
        $("#nombres").keyup(function () {
            var value = $(this).val();
            var value= value.replace(/ /g,"_");
            $("#nombreU").val("@"+value);
        });
});


        
</script>
</head>
<style> .small {
	font-size: font-size: 1%;
}
</style>

<body>
       <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="container-login100">
                    <div class="col">
                        <div class="form-group"><br>
    <h1>Alta de nuevo usuario <img src="https://img.icons8.com/ios/40/000000/add-user-male.png"/></h1><br>
    
    <form onsubmit="return noespacios()" method="post" action="usuario/registro_usuarios.php" enctype="multipart/form-data">
    <label for="nombres" style=" float: left;">Nombre completo:</label>
		<input class="form-control" name="nombres"  minlength="1" 
 maxlength="250" required type="text" id="nombres" placeholder="Escribe los nombres del usuario">

<br>
		<label for="apellidoP" style=" float: left;" >Apellido paterno:</label>
		<input class="form-control" name="apellidoP"   
 minlength="1" maxlength="250" required type="text" id="apellidoP" placeholder="Escribe el apellido paterno del usuario">

<br>
		<label for="apellidoM" style=" float: left;">Apellido materno:</label>
		<input class="form-control" name="apellidoM"   
 minlength="1" maxlength="250" required type="text" id="apellidoM" placeholder="Escribe el apellido materno del usuario">

<br>
		
		<label for="nombreU" style=" float: left;">Nombre de usuario:</label>
		<input class="form-control" name="nombreU"  minlength="1" maxlength="250" required type="text" id="nombreU"  readonly>

<br>
		<label for="contraseniaa" style=" float: left;">Contraseña: <small>(Incluye letras y numeros)</small></label>
		<input class="form-control" name="contrasenia"  minlength="1" maxlength="250" required type="text" id="contrasenia" placeholder="Escribe una contraseña">
		


<br>
		
		
        <label for="rol" style=" float: left;">
        Seleccionar:
        </label>
        <select class="form-control" id="rol" name="rol">
        <?php include 'conexion/conexion.php'; ?>
        <option value="">Tipo de usuario</option>
<?php 
    $consulta2="select * from rol where idrol <> 1;";       
$result3 = $conn->query($consulta2); 

  while($row3=$result3->fetch_assoc()){ 
            echo 
        '<option id="rolk" name="rolk" value="'.$row3['idrol'].'">'.$row3['rol'].'</option>';
          }
            ?>
        </select>
        <br>
		        <label for="sucursal" style=" float: left;">
        Sucursal:
        </label>
        <select class="form-control" id="sucursal" name="sucursal">
        <?php include 'conexion/conexion.php'; ?>
        <option value="">Selecciona la sucursal donde va a trabajar el usuario</option>
<?php 
    $consulta="select * from sucursal;";       
$result = $conn->query($consulta); 

  while($row=$result->fetch_assoc()){ 
            echo 
        '<option id="sucursalk" name="sucursalk" value="'.$row['id_sucursal'].'">'.$row['nombre_sucursal'].'</option>';
          }
            ?>
        </select>
        <br>
		
		
		
		<input class="btn btn-info" type="submit" value="Agregar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Atrás</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php //include 'includes/footer.php'; ?>
</html>



