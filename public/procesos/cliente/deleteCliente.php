<?php
	require '../../../config/conexion.php';
	require '../../../config/crud.php';

	$obj = new crud();
	echo $obj->deleteClient($_POST['idcli']);

 ?>
