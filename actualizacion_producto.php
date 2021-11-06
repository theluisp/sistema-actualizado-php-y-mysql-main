<?php session_start(); error_reporting(0);?>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Actualizar producto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
<?php  include 'includes/navbar.php'; 
    $id = $_GET["id"]; ?>
     <?php include 'conexion/conexion.php';  
  $consulta= "select producto.id_producto, producto.nombre_producto, producto.codigo_categoria, producto.precio_unitario, producto.cantidad, producto.descripcion,producto.color, producto.costo_unitario,producto.id_sucursal, sucursal.nombre_sucursal, sucursal.id_sucursal from producto 
    INNER JOIN sucursal ON producto.id_sucursal=sucursal.id_sucursal where id_producto=$id";
    
    $consulta2= "select producto.id_producto, producto.codigo_categoria, categoria.id_categoria, categoria.Nombre  from producto INNER JOIN categoria ON categoria.id_categoria= producto.codigo_categoria where id_producto=$id";
    $result2 = $conn->query($consulta2);
    if($result2->num_rows>0){
      $row2=$result2->fetch_assoc();
            $categoria= $row2['Nombre'];
        $id_categoria=$row2['id_categoria'];
         }
        
    $result = $conn->query($consulta);
    if($result->num_rows>0){
      $row=$result->fetch_assoc();
            $id= $row['id_producto'];
            $nombres = $row['nombre_producto'];
            $categoria2 = $row['codigo_categoria'];
            $precio_unidad = $row['precio_unitario'];
            $cantidad = $row['cantidad'];
            $descripcion = $row['descripcion'];
        $color=$row['color'];
            $id_sucursal=$row['id_sucursal'];
        $costo_unitario=$row['costo_unitario'];
        $nombre_sucursal=$row['nombre_sucursal'];
        
            
            

     
    
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
    <h1>Actualización datos de mercancia <img src="https://img.icons8.com/ios/40/000000/add-tag.png"/></h1><br>
    
    <form method="post" action="usuario/actualizar_producto.php" enctype="multipart/form-data">
    <label for="nombre" style=" float: left;">Nombre del producto:</label>
		<input class="form-control" name="nombre"  minlength="1" maxlength="250" required type="text" id="nombre" value="<?php echo $nombres; ?>" >
		
				<input class="form-control" name="id" required type="hidden" id="id" value="<?php echo $id; ?>" >


<br>
        <label for="categoria" style=" float: left;">
        Categoria:
        </label>
        <select class="form-control" id="categoria" name="categoria">
        <?php include 'conexion/conexion.php'; ?>
        <option id="categoria" name="categoria" value="<?php echo $id_categoria; ?>"><?php echo $categoria; ?></option>
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
		<input class="form-control" name="precioVenta" min="1" pattern="^[0-9]+" required type="number" id="precioVenta" value="<?php echo $precio_unidad; ?>"><br>
		
        <label for="cantidad" style=" float: left;">Existencia:</label>
		<input  class="form-control" min="0" pattern="^[0-9]+" required id="cantidad" name="cantidad" type="number" value="<?php echo $cantidad; ?>" id="cantidad" requiered>  <br>
		
        
	<label for="descripcion" style=" float: left;">Descripción del producto:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $descripcion; ?></textarea>

<br>
		 <label for="Color" style=" float: left;">Color del producto:</label>
		<input class="form-control" name="color" required type="text" id="color" value="<?php echo $color; ?>">
		
		<br>
        <label for="categoria" style=" float: left;">
        Sucursal:
        </label>
        <select class="form-control" id="sucursal" name="sucursal">
       
        <option value="<?php echo $id_sucursal; ?>"><?php echo $nombre_sucursal; ?></option>
<?php 
    $consulta="select * from sucursal;";       
$result = $conn->query($consulta); 

  while($row=$result->fetch_assoc()){ 
            echo 
        '<option id="sucursal" name="sucursal" value="'.$row['id_sucursal'].'">'.$row['nombre_sucursal'].'</option>';
          }
            ?>
        </select><br>
		
		<input class="btn btn-info" type="submit" value="Actualizar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>