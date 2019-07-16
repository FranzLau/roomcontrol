<?php
/**
 *
 */
class data
{
  public function nombCliente($idcli){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_cli,ape_cli FROM cliente WHERE id_cli = '$idcli' ");
		$result = $sql->fetch_row();
		return $result[0]." ".$result[1];
	}
  public function nombEmpleado($idemp){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp = '$idemp' ");
		$result = $sql->fetch_row();
		return $result[0]." ".$result[1];
	}
	public function obtenerTotal($idventa){
		require 'conexion.php';
    $sqlt = $con->query("SELECT * FROM venta WHERE id_venta = '$idventa' ");
		$total = 0;
		while ($result = $sqlt->fetch_row()) {
      $sqlp = $con->query("SELECT * FROM producto WHERE id_prod = '$result[1]' ");
  		$ProdPrecio = $sqlp->fetch_row();
			$total=$total+(($ProdPrecio[3]-$result[6])*$result[5]);
		}
		return $total;
	}
  public function nombreProducto($idprod){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_prod FROM producto WHERE id_prod = '$idprod' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
  public function precioProducto($idprod){
		require 'conexion.php';
		$sql = $con->query("SELECT precio_prod FROM producto WHERE id_prod = '$idprod' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
  public function nameCategory($idcateg){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_categoria FROM categoria WHERE id_categoria = '$idcateg' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
}

 ?>
