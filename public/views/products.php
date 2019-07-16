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
    <?php include('../modal/modalProductoCreate.php'); ?>
    <?php include('../modal/modalProductoEdit.php'); ?>
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
                <h1 class="h3 mb-0 text-gray-800">Habitaciones</h1>
              </div>
              <div class="col-4 text-right">
                <button type="button" class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#ModalNewProd"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nueva Habitación</span></button>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bed mr-2"></i>Lista de Habitaciones</h6>
                  </div>
                  <div class="card-body">
                    <div id="tableProducto"></div>
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
        $('#tableProducto').load('../componentes/tableProducto.php');
      });
    </script>
    <script type="text/javascript">
      function ReadProduct(idprod){
        $.ajax({
          url: '../../public/procesos/producto/readProducto.php',
          type: 'POST',
          data: "idprod=" + idprod,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idProdEdit').val(datos['ProdId']);
            $('#nomEditProd').val(datos['ProdNomb']);
            $('#precioEditProd').val(datos['ProdPrecio']);
            $('#detalleEditProd').val(datos['ProdDetalle']);
            $('#estadoEditProd').val(datos['ProdEstado']);
            $('#catgEditProd').val(datos['ProdCategory']);
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
      function deleteProduct(idprod){
        alertify.confirm("¿Seguro de BORRAR este producto?.",
        function(){
           $.ajax({
            url: '../../public/procesos/producto/deleteProducto.php',
            type: 'POST',
            data: "idprod=" + idprod,
            success:function(r){
             if (r==1) {
              $('#tableProducto').load('../componentes/tableProducto.php');
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
