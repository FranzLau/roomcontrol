<?php
	require '../../../config/conexion.php';
	require '../../../config/crud.php';

	$obj = new crud();
	echo json_encode($obj->readDateCateg($_POST['idcateg']));

 ?>
