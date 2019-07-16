<?php
	require '../../../config/conexion.php';
	$idEmpUpdate = $_POST['editIdEmp'];
	$nomEmpUpdate = $_POST['editNombEmp'];
	$apeEmpUpdate = $_POST['editApeEmp'];
	$tdocEmpUpdate = $_POST['editTipoDocEmp'];
	$ndocEmpUpdate = $_POST['editNumDocEmp'];
	$telfEmpUpdate = $_POST['editTelfEmp'];
	$mailEmpUpdate = $_POST['editEmailEmp'];
	$userEmpUpdate = $_POST['editUserEmp'];
	$passEmpUpdate = $_POST['editPassEmp'];
	$estaEmpUpdate = $_POST['editEstaEmp'];

	$upd = $con->query("UPDATE empleado SET nom_emp='$nomEmpUpdate',
                    											ape_emp='$apeEmpUpdate',
                    											tipodoc_emp='$tdocEmpUpdate',
                    											numdoc_emp='$ndocEmpUpdate',
                    											telf_emp='$telfEmpUpdate',
                    											email_emp='$mailEmpUpdate',
                    											user_emp='$userEmpUpdate',
                    											pass_emp='$passEmpUpdate',
                    											estado_emp='$estaEmpUpdate'
										                 WHERE id_emp= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
