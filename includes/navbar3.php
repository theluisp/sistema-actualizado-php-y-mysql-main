

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<body>

<div class="topnav"  id="myTopnav">
  <a class="active" href="../vendedor/index_vendedor.php"><i class="fa fa-fw fa-home"></i>Nombre empresa</a>
  <a href="../registrar_producto_vendedor.php"><i class="fa fa-plus" aria-hidden="true"></i>
 Nueva mercancia</a>
  <a  href="registrar_producto_vendedor.php"><i class="fa fa-money" aria-hidden="true"></i>
Vender</a>
   <a href="#vender.php"><i class="fa fa-list-alt" aria-hidden="true"></i>

Consultar mis ventas</a>
	
	<a href="../registrar_producto_vendedor.php"><i class="fa fa-users" aria-hidden="true"></i>
 Consultar clientes</a>
	
   <a  href="#"><i class="fa fa-trash" aria-hidden="true"></i>

Eliminar venta</a>

  <a href="../destruir_secion.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Salir</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
   <a style="color:white;"> <i class="fa fa-fw fa-user"></i> <?php   
 if (empty($_SESSION['administrador'])) {echo""; } else {echo $_SESSION['administrador'];}
 if (empty($_SESSION['supervisor'])) {echo""; } else {echo $_SESSION['supervisor'];}
  if (empty($_SESSION['vendedor'])) {echo""; } else {echo $_SESSION['vendedor'];}


  ?></a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>

</html>
