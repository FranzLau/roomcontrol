<?php
	require '../../../config/conexion.php';
	$idCategUpdate =$_POST['idCategEdit'];
	$nomCategUpdate = $_POST['nomCategEdit'];
	$desCategUpdate = $_POST['desCategEdit'];

	$upd = $con->query("UPDATE categoria SET nom_categoria='$nomCategUpdate',
																					desc_categoria='$desCategUpdate'
										WHERE id_categoria= '$idCategUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
