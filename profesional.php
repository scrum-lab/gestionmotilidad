<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
  header("location: index.php");
  exit;
}

$id_usuario=$_SESSION['id_usuario'];
$tipo="Envio";

?>

<!doctype html>
<html lang="en">

<head>
	<title>Profesional - Gutmedica</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<?php
	include("html.php");
	echo $css;
	?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php
		include("html.php");
		echo $nav;
		?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php
		include("html.php");
		echo $menu;
		?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">


					<h3 class="page-title">Registrar Profesional de Salud</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="panel">
								<div class="panel-body">
									<br>
									<input class="form-control input-md" id="cedula" placeholder="Cedula del Profesional" type="text">
									<input class="form-control input-md" id="nombre" placeholder="Nombre del Profesional" type="text">
									<input class="form-control input-md" id="apellido" placeholder="Apellido del Profesional" type="text">
									<input class="form-control input-md" id="especialidad" placeholder="Especialidad del Profesional" type="text">
									<input class="form-control input-md" id="email" placeholder="Email del Profesional" type="text">
									<input type="submit" class="btn btn-success btn-sm" onclick="registrarProfesional(); return false;" value="Guardar" />
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>id</th>
												<th>Cedula</th>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Especialidad</th>
												<th>Email</th>
												<th>Editar</th>
											</tr>
										</thead>
										<tbody>
											<?php
											include("conexiones/mostrarProfesional.php");
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<?php
		include("html.php");
		echo $footer;
		?>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<?php
	include("html.php");
	echo $js;
	?>
	
</body>

</html>
