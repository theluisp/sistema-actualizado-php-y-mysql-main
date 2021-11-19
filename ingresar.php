<?php
session_start();
include("conexion/conexion.php");
//include("seguridad.php");

$usuario=$_POST['txtusuario'];
$pass=$_POST['txtpassword'];  

$tipo=$_POST['tipo'];


    if($tipo =='Administrador'){
	$query = "SELECT * FROM usuario WHERE nombre_usuario='$usuario'and id_rol=1";
	
        $result = $conn->query($query);
        if($result->num_rows>0){
        	while($row=$result->fetch_assoc()){
        if (password_verify($pass, $row['contrasenia'])){
            $_SESSION['administrador']=$row['nombre_usuario']; 
	
	       ?> <script>
               window.location.replace('administrador/Admin_index.php');
                </script>
            <?php    
         }  
        else{
        echo '<script language="javascript">
        alert("1 Los datos insertados son incorrectos, pruebe de nuevo");
        </script>';
        ?> <script>
        window.location.replace('index.php');
    </script>
    <?php
		}
	 }
        }
		else
		{
		echo '<script language="javascript">window.location.replace("index.php");
        alert("Usuario o contraseña incorrecta");  
        </script>';}
		
	}


	 elseif($tipo=='Vendedor'){
		 
		  $query= "select usuario.idusuario, usuario.nombres, usuario.contrasenia, usuario.id_sucursal_f, sucursal.nombre_sucursal, sucursal.id_sucursal from usuario 
    INNER JOIN sucursal ON usuario.id_sucursal_f=sucursal.id_sucursal WHERE nombre_usuario ='$usuario' and id_rol=2";
		 
		 
		
	
$result = $conn->query($query);
    if($result->num_rows>0){
	 while($row=$result->fetch_assoc()) {
    if (password_verify($pass, $row['contrasenia'])) {
     $_SESSION['vendedor']=$row['nombres']; 
	
	$_SESSION['sucursal']=$row['nombre_sucursal'];
	 
            ?> <script>
               window.location.replace('vendedor/index_vendedor.php');
                </script>
            <?php    
         }
        
        else{
        echo '<script language="javascript">
        alert(" 2 Los datos insertados son incorrectos, pruebe de nuevo");
        </script>';
        ?> <script>
        window.location.replace('index.php');

    </script>
    <?php
        }
		 
	 }}else
		{
			echo '<script language="javascript">window.location.replace("index.php");
        alert("Usuario o sdcontraseña incorrecta");  
        </script>';}
	 
	 }

  
    elseif($tipo=='Supervisor'){
		
		
      	 $query = "SELECT * FROM usuario WHERE nombre_usuario ='$usuario' and id_rol=3";
$result = $conn->query($query);
    if($result->num_rows>0){  
	 while($row=$result->fetch_assoc()) {
    if (password_verify($pass, $row['contrasenia'])) {
     $_SESSION['supervisor']=$row['nombre_usuario']; 
	
	 
            ?> <script>
               window.location.replace('supervisor/supervisor_index.php');
                </script>
            <?php    
         }
        
        else{
        echo '<script language="javascript">
        alert("3 Los datos insertados son incorrectos, pruebe de nuevo");
        </script>';
        ?> <script>
        window.location.replace('index.php');

    </script>
    <?php
        }
		 
	 }
	}
		else
		{
			echo '<script language="javascript">window.location.replace("index.php");
        alert("Usuario o contraseña incorrecta");  
        </script>';}
	 }

    elseif($tipo=="Seleccionar"){
        header("Location: index.php");
    }

?>
