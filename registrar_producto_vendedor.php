<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">


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
    <?php  include 'includes/navbar3.php'; ?>
	



	

    

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
		 <label for="codigo" style=" float: left;">Codigo del producto:</label>
		<input class="form-control" name="codigo"  minlength="1" maxlength="250" required type="text" id="codigo" placeholder="Escribe el codigo del producto"><br>
		
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
</html>