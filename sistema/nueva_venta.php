<?php session_start(); ?>
<?php include_once "includes/header.php"; ?>
<?php  include '../includes/navbar3.php'; ?>

<br><br>
<script src="http://code.jquery.com/jquery-latest.js"></script>


        <script>
 
            function clic() {
                var num1 = document.getElementById("num1").value;
                var num2 = document.getElementById("num2").value;
 
                var resultado = parseFloat(num2) - parseFloat(num1);
 
                 document.getElementById('spTotal').innerHTML = resultado;
            }
 
        </script>

<script>
$(document).ready(function() {
var pageRefresh = 2000; //5 s
setInterval(function() {
refresh();
}, pageRefresh);
});

// Functions

function refresh() {
$('#feedback-bg-info').load(location.href + " #feedback-bg-info");}
</script>
<script language="JavaScript">
	function mueveReloj() {
		momentoActual = new Date()
		hora = momentoActual.getHours()
		minuto = momentoActual.getMinutes()
		segundo = momentoActual.getSeconds()

		horaImprimible = hora + " : " + minuto +"hrs"

		document.form_reloj.reloj.value = horaImprimible

		setTimeout("mueveReloj()", 1000)
	}
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<h4 class="text-center">Datos del Cliente</h4>

				<a href="#" class="btn btn-primary btn_new_cliente"><i class="fas fa-user-plus"></i> Nuevo Cliente</a>
			</div>
			<div>
				<div class="card-body">
					<form method="post" name="form_new_cliente_venta" id="form_new_cliente_venta">
						<input type="hidden" name="action" value="addCliente">
						<input type="hidden" id="idcliente" value="1" name="idcliente" required>
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Dni</label>
									<input type="number" name="dni_cliente" id="dni_cliente" class="form-control">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Nombre</label>
									<input type="text" name="nom_cliente" id="nom_cliente" class="form-control" disabled required>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Teléfono</label>
									<input type="number" name="tel_cliente" id="tel_cliente" class="form-control" disabled required>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Dirreción</label>
									<input type="text" name="dir_cliente" id="dir_cliente" class="form-control" disabled required>
								</div>

							</div>
							<div id="div_registro_cliente" style="display: none;">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<h4 class="text-center">Datos de la venta</h4>
			<div class="row">
				<div class="col-lg-3">
					<div class="form-group">


						<label><i class="fas fa-user"></i> VENDEDOR:</label>
						<p style="font-size: 16px; text-transform: uppercase; color: red;"><?php echo $_SESSION['vendedor']; ?></p>
					</div>
				</div>
				<div class="col-lg-3">

					
					

				

					<body onload="mueveReloj()">
						<form name="form_reloj"><h5>Fecha y hora actuales:</h5> 
                            <h6 style="color:black;"> <?php echo fechaPeru(); ?></h6>
							<input type="text" style=" border: 0;" name="reloj" size="10">
						</form>

					</body>
				</div>
				<div class="col-lg-3">
					<label>Acciones a realizar</label>
					<div id="acciones_venta" class="form-group">
						<a href="#" class="btn btn-danger" id="btn_anular_venta">Anular</a>
						<a href="#" class="btn btn-primary" id="btn_facturar_venta"><i class="fas fa-save"></i> Generar Venta</a>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th width="100px">Código</th>
							<th>Nombre del producto</th>
							<th>Stock</th>
							<th width="100px">Cantidad</th>
							<th class="textright">Precio</th>
							<th class="textright">Precio Total</th>
							<th>Acciones</th>
						</tr>
						<tr>
							<td><input type="hidden" name="txt_cod_producto" id="txt_cod_producto">
								<input type="text" name="txt_cod_pro" id="txt_cod_pro">
							</td>
							<td id="txt_descripcion">-</td>
							<td id="txt_existencia">-</td>
							<td><input type="text" name="txt_cant_producto" id="txt_cant_producto" value="0" min="1" disabled></td>
							<td id="txt_precio" class="textright">0.00</td>
							<td id="txt_precio_total" class="txtright">0.00</td>
							<td><a href="#" id="add_product_venta" class="btn btn-dark" style="display: none;">Agregar</a></td>
						</tr>
						<tr>
							<th>Id</th>
							<th colspan="2">Nombre del producto</th>
							<th>Cantidad</th>
							<th class="textright">Precio</th>
							<th class="textright">Precio Total</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="detalle_venta">
						<!-- Contenido ajax -->

					</tbody>

					<tfoot id="detalle_totales">
						<!-- Contenido ajax -->
					</tfoot>
				</table><br>
				<div id="feedback-bg-info"><h4>Calculadora de cambio: </h4>
				
				<input type="hidden" style="  border: 0;"  value="<?php echo $_SESSION['totall'];?>" id="num1"  >
			</div>
				<h5>Paga con:</h5><input type="number" id="num2"  />

</div>       <br> <button  class="btn btn-success" onclick="clic()">Calcular</button>

				<br><br>	<h3 style="color:red;" > Cambio: $ <span id="spTotal"></span> mxn
</h3>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
<br>
<br>
<br>
<br>
<br>

<?php include_once "includes/footer.php"; ?>