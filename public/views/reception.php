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
                <h1 class="h3 mb-0 text-gray-800">Recepción</h1>
              </div>
              <div class="col-4 mt-md-0 text-right">

                <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-th mr-lg-2 fa-sm"></i><span class="d-none d-lg-inline">Registro</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-th-list mr-lg-2 fa-sm"></i><span class="d-none d-lg-inline">Listado</span></a>
                  </li>
                  </li>
                </ul>

              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">

                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <!-- Content CARD principal -->

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card shadow">
                          <div class="card-header d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-suitcase-rolling mr-2"></i>Ingrese datos</h6>
                            <div class="no-arrow">

                              <a href="client.php" class="btn btn-sm btn-info"><i class="fas fa-user fa-sm fa-fw"></i></a>
                              <button type="button" name="button" class="btn btn-sm btn-success ml-2"><i class="fas fa-plus fa-sm fa-fw"></i></button>
                              <button type="button" name="button" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash fa-sm fa-fw"></i></button>

                            </div>
                          </div>
                          <div class="card-body">
                            <form id="">
                              <div class="row">
                                <div class="col-sm-4">
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label col-form-label-sm">Room:</label>
                                    <div class="col-sm-8">
                                      <select class="form-control form-control-sm" id="selectReceptionRoom" name="producVen" style="width:100%">
        																<option value="">Elije habitación</option>
        																<?php $room = $con->query("SELECT * FROM room WHERE estado_room='Disponible' ");
        																		while ($row = $room->fetch_assoc()) {
        																			echo "<option value='".$row['id_room']."' ";
        																			echo ">";
        																			echo $row['nom_room'];
        																			echo "</option>";
        																		}
        																?>
        															</select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Tarifa:</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                    </div>
                                  </div>
                                  <div class="form-group row mb-0">
                                    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Tipo:</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-8">
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">N° Doc:</label>
                                    <div class="col-sm-4" id="searchClientSelect">
                                      <select class="form-control form-control-sm" id="selectReceptionCli" name="selectReception" style="width:100%">
                                        <option value="">Elije Docum.</option>
                                        <?php
                                            $client = $con->query("SELECT * FROM client");
                                            while ($row = $client->fetch_assoc()) {
                                              echo "<option value='".$row['id_cli']."' ";
                                              echo ">";
                                              echo $row['numdoc_cli'];
                                              echo "</option>";
                                            }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-lg-0">
                                      <input type="text" readonly class="form-control form-control-sm" id="staticEmail">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-sm">Descuento:</label>
                                    <div class="col-sm-4">
                                      <input type="number" step="any" class="form-control form-control-sm" id="inputPassword">
                                    </div>
                                    <!-- <div class="col-sm-6 mt-3 mt-lg-0">
                                      <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                    </div> -->
                                  </div>
                                  <div class="form-group row mb-0">
                                    <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-sm">Inicio:</label>
                                    <div class="col-sm-4">
                                      <input type="date" class="form-control form-control-sm" id="inputPassword">
                                    </div>
                                    <label for="inputPassword" class="col-sm-2 col-form-label col-form-label-sm text-right">Fin:</label>
                                    <div class="col-sm-4">
                                      <input type="date" class="form-control form-control-sm" id="inputPassword">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Fin CARD principal -->


                    <div class="row mt-2">
                      <div class="col-sm-12">
                        <!-- Card Table Temporal -->
                        <div id="TableReceptionTempLoad"></div>

                        <!-- <div class="card shadow">
                          <div class="card-body p-0">

                            <div class="row">
                              <div class="col-sm-12">

                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <!-- Basic Card Example -->

                    <div class="card shadow">
                      <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-clipboard-list mr-2"></i>Lista de Atención</h6>
                      </div>
                      <div class="card-body">
                        <div id="tableAttention"></div>
                      </div>
                    </div>
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
    <?php include('scripts.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableAttention').load('../componentes/tableAttent.php');
        $('#TableReceptionTempLoad').load("../componentes/tableReceptionTemp.php");
      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
