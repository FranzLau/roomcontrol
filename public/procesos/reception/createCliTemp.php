<?php
  session_start();
  require '../../config/conexion.php';

  $cliIdRoom=$_POST['selectReceptionRoom'];
  $cliIdClient=$_POST['selectReceptionCli'];
  $cliFechaIni=$_POST['DateStart'];
  $cliFechaFin=$_POST['DateEnd'];
  $cliDescuent=$_POST['DescuentoRoom'];

  

?>
