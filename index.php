<?php
session_start();
if(isset($_SESSION['loginUser'])){
    header('Location: public/views/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HC Admin - Login</title>
  <link rel="icon" type="image/ico" href="assets/img/red_hotel.ico">
  <link rel="stylesheet" href="assets/alertify/css/alertify.css">
  <link rel="stylesheet" href="assets/alertify/css/themes/bootstrap.css">


  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/room-styles.css">

</head>
<body class="bg-gradient-primary">
  <!-- ///////////////////////////////////////////////////////////////////////////// -->
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-room">
                <img src="assets/img/luz-room.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input id="userlg" name="userlg" type="text" class="form-control form-control-user" placeholder="Ingrese su DNI..." pattern="[A-Za-z0-9_-]{1,15}" required>
                    </div>
                    <div class="form-group">
                      <input type="password" id="passlg" name="passlg" class="form-control form-control-user"  placeholder="Password" pattern="[A-Za-z0-9_-]{1,15}" required>
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->

                  </form>
                  <!-- <a href="#" id="btnlg" class="btn btn-primary btn-user btn-block">
                    Login
                  </a> -->
                  <button type="button" id="btnlg" class="btn btn-primary btn-user btn-block">
                    <i class="fas fa-sign-in-alt mr-2"></i>Entrar
                  </button>
                  <!-- <hr>
                  <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                  </a> -->
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- ///////////////////////////////////////////////////////////////////////////// -->
  <!-- ///////////////////////////////////////////////////////////////////////////// -->
  <!-- <section id="body-login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 d-none d-md-block px-0">
          <div class="img-login"></div>
        </div>
        <div class="col-sm-4 px-0">
          <div class="login-content d-flex">
            <div class="form-login m-auto">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <i class="fas fa-home fa-3x"></i>
                  <p>THE TOTY HOUSE</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <form action="" id="form-lg">
                    <input id="userlg" name="userlg" type="text" placeholder="Usuario" class="form-control mb-3" pattern="[A-Za-z0-9_-]{1,15}" required autocomplete="off" autofocus>
                    <input id="passlg" name="passlg" type="password" placeholder="Contraseña" class="form-control mb-3" pattern="[A-Za-z0-9_-]{1,15}" required>
                  </form>
                  <button class="btn btn-info-melody w-100" id="btnlg"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</button>

                  <?php
                    require 'config/conexion.php';
                    $sql = $con->query("SELECT * FROM empleado WHERE user_emp= 'Administrador' ");
                    $validar =0;
                    if ($result=$sql->fetch_row()>0){
                       $validar = 1;
                     }
                     if (!$validar):
                  ?>
                    <p><a href="register.php">Registrate Aquí</a></p>
                  <?php endif; ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section> -->

  <!-- Bootstrap core JavaScript-->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="assets/js/sb-admin-2.min.js"></script>

 <script src="assets/alertify/alertify.js"></script>
 <script src="assets/js/loginuser.js"></script>

</body>
</html>
