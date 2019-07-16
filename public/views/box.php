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
  <body>
    <?php include('../modal/modalAperturaBox.php'); ?>
    <?php include('../modal/modalAperturaBoxEdit.php'); ?>
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
                <!-- <h4 class="page-title my-auto">Empleados</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Apertura y Cierre</h1>
              </div>
              <div class="col-4 mt-md-0 text-right">
                <button type="button" class="btn btn-primary shadow-sm btn-sm" data-toggle="modal" data-target="#ModalAperturarBox"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nueva Apertura</span></button>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-suitcase-rolling mr-2"></i>Movimiento en Caja</h6>
                  </div>
                  <div class="card-body">
                    <div id="tableBoxs"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableBoxs').load('../componentes/tablebox.php');
      });
    </script>
    <script type="text/javascript">
      function obtenDataOpenbox(idbox){
        $.ajax({
          url: '../../public/procesos/box/readOpenbox.php',
          type: 'POST',
          data: "idbox=" + idbox,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idOpenbox').val(datos['idOpenbox']);
            //$('#empCloseBox').val(datos['empleOpenbox']);
            $('#montoAperturaBox').val(datos['montoOpenbox']);
          }
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
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
