<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Gestión de usuarios</title>
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
    <h1>Gestión de usuarios <img src="https://img.icons8.com/ios/50/000000/user-group-man-man.png"/></h1><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
        <th scope="col">Username</th>
         <th scope="col">Sucursal</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
       <?php include 'conexion/conexion.php';  
  $consulta= "select usuario.id_usuario, usuario.nombres, usuario.apellidoP, usuario.apellidoM, usuario.nombre_usuario, usuario.id_sucursal_f, sucursal.nombre_sucursal from usuario 
    INNER JOIN sucursal ON usuario.id_sucursal_f=sucursal.id_sucursal"; 
    $result = $conn->query($consulta);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $id= $row['id_usuario'];
            $nombres = $row['nombres'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $username = $row['nombre_usuario'];
            $sucursal = $row['nombre_sucursal'];
            

     
    
  
    ?>
    <tbody>
    <tr>
      
      <td><?php echo $id; ?></td>
      <td><?php echo $nombres; ?></td>
      <td><?php echo $apellidoP; ?></td>
      <td><?php echo $apellidoM; ?></td>
        <td><?php echo $username; ?></td>
        <td><?php echo $sucursal; ?></td>
   <td><a class="btn btn-warning" href="<?php echo "actualizacion_usuario.php?id=".$id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "usuario/borrar_usuario.php?id=" .$id?>"><i class="fa fa-trash"></i></a></td>
			

    </tr>
    
  </tbody>
        
        <?php    } 
    }
        
          else{
        echo 'No existen datos para mostrar';
    }?>
</table>
         
    
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>



