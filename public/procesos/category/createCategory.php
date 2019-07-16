<?php
	require '../../../config/conexion.php';
	$nomCategory = $_POST['nomCateg'];
	$desCategory = $_POST['descCateg'];

	$query = $con->query("SELECT nom_categoria FROM categoria WHERE nom_categoria LIKE '". $nomCategory ."' ");
	$categ = $query->fetch_row();
	if ($categ[0]==$nomCategory) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('$nomCategory','$desCategory')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
