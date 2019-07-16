<?php
	require '../../../config/conexion.php';
	$nomEmpReg = $_POST['createNombEmp'];
	$apeEmpReg = $_POST['createApeEmp'];
	$tdocEmpReg = $_POST['createTipoDocEmp'];
	$ndocEmpReg = $_POST['createNumDocEmp'];
	$telfEmpReg = $_POST['createTelfEmp'];
	$mailEmpReg = $_POST['createEmailEmp'];
	$passEmpReg = $_POST['createPassEmp'];
	$userEmpReg = $_POST['createUserEmp'];
	$estaEmpReg = $_POST['createEstaEmp'];

	$val = $con->query("SELECT numdoc_emp FROM empleado WHERE numdoc_emp LIKE '$ndocEmpReg' ");
	$emple = $val->fetch_row();
	if ($emple[0]==$ndocEmpReg) {
		echo json_encode(array('error' => true));
	}else{
		$reg = $con->query("INSERT INTO empleado (nom_emp,ape_emp,tipodoc_emp,numdoc_emp,telf_emp,email_emp,user_emp,pass_emp,estado_emp) VALUES ('$nomEmpReg','$apeEmpReg','$tdocEmpReg','$ndocEmpReg','$telfEmpReg','$mailEmpReg','$userEmpReg','$passEmpReg','$estaEmpReg')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
