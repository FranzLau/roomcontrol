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

            <!-- <<<<<<///////// -->
            <?php
						$idmy = $_SESSION['loginUser']['id_emp'];
						$sql=$con->query("SELECT * FROM empleado WHERE id_emp='$idmy' ");
						$date = $sql->fetch_row();
						 ?>

            <!-- Content Row -->
            <div class="row">
              <div class="col-lg-8">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4 border-bottom-primary">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie mr-2"></i>Informacion Personal</h6>
                    <div class="no-arrow">
                      <a href="#"> <i class="fas fa-unlock-alt fa-sm fa-fw text-gray-400"></i> </a>
                      <!-- <a href="#"> <i class="fas fa-save fa-sm fa-fw text-gray-400"></i> </a> -->
                    </div>
                  </div>
                  <div class="card-body">
                    <form class="" id="formProfile">
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">DOC.</label>
                          <select class="form-control" disabled value="<?php echo $date[3]?>">
                            <option value="DNI" selected>DNI</option>
                            <option value="RUC">RUC</option>
                            <option value="PASAPORTE">PASAPORTE</option>
                            <option value="otro">Otros</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="numdocProfile">N° DOC</label>
                          <input type="text" class="form-control" id="numdocProfile" name="numdocProfile" disabled value="<?php echo $date[4]?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="estadoProfile">ESTADO</label>
                          <input type="text" class="form-control" id="estadoProfile" name="estadoProfile" disabled value="<?php echo $date[9]?>">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="nameProfile">NOMBRES</label>
                          <input type="text" class="form-control" id="nameProfile" name="nameProfile" disabled value="<?php echo $date[1]?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lastnameProfile">APELLIDOS</label>
                          <input type="text" class="form-control" id="lastnameProfile" name="lastnameProfile" disabled value="<?php echo $date[2]?>">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="phoneProfile">TELEFONO</label>
                          <input type="text" class="form-control form-control-user" id="phoneProfile" name="phoneProfile" disabled value="<?php echo $date[5]?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="emailProfile">E-MAIL</label>
                          <input type="text" class="form-control" id="emailProfile" name="emailProfile" disabled value="<?php echo $date[6]?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="passProfile">PASSWORD</label>
                          <input type="password" class="form-control" id="passProfile" name="passProfile" disabled value="<?php echo $date[8]?>">
                        </div>
                      </div>
                    </form>
                    <hr>
                    <div class="text-right">
                      <button type="button" name="button" class="btn btn-sm btn-primary" disabled><i class="fas fa-save fa-sm fa-fw text-gray-400 mr-2"></i>Guardar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../../assets/img/registermen.png" alt="">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
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
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
