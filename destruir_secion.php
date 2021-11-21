<?php
session_start();
  unset($_SESSION["admin"]); 
  unset($_SESSION["vendedor"]);
  unset($_SESSION["jefe"]);
  unset ($_SESSION["idUser"]);
  session_destroy();
echo "<script>
                alert('Sesión cerrada correctamente');
                window.location= 'index.php'
    </script>";
?>