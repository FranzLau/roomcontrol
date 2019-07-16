<nav class="navbar navbar-expand-lg navbar-dark bg-navbar-red" style="box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="../../assets/css/img/logoroom2.png" width="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto mr-auto">
        <!-- <li class="nav-item mr-2">
          <a href="#pageabout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">Home</a>
          <ul id="pageabout" class="list-unstyled collapse">
            <li>
              <a href="#">page 1</a>
            </li>
            <li>
              <a href="#">page 2</a>
            </li>
            <li>
              <a href="#">page 3</a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item mr-2">
          <a class="nav-link" href="hotel.php"><i class="fas fa-concierge-bell mr-2"></i>Recepción</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link" href="box.php"><i class="fas fa-box-open mr-2"></i>Módulo Caja</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link" href="retiro.php"><i class="fas fa-wallet mr-2"></i>Egresos</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link" href="#"><i class="fas fa-chart-line mr-2"></i>Resumen</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="../../assets/css/img/registermen.png" alt="" width="20px">
            <!-- <i class="fas fa-user-circle mr-2"></i> -->
            <?php echo $_SESSION['loginUser']['nom_emp'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="empleado.php"><i class="fas fa-user mr-2"></i>Mi Personal</a>

            <a class="dropdown-item" href="#"><i class="fas fa-code mr-2"></i>Acerca de</a>
            <a class="dropdown-item" href="#" onclick="salir()"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
