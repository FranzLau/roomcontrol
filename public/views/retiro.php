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
    <?php include('../modal/modalEgresoCreate.php'); ?>
    <?php include('../modal/modalEgresoEdit.php'); ?>

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
              <div class="col-8 text-left d-flex">
                <!-- <h4 class="page-title my-auto">EGRESOS</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Egresos</h1>
              </div>
              <div class="col-4 mt-md-0 text-right">
                <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Retiro</span></button>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-wallet mr-2"></i>Lista de Gastos</h6>
                  </div>
                  <div class="card-body">
                    <div id="tableRetiro"></div>
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

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableRetiro').load('../componentes/tablegasto.php');
      });
    </script>
    <script type="text/javascript">
      function obtenDataEgreso(idgto){
        $.ajax({
          url: '../../public/procesos/gastos/readGasto.php',
          type: 'POST',
          data: "idgto=" + idgto,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idEditEgreso').val(datos['idEgreso']);
            $('#fechEditEgreso').val(datos['fechaEgreso']);
            $('#descEditEgreso').val(datos['descEgreso']);
            $('#precEditEgreso').val(datos['precioEgreso']);
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
      function deleteEgreso(idgto){
    	  alertify.confirm("¿Seguro de BORRAR?.",
          function(){
             $.ajax({
              url: '../../public/procesos/gastos/deleteGasto.php',
              type: 'POST',
              data: "idgto=" + idgto,
              success:function(r){
               if (r==1) {
                $('#tableRetiro').load('../componentes/tablegasto.php');
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
