<?php
	require '../../../config/conexion.php';
	$idProdEdit =$_POST['idProdEdit'];
	$nomProdEdit = $_POST['nomEditProd'];
	$detProdEdit = $_POST['detalleEditProd'];
	$preProdEdit = $_POST['precioEditProd'];
	$estProdEdit = $_POST['estadoEditProd'];
	$catProdEdit = $_POST['catgEditProd'];

	$upd = $con->query("UPDATE room SET nom_room='$nomProdEdit',
																					detalle_room='$detProdEdit',
																					precio_room='$preProdEdit',
																					estado_room='$estProdEdit',
																					id_categoria='$catProdEdit'
										WHERE id_room= '$idProdEdit' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
