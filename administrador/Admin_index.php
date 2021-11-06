<?php session_start();
    if(isset($_SESSION['administrador'])){
        
        $sesion1=$_SESSION['administrador'];
?>
 <!DOCTYPE html>
 <html lang="es">

 <head>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <title>Panel de administración </title>
     <meta charset="UTF-8">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Farmacia</title>
     <!--Calendario-->
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
     <!-- Bootstrap core CSS -->
     <link href="../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/util.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/main.css">
    <!-- Custom fonts for this template -->
    <link href="../estilos/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- Plugin CSS -->
     <link href="../estilos/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

     <!-- Custom styles for this template -->
     <link href="../estilos/css/freelancer.min.css" rel="stylesheet">
 </head>

 <body>
     
     
      <!-- Navigation
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
     
     
    <?php  include '../includes/navbar1.php';
           include '../conexion/conexion.php';   	  
 	 ?>
    
     <div class="container">
         
         <br>
         <h1 class="text-uppercase mb-0">Bienvenido a la sección de administrador </h1><br>
    	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<a class="col-xl-3 col-md-6 mb-4" href="lista_usuarios.php">
			<div class="card border-left-primary shadow h-100 py-2 bg-white">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Usuarios</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
		$query = "SELECT COUNT(id_usuario) AS total FROM usuario";
	
        $result = $conn->query($query);
        	while($row=$result->fetch_assoc()){
				echo $row['total'];
			}
		//echo $data['usuarios']; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<!-- Earnings (Monthly) Card Example -->
		<a class="col-xl-3 col-md-6 mb-4" href="lista_cliente.php">
			<div class="card border-left-success shadow h-100 py-2 bg-white">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Clientes</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $data['clientes']; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<!-- Earnings (Monthly) Card Example -->
		<a class="col-xl-3 col-md-6 mb-4" href="lista_productos.php">
			<div class="card border-left-info shadow h-100 py-2 bg-white">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Productos</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php 
		$query = "SELECT COUNT(id_producto) AS totalp FROM producto";
	
        $result = $conn->query($query);
        	while($row=$result->fetch_assoc()){
				echo $row['totalp'];
			}
		//echo $data['usuarios']; ?></div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<!-- Pending Requests Card Example -->
		<a class="col-xl-3 col-md-6 mb-4" href="ventas.php">
			<div class="card border-left-warning bg-white shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ventas al día</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php// echo $data['ventas']; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>
          
		



	<div class="col-lg-6">
			<div class="au-card m-b-30">
				<div class="au-card-inner">
				    				    <iframe src="../graficas/graficas_mayor.php"  width="100%" height="500"></iframe>
				</div>
			</div>
		</div>

           <!--divide grafica --> 
		<div class="col-lg-6">
			<div class="au-card m-b-30">
				<div class="au-card-inner">
				    <iframe src="../graficas/menor_stock.php" width="100%" height="500"></iframe>

				</div>
			</div>
		</div>
            
         
	</div>


         <br /><br>
     </div>
     
    
     <!-- Vista de Productos -->
     <div class="container">
         <div class="row">
             <div class="container">
                 <center>
                     <h2>Sucursales existentes</h2>
                 </center>
                 <br />
                 <div class="table-responsive">

                     <table class="table">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nombre</th>
                                 <th>Telefono</th>
                                 <th>Direccion</th><th>Editar</th><th>Eliminar</th>
                                 <th>Ver Reporte</th>

                             </tr>
                         </thead>
                         <tbody>

                             <?php
                                include('../conexion/conexion1.php');                                               
                                $query = "SELECT * FROM sucursal";
                                $resultado = $conexion->query($query)or die($conexion->error);
                                while($row = $resultado->fetch_assoc()){
                            ?>

                             <tr>
                                 <td><?php echo $row['id_sucursal']; ?></td>
                                 <td><?php echo $row['nombre_sucursal']; ?></td>
                                 <td><?php echo $row['telefono']; ?></td>
                                 <td><?php echo $row['calle']; ?></td>
                                 <th><a class="btn btn-primary btn-lg" href="modificacion_sucursal.php?id=<?php echo $row['id_sucursal']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a></th>
                                 <th><a class="btn btn-danger btn-lg" href="eliminar_sucursal.php?id=<?php echo $row['id_sucursal']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>
</a></th>
                                 <th><a class="btn btn-primary btn-lg" href="../metodos/reporte.php?id=<?php echo $row['id_farmacia']; ?>">Reporte</a></th>
                             </tr>
                             <?php
                                }
                            ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>

 </body>

 <div class="copyright py-4 text-center text-white" style="background-color: #555;">
     <div class="container">
         <small>Luis Emmanuel Peña Enriquez , Luis Fernando Bolaños Silva</small>
         <div class="row">

             <!-- Grid column -->
             <div class="col-md-12 py-5">
                 <div class="mb-5 flex-center">

                     <!-- Facebook -->
                     <a class="fb-ic">
                         <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                     </a>
                     <!-- Twitter -->
                     <a class="tw-ic">
                         <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!-- Google +-->
                     <a class="gplus-ic">
                         <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!--Linkedin -->
                     <a class="li-ic">
                         <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!--Instagram-->
                     <a class="ins-ic">
                         <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!--Pinterest-->
                     <a class="pin-ic">
                         <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                     </a>
                 </div>
             </div>
             <!-- Grid column -->
         </div>
         <div class="footer-copyright text-center py-3">© By:Luis.pena@upam.edu.mx , Luis.bolanos@upam.edu.mx</div>
     </div>
 </div>

</html>
 <?php
    }else{
        header('location:../index.php');
    }
?>



