<?php session_start();?><html lang="es">
<head>
<meta charset="utf-8">
<title>Gestión de categorias</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" te cype="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
<?php  include 'includes/navbar.php'; ?>
   
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
    <h1>Gestión de categorias <img src="https://img.icons8.com/material-outlined/50/000000/edit.png"/></h1><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Código de categoría</th>
      <th scope="col">Nombre de la categoria</th>
      <th scope="col">Descripcion</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
       <?php include 'conexion/conexion.php';  
  $consulta= "select * from categoria"; 
    $result = $conn->query($consulta);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
			$id=$row["id_categoria"];
            $nombres= $row['Nombre'];
          $descripcion= $row['descripcion'];
            
            

     
    
  
    ?>
    <tbody>
    <tr>
      <td><?php echo $id; ?></td>

      <td><?php echo $nombres; ?></td>
      <td><?php echo $descripcion; ?></td>
   <td><a class="btn btn-warning" href="<?php echo "actualizacion_categoria.php?id=".$id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "usuario/borrar_categoria.php?id=" .$id?>"><i class="fa fa-trash"></i></a></td>
			

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



