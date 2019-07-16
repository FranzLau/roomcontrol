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
    <?php include('../modal/modalProductoCreate.php'); ?>
    <?php include('../modal/modalProductoEdit.php'); ?>
    <?php include('../modal/modalClienteCreate.php'); ?>
    <?php include('../modal/modalClienteEdit.php'); ?>
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-title" class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 text-left d-flex">
            <h4 class="page-title my-auto"><i class="fas fa-concierge-bell mr-2"></i>Recepción</h4>
          </div>
          <div class="col-6 text-right">
            <!-- <button type="button" class="btn btn-sm btn-primary-kumela mr-2" data-toggle="modal" data-target="#ModalNewProd"><i class="fas fa-plus mr-lg-2"></i><span class="d-none d-lg-inline">Habitaciones</span></button> -->
            <button type="button" class="btn btn-sm btn-primary-kumela mr-2" data-toggle="modal" data-target="#ModalNewProd"><i class="fas fa-bed mr-lg-2"></i><span class="d-none d-lg-inline">Nueva Habitación</span></button>
            <!-- <a href="products.php" class="btn btn-sm btn-primary-kumela mr-2"><i class="fas fa-bed mr-lg-2"></i><span class="d-none d-lg-inline">Habitaciones</span></a> -->
            <button type="button" class="btn btn-sm btn-primary-kumela mr-2" data-toggle="modal" data-target="#modalClientCreate"><i class="fas fa-users mr-lg-2"></i><span class="d-none d-lg-inline">Nuevo Cliente</span></button>
            <!-- <a href="client.php" class="btn btn-sm btn-primary-kumela mr-2"><i class="fas fa-users mr-lg-2"></i><span class="d-none d-lg-inline">Clientes</span></a> -->
            <a href="configuration.php" class="btn btn-sm btn-primary-kumela"><i class="fas fa-cog"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-content">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recepción</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Habitaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cliente</a>
              </li>
            </ul>
            <!-- <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recepción</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Habitaciones</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Clientes</a>
              </div>
            </nav> -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div id="tableProducto"></div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div id="tableClient"></div>
              </div>
            </div>
            <!-- <div class="card border-top-0">
              <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    adsdadas 01
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableClient').load('../componentes/tableCliente.php');
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
            $('#CliDireccionEdit').val(datos['dircliphp']);
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
              $('#tableCliente').load('../componentes/tableCliente.php');
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
