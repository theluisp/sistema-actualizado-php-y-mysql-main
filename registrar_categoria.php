<?php session_start();?>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar nueva categoria</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<?php include 'includes/navbar.php'; ?>

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
    <h1>Alta de nueva categoria <img src="https://img.icons8.com/ios/40/000000/add--v1.png"/></h1><br>
    
    <form onsubmit="return noespacios()" method="post" action="usuario/registro_categoria.php" enctype="multipart/form-data">
    <label for="nombres" style=" float: left;">Nombre de la categoria:</label>
		<input class="form-control" name="nombre"  minlength="1" 
 maxlength="250" required type="text" id="nombre" placeholder="Escribe el nombre de la categoria">

<br>
		<label for="apellidoP" style=" float: left;" >Descripción:</label>
			<textarea required id="descripcion"  maxlength="350" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
<br>
		
		
		
		<input class="btn btn-info" type="submit" value="Agregar">   
		<a href="index.php"><button type="button" class="btn btn-secondary">Atrás</button></a>

    
    </form>
                    </div></div></div></div></div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>



