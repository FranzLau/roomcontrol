<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-hotel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RC Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Recepción
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-concierge-bell fa-fw"></i>
          <span>Recepción</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Recepción:</h6>
            <a class="collapse-item" href="reception.php"><i class="fas fa-file-signature mr-2"></i>Recepcionar</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Atención:</h6>
            <a class="collapse-item" href="products.php"><i class="fas fa-luggage-cart mr-2"></i>Habitaciones</a>
            <a class="collapse-item" href="configuration.php"><i class="fas fa-wrench mr-2"></i>Categorias</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="reserva.php">
          <i class="fas fa-fw fa-calendar-day"></i>
          <span>Reservas</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cash-register"></i>
          <span>Módulo de Caja</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sección Caja:</h6>
            <a class="collapse-item" href="box.php"><i class="fas fa-box-open mr-2"></i>Apertura y Cierre</a>
            <a class="collapse-item" href="retiro.php"><i class="fas fa-comment-dollar mr-2"></i>Retirar Dinero</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrar
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="client.php">
          <i class="fas fa-fw fa-suitcase-rolling"></i>
          <span>Mis Clientes</span></a>
      </li>

      <!-- Nav Item - Empleados -->
      <li class="nav-item">
        <a class="nav-link" href="empleado.php">
          <i class="fab fa-fw fa-black-tie"></i>
          <span>Mi Personal</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
