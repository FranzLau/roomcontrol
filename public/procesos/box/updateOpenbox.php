<?php
	require '../../../config/conexion.php';
	$idformOpenbox = $_POST['idOpenbox'];
	$fhformOpenbox = $_POST['FechaCloseBox'];
	$mtformOpenbox = $_POST['montoCloseBox'];
	$etformOpenbox = $_POST['estadoCloseBox'];

	$upd = $con->query("UPDATE caja SET fecha_cierre='$fhformOpenbox',
                    									monto_cierre='$mtformOpenbox',
                    									estado_caja='$etformOpenbox'
										WHERE id_caja = '$idformOpenbox' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

  $con->close();
?>
