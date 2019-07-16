<?php
	require '../../../config/conexion.php';
	$nombCliNew = $_POST['nomNewClient'];
	$apelCliNew = $_POST['apeNewClient'];
	$tdocCliNew = $_POST['tdocNewClient'];
	$ndocCliNew = $_POST['ndocNewClient'];
	$telfCliNew = $_POST['telfNewClient'];
  $EmaiCliNew = $_POST['emailNewClient'];

	$sql = $con->query("SELECT numdoc_cli FROM client WHERE numdoc_cli LIKE '". $ndocCliNew ."' ");
	$custom = $sql->fetch_row();
	if ($custom[0]==$ndocCliNew) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO client (nom_cli,ape_cli,tipodoc_cli,numdoc_cli,telef_cli,email_cli) VALUES ('$nombCliNew','$apelCliNew','$tdocCliNew','$ndocCliNew','$telfCliNew','$EmaiCliNew')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
