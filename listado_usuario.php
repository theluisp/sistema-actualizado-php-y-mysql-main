<?php 
session_start();

$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 4;
include_once 'productos.php';
include_once 'paginador.php';
?>
<br>
<table class="table">
    <thead>
        <tr>

           <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Existencia</th>
 
    
        </tr>
    </thead>
    <tbody>
        <?php
        $producto = new Producto();
        $cantidad = $producto->listado(2, $criterio, $pagina, $registro);

        $funcion = "buscarproductos";

        $array = $producto->listado(1, $criterio, (($pagina - 1) * $registro), $registro);

		
	
        foreach ($array as $value) {
			
				if($value['nombre_sucursal']==$_SESSION['sucursal']){
					
				
            ?>
            <tr>
               <td><?php echo $value['descripcion']; ?></td>
      <td><?php echo '$'.$value['precio']; ?></td>
        <td><b><?php echo $value['nombre_sucursal']; ?></b></td>
         <td><?php echo $value['existencia']; ?></td>
        
     
            </tr>
            <?php
        }else{
			echo "";
			}
			
		}
        ?>

    </tbody>
    <tfoot align="left">
		
        <tr>
            <td  colspan="4">
                <?php
                $p = new paginador();
                echo $p->pagination($cantidad, $pagina, $funcion, $criterio, $registro, 4);
                ?>
            </td>
        </tr>
    </tfoot>
</table>