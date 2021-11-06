<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar producto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


	
<?php  include 'includes/navbar3.php'; ?>
    
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
    <h1>Nueva mercancía <img src="https://img.icons8.com/ios/40/000000/add-tag.png"/></h1><br>
    
    <form method="post" action="usuario/registro_producto.php" enctype="multipart/form-data">
    <label for="nombre" style=" float: left;">Nombre del producto:</label>
		<input class="form-control" name="nombre"  minlength="1" maxlength="250" required type="text" id="nombre" placeholder="Escribe el nombre del producto">

<br>
        <label for="categoria" style=" float: left;">
        Categoria:
        </label>
        <select class="form-control" id="categoria" name="categoria">
        <?php include 'conexion/conexion.php'; ?>
        <option value="">Selecciona la categoria</option>
<?php 
    $consulta="select * from categoria;";       
$result = $conn->query($consulta); 

  while($row=$result->fetch_assoc()){ 
            echo 
        '<option id="categoria" name="categoria" value="'.$row['id_categoria'].'">'.$row['Nombre'].'</option>';
          }
            ?>
        </select>
        <br>
		<label for="precioVenta" style=" float: left;">Precio de venta:</label>
		<input class="form-control" name="precioVenta" min="1" pattern="^[0-9]+" required type="number" id="precioVenta" placeholder="Precio de venta"><br>
		
        <label for="cantidad" style=" float: left;">Existencia:</label>
		<input  class="form-control" min="0" pattern="^[0-9]+" required id="cantidad" name="cantidad" type="number" placeholder="Cantidad" id="cantidad" requiered>  <br>
		<label for="imagen1" >Imagen número 1 del producto: <img src="https://img.icons8.com/fluent/25/000000/add-image.png"/></label><br>
        <input type="file" name="img"><br>
        <small>Formato de imagenes admitido: png, jpg, gif, jpeg</small>
        <br><br>
		<label for="imagen2">Imagen número 2 del producto: <img src="https://img.icons8.com/fluent/25/000000/add-image.png"/></label><br>
        <input type="file" name="img2" ><br>
        <small class="small" id="small">Formato de imagenes admitido:png, jpg, gif, jpeg</small>
        <br><br>
        
	<label for="descripcion" style=" float: left;">Descripción del producto:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

<br>
		 <label for="Color" style=" float: left;">Color del producto:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="Escribe el color del producto">
		
		<br>
        <label for="categoria" style=" float: left;">
        Sucursal:
        </label>
        <select class="form-control" id="sucursal" name="sucursal">
       
        <option value="">Selecciona la sucursal</option>
<?php 
    $consulta="select * from sucursal;";       
$result = $conn->query($consulta); 

  while($row=$result->fetch_assoc()){ 
            echo 
        '<option id="sucursal" name="sucursal" value="'.$row['id_sucursal'].'">'.$row['nombre_sucursal'].'</option>';
          }
            ?>
        </select><br>
		
		<input class="btn btn-info" type="submit" value="Agregar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Atrás</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>