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
    <?php include('../modal/modalEditCategory.php'); ?>

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
              <div class="col-sm-12">
                <h1 class="h3 mb-2 text-gray-800">Categorias</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row">
              <div class="col-lg-4">

                <!-- Basic Card Example -->

                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Registro de Categoria</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <form id="formNewCategory">
                          <div class="form-group">
                            <label for="nomCateg" class="col-form-label col-form-label-sm">Nombre:</label>
                            <input type="text" class="form-control form-control-sm" id="nomCateg" name="nomCateg" placeholder="Categoria Aquí...">
                          </div>
                          <div class="form-group">
                            <label for="descCateg" class="col-form-label col-form-label-sm">Descripción:</label>
                            <textarea class="form-control form-control-sm" name="descCateg" id="descCateg" rows="3" placeholder="Ingresa una descripción..."></textarea>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-primary w-100" id="btnCreateCategory"><i class="fas fa-save text-white-50 mr-2"></i>Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-8">

                <!-- Table Category Room -->

                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Categorias</h6>
                  </div>
                  <div class="card-body">
                    <div id="tabCategory"></div>
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
        $('#tabCategory').load('../componentes/tableCategory.php');
      });
    </script>
    <script type="text/javascript">
      function ReadCategory(idcateg){
        $.ajax({
          url: '../../public/procesos/category/readCategory.php',
          type: 'POST',

          data: "idcateg=" + idcateg,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idCategEdit').val(datos['idCategory']);
            $('#nomCategEdit').val(datos['nomCategory']);
            $('#desCategEdit').val(datos['desCategory']);

          }
        })
        .done(function(r) {
          console.log(r);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteCategory(idcateg){
        alertify.confirm("¿Seguro de BORRAR este producto?.",
        function(){
           $.ajax({
            url: '../../public/procesos/category/deleteCategory.php',
            type: 'POST',
            data: "idcateg=" + idcateg,
            success:function(r){
             if (r==1) {
              $('#tabCategory').load('../componentes/tableCategory.php');
              alertify.success("Eliminaste con EXITO");
             }else{
              alertify.error("No se pudo Eliminar este producto");
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
