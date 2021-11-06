<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Actualizar usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
	
<?php  include 'includes/navbar.php'; $id = $_GET["id"]; ?>
     <?php include 'conexion/conexion.php';  
  $consulta= "select usuario.id_usuario, usuario.nombres, usuario.apellidoP, usuario.apellidoM, usuario.nombre_usuario, usuario.id_sucursal_f, sucursal.nombre_sucursal, sucursal.id_sucursal from usuario 
    INNER JOIN sucursal ON usuario.id_sucursal_f=sucursal.id_sucursal where id_usuario=$id";
    
    $consulta2= "select usuario.id_usuario, usuario.id_rol,roles.id_rol, roles.rol from usuario INNER JOIN roles ON usuario.id_rol=roles.id_rol where id_usuario=$id";
    $result2 = $conn->query($consulta2);
    if($result2->num_rows>0){
      $row2=$result2->fetch_assoc();
            $rol= $row2['rol'];
        $id_rol=$row2['id_rol'];
         }
        
    $result = $conn->query($consulta);
    if($result->num_rows>0){
      $row=$result->fetch_assoc();
            $id= $row['id_usuario'];
            $nombres = $row['nombres'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $username = $row['nombre_usuario'];
            $sucursal = $row['nombre_sucursal'];
        $id_sucursal=$row['id_sucursal'];
            

     
    
         }
    ?>
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
    <h1>Actualización datos de usuario <img src="https://img.icons8.com/ios/50/000000/edit-user-male.png"/></h1><br>
    
    <form onsubmit="return noespacios()" method="post" action="usuario/actualiza_usuario.php" enctype="multipart/form-data">
    <label for="nombres" style=" float: left;">Nombres:</label>
		<input class="form-control" value="<?php echo $nombres; ?>" name="nombres"  minlength="1" 
 maxlength="250" required type="text" id="nombres" >

<br>    <input class="form-control" value="<?php echo $id; ?>" name="id"  type="hidden" id="id" >

		<label for="apellidoP" style=" float: left;" >Apellido paterno:</label>
		<input class="form-control" value="<?php echo $apellidoP; ?>" name="apellidoP"   
 minlength="1" maxlength="250" required type="text" id="apellidoP" >

<br>
		<label for="apellidoM" style=" float: left;">Apellido materno:</label>
		<input class="form-control" name="apellidoM"  value="<?php echo $apellidoM; ?>"  
 minlength="1" maxlength="250" required type="text" id="apellidoM" >

<br>
		
		<label for="nombreU" style=" float: left;">Nombre de usuario:</label>
		<input class="form-control" name="nombreU" value="<?php echo $username; ?>" minlength="1" maxlength="250" required type="text" id="nombreU"  readonly>




<br>
		
		
        <label for="rol" style=" float: left;">
        Seleccionar:
        </label>
        <select class="form-control" id="rol" name="rol">
        <?php include 'conexion/conexion.php'; ?>
        <option id="rol" name="rol" value="<?php echo $id_rol; ?>"><?php echo "$rol"; ?></option>
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
        <option id="sucursal" name="sucursal" value="<?php echo $id_sucursal; ?>"><?php echo "$sucursal"; ?></option>
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
		
		
		
		<input class="btn btn-info" type="submit" value="Actualizar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>



