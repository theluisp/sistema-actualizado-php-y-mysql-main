<?php include_once "includes/header.php"; ?>

<?php  include '../includes/navbar3.php'; ?>
<!-- Begin Page Content -->
<div class="container-fluid" >

	<!-- Page Heading -->
<br>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 align="center" class="mx-auto" >Mis ventas realizadas</h1>
	</div>
	
	
	<div class="row" >
		<div class="col-lg-12" >
			<div class="table-responsive" align="center">
				<table class="table" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Codigo identificador de venta</th>
							<th>Fecha</th>
							<th>Total</th>
							<th>Comprobante de pago</th>
						</tr>
					</thead>
					<tbody>
						<?php
						require "../conexion.php";
						$query = mysqli_query($conexion, "SELECT nofactura, fecha,codcliente, totalfactura, estado FROM factura ORDER BY nofactura DESC");
						mysqli_close($conexion);
						$cli = mysqli_num_rows($query);

						if ($cli > 0) {
							while ($dato = mysqli_fetch_array($query)) {
						?>
								<tr>
									<td><?php echo $dato['nofactura']; ?></td>
									<td><?php echo $dato['fecha']; ?></td>
									<td><?php echo $dato['totalfactura']; ?></td>
									<td>
										<button type="button" class="btn btn-primary view_factura" cl="<?php echo $dato['codcliente'];  ?>" f="<?php echo $dato['nofactura']; ?>">Ver  <i class="fa fa-file" aria-hidden="true"></i>

</button>
									</td>
								</tr>
						<?php }
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>
<!-- /.container-fluid -->
<br><br><br><br><br>
<div style="
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 40px;
  "><?php include_once "includes/footer.php"; ?></div>