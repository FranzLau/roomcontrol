<?php
	require '../../../config/conexion.php';
	$formIdEgreso = $_POST['idEditEgreso'];
	$formDescEgreso = $_POST['descEditEgreso'];
	$formPrecioEgreso = $_POST['precEditEgreso'];

	$upd = $con->query("UPDATE egresos SET desc_egreso='$formDescEgreso',
																			precio_egreso='$formPrecioEgreso'
										WHERE id_egreso= '$formIdEgreso' ");
	if ($upd) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}
	$con->close();
 ?>
