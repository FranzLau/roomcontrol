<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body id="page-top">
    <?php include('../modal/modalClienteCreate.php'); ?>
    <?php include('../modal/modalClienteEdit.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include("sidebar.php"); ?>

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <?php include("topbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
              <div class="col-8 text-left">
                <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
              </div>
              <div class="col-4 mt-md-0 text-right">
                <button type="button" class="btn btn-primary shadow-sm btn-sm" data-toggle="modal" data-target="#modalClientCreate"><i class="fas fa-plus mr-lg-2 text-white-50"></i><span class="d-none d-lg-inline">Nuevo Cliente</span></button>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-suitcase-rolling mr-2"></i>Lista de Clientes</h6>
                  </div>
                  <div class="card-body">
                    <div id="tableClient"></div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableClient').load('../componentes/tableCliente.php');
      });
    </script>
    <script type="text/javascript">
      function readCliente(idcli){
        $.ajax({
          url: '../../public/procesos/cliente/readCliente.php',
          type: 'POST',
          data: "idcli=" + idcli,
          success:function(r){
            var datos= $.parseJSON(r);

            $('#CliIdEdit').val(datos['idcliphp']);
            $('#CliNombreEdit').val(datos['nomcliphp']);
            $('#CliApellidoEdit').val(datos['apecliphp']);
            $('#CliTipoDocEdit').val(datos['tdcliphp']);
            $('#CliNumDocEdit').val(datos['ndcliphp']);
            $('#CliTelefonoEdit').val(datos['fnocliphp']);
            $('#CliEmailEdit').val(datos['mailcliphp']);
          }
        })
      }
      function deleteCliente(idcli){
        alertify.confirm("¿Seguro de BORRAR el cliente?.",
        function(){
          $.ajax({
            url: '../../public/procesos/cliente/deleteCliente.php',
            type: 'POST',
            data: "idcli=" + idcli,
            success:function(r){
             if (r==1) {
              $('#tableClient').load('../componentes/tableCliente.php');
              alertify.success("Eliminaste con EXITO");
             }else{
              alertify.error("No se pudo Eliminar");
             }
            }
          })
        },
        function(){
          alertify.warning('Estuviste a punto de Eliminar');
        });
      }
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
