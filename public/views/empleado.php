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
    <?php include('../modal/modalEmpCreate.php'); ?>
    <?php include('../modal/modalEmpEdit.php'); ?>

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
                <!-- <h4 class="page-title my-auto">Empleados</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
              </div>
              <div class="col-4 mt-md-0 text-right">
                <button type="button" class="btn btn-primary shadow-sm btn-sm" data-toggle="modal" data-target="#ModalNuevoEmp"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Empleado</span></button>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div id="tableEmp"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableEmp').load('../componentes/tableemp.php');
      });
    </script>
    <script>
      function obtenDatosEmp(idemp){
        $.ajax({
          url: '../procesos/empleado/readEmp.php',
          type: 'POST',
          data: "idemp=" + idemp,
          success:function(r){
            var datos = $.parseJSON(r);
            $('#editIdEmp').val(datos['idempphp']);
            $('#editNombEmp').val(datos['nomempphp']);
            $('#editApeEmp').val(datos['apempphp']);
            $('#editTipoDocEmp').val(datos['tdocempphp']);
            $('#editNumDocEmp').val(datos['ndocempphp']);
            $('#editTelfEmp').val(datos['fonempphp']);
            $('#editEmailEmp').val(datos['emaempphp']);
            $('#editUserEmp').val(datos['userempphp']);
            $('#editPassEmp').val(datos['passempphp']);
            $('#editEstaEmp').val(datos['estaempphp']);
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
      function deleteEmp(idemp){
        alertify.confirm("¿Seguro de BORRAR al empleado?.",
          function(){
             $.ajax({
              url: '../../public/procesos/empleado/deleteEmp.php',
              type: 'POST',
              data: "idemp=" + idemp,
              success:function(r){
               if (r==1) {
                $('#tableEmp').load('../componentes/tableemp.php');
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
