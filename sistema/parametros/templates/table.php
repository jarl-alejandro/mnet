<?php
include "../../../conexion/conexion.php";

$query = $pdo->query("SELECT * FROM net_params WHERE id_param=1");
$get = $query->fetch();
?>
<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->
		<div class="panel panel-default">
			<div class="panel-heading">
					parametros
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>#</th>
								<th>IVA</th>
								<th>FACTURA</th>
								<th>CADUCA</th>
							</tr>
						</thead>
						<tbody>
							<tr class="">
								<td>1</td>
								<td><?= $get["iva_param"] ?></td>
								<td><?= $get["fact_param"] ?></td>
								<td><?= $get["cadu_param"] ?></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>


<script src="../../assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();
	});
</script>