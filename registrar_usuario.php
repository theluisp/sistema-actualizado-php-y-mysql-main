<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar nuevo usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
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
    <label for="nombres" style=" float: left;">Nombres:</label>
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
    $consulta2="select * from roles where id_rol <> 1;";       
$result3 = $conn->query($consulta2); 

  while($row3=$result3->fetch_assoc()){ 
            echo 
        '<option id="rol" name="rol" value="'.$row3['id_rol'].'">'.$row3['rol'].'</option>';
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
        '<option id="sucursal" name="sucursal" value="'.$row['id_sucursal'].'">'.$row['nombre_sucursal'].'</option>';
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
<?php include 'includes/footer.php'; ?>
</html>



