<?php
	session_start();
	require '../../../config/conexion.php';
	$fechaOpenbox = $_POST['FechaOpenBox'];
	$montoOpenbox = $_POST['montoOpenBox'];
	$estadOpenbox = $_POST['estadoOpenBox'];
	$empleOpenbox = $_SESSION['loginUser']['id_emp'];

	$vale = $con->query("SELECT estado_caja FROM caja WHERE estado_caja = 'Abierta' ");
	$produ = $vale->fetch_row();
	if ($produ[0]=='Abierta') {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO caja (id_emp,fecha_apertura,monto_apertura,estado_caja) VALUES ('$empleOpenbox','$fechaOpenbox','$montoOpenbox','$estadOpenbox')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
