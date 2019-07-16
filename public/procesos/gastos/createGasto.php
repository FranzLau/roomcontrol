<?php
	session_start();
	require '../../../config/conexion.php';
	$EmpleaEgreso = $_SESSION['loginUser']['id_emp'];
	$fechaEgreso =  $_POST['fechNewEgreso'];
	$describeEgreso = $_POST['descNewEgreso'];
	$precioEgreso = $_POST['precNewEgreso'];

	$gasto = $con->query("INSERT INTO egresos (id_emp,fecha_egreso,desc_egreso,precio_egreso) VALUES ('$EmpleaEgreso','$fechaEgreso','$describeEgreso','$precioEgreso')");

	if ($gasto) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}

	$con->close();
 ?>
