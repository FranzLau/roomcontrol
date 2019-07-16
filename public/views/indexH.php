<?php
  session_start();
  require '../../config/conexion.php';
  // require '../../config/ventas.php';
  date_default_timezone_set('America/Lima');
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include("head.php"); ?>
</head>
<body style="background: #F2F4F4">
  <div class="page">
    <header class="header">
      <?php include("navbar.php"); ?>
    </header>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-alert" class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <i class="fas fa-exclamation-triangle mr-3"></i><strong>Advertencia!</strong> Debes aperturar Caja para poder empezar a usar el sistema. <a href="#" class="alert-link">Click Aquí</a>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="fas fa-check mr-3"></i><strong>Bienvenido!</strong> Debes aperturar Caja para poder empezar a usar el sistema. <a href="#" class="alert-link">Click Aquí</a>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-title" class="py-2 mt-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 d-md-flex">
            <p class="my-auto font-nav"><i class="fas fa-chart-pie mr-3"></i>Panel de <strong>Control</strong></p>
          </div>
        </div>
      </div>
    </section>
    <!-- //////////////////////////*************************////////// -->
    <section id="section-panel" class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //////////////////////////*************************////////// -->
    <div class="page-content">

      <hr>
      <div class="container">
    <footer class="footer">
      <div class="d-sm-flex justify-content-sm-between justify-content-center">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
          Copyright <i class="far fa-copyright"></i>2019
          <a href="#" target="_blank">Patricia V.</a>. Todos los derechos reservados
        </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
          Desarrollado <i class="fas fa-code text-danger"></i> por F&M <i class="fas fa-laptop text-danger"></i>
        </span>
      </div>
    </footer>
  </div>
    </div>
  </div>
  <!---****************************************************************************-->
    <?php include('scripts.php'); ?>
  <!---****************************************************************************-->
</body>

</html>
<?php
  }else{
    header('Location: ../../');
  }
 ?>
