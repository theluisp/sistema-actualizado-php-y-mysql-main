<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
      <?php include 'includes/navbar3.php';?>
    <body>
        <div class="container"><br><br>
            <center><h1>Inventario sucursal <?php echo $_SESSION['sucursal'];?></h1><br></center>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" id="buscar" placeholder="Buscar por nombre">
                </div>
                
                
                <button type="button" class="btn btn-primary mb-2 button1" onclick="buscarproductos($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar <img src="https://img.icons8.com/ios/20/000000/search--v1.png"/></button>
                
            </form>
            <div id="listado">
                <?php include 'listado_usuario.php'; ?>
            </div>
        </div>
        <script>
            function buscarproductos(cr, pa, re) {
                url = 'listado.php';
                data = {cr: cr, pa: pa, re: re};
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (r) {
                        $('#listado').html(r);
                    }
                });
            }
        </script>
        <style>
        .button1 {width: 250px;}
        </style>
    </body>
</html>
