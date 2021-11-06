<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Actualizar categoria</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
<?php  include 'includes/navbar.php'; $id = $_GET["id"]; ?>
     <?php include 'conexion/conexion.php';  
	
  $consulta= "select * from categoria where id_categoria=$id";
        
    $result = $conn->query($consulta);
    if($result->num_rows>0){
      $row=$result->fetch_assoc();
          $id=$row['id_categoria'];
            $nombres = $row['Nombre'];
            $descripcion=$row['descripcion'];
            

     
    
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
    <h1>Actualización datos de categoria <img src="https://img.icons8.com/ios/50/000000/category.png"/></h1><br>
    
    <form onsubmit="return noespacios()" method="post" action="usuario/actualiza_categoria.php" enctype="multipart/form-data">
    <label for="nombres" style=" float: left;">Nombres:</label>
		<input class="form-control" value="<?php echo $nombres; ?>" name="nombres"  minlength="1" 
 maxlength="250" required type="text" id="nombres" >
	<input class="form-control" value="<?php echo $id; ?>" name="id"  minlength="1" 
 maxlength="250" required type="hidden" id="id" >
<br>  
			<label for="descripcion" style=" float: left;">Descripción del producto:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $descripcion; ?></textarea>
		
		<input class="btn btn-info" type="submit" value="Actualizar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>



