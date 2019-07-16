<?php
	require '../../../config/conexion.php';
	$nombNewProd = $_POST['nombNewProd'];
	$detaNewProd = $_POST['detalleNewProd'];
	$precNewProd = $_POST['precioNewProd'];
	$estaNewProd = $_POST['estadoNewProd'];
	$catgNewProd = $_POST['catgNewProd'];

	$vale = $con->query("SELECT nom_room FROM room WHERE nom_room LIKE '". $nombNewProd ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$nombNewProd) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO room (nom_room,detalle_room,precio_room,estado_room,id_categoria) VALUES ('$nombNewProd','$detaNewProd','$precNewProd','$estaNewProd','$catgNewProd')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
