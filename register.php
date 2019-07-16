<?php

    require 'config/conexion.php';
    $sql= $con->query("SELECT * FROM empleado WHERE user_emp='Administrador'  ");
    $result = $sql->fetch_row();

    if ($result>0) {
    	header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Toty House</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="assets/css/img/log.ico">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/alertify/css/alertify.css">
  <link rel="stylesheet" href="assets/alertify/css/themes/bootstrap.css">
  <link rel="stylesheet" href="assets/css/roomcssmin.css">
</head>
<body id="body-index"><!--***************************************************************-->
  <!--***************************************************************-->


  <section id="section-register">
    <div class="container">
      <div class="row my-3 my-lg-0">
        <div class="col-sm-12">
          <div class="login-content d-flex">
            <div class="form-register m-auto">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h3>Sección de Registro</h3>
                  <p>¡Registrate como Administrador para usar el sistema y llevar todo el control!</p>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-md-12">
                  <p>Administrador</p>
                </div>
              </div> -->

              <div class="row mt-3">
                <div class="col-sm-12">
                  <form id="formRegEmp">
                    <div class="form-group row">
                      <label for="nomEmpReg" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="nomEmpReg" name="nomEmpReg" placeholder="Nombres">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="apeEmpReg" class="col-sm-3 col-form-label col-form-label-sm">Apellido:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="apeEmpReg" name="apeEmpReg" placeholder="Apellidos">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tipoDocEmpReg" class="col-sm-3 col-form-label col-form-label-sm">Documento:</label>
                      <div class="col-sm-3">
                        <select class="form-control form-control-sm" id="tipoDocEmpReg" name="tipoDocEmpReg">
                          <option value="DNI">DNI</option>
                          <option value="RUT">RUT</option>
                          <option value="PASAPORTE">PASAPORTE</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" id="numDocEmpReg" name="numDocEmpReg" placeholder="XXXXXXXXXXX">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="telfEmpReg" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="telfEmpReg" name="telfEmpReg" placeholder="XXXXXXXXXXX">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="emailEmpReg" class="col-sm-3 col-form-label col-form-label-sm">E-mail:</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="emailEmpReg" name="emailEmpReg" placeholder="abcde@ejemplo.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="passEmpReg" class="col-sm-3 col-form-label col-form-label-sm">Contraseña:</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control form-control-sm" id="passEmpReg" name="passEmpReg" placeholder="Contraseña">
                      </div>
                    </div>
                    <!-- ************************ DATOS OCULTOS PARA REGISTRO -->
                    <div class="form-row" hidden="">
                      <div class="form-group col-sm-6">
                        <!-- <label for="" class="col-form-label col-form-label-sm">Acceso :</label> -->
                        <input type="text" class="form-control form-control-sm" name="userEmpReg" id="userEmpReg" value="Administrador">
                      </div>
                      <div class="form-group col-sm-6">
                        <!-- <label for="" class="col-form-label col-form-label-sm">Acceso :</label> -->
                        <input type="text" class="form-control form-control-sm" name="estadoEmpReg" id="estadoEmpReg" value="1">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <button id="btnRegEmp" type="button" class="btn btn-info-melody"><i class="fas fa-save"></i> Registrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--***************************************************************-->


	<script src="assets/js/jquery.3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js" ></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/alertify/alertify.js"></script>
  <script src="assets/js/helpers.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#btnRegEmp').click(function(event) {
      vacios = validarFrmVacio('formRegEmp');
    if(vacios > 0){
      alertify.error("Debe llenar todos los campos!");
      return false;
    }
    var datos=$('#formRegEmp').serialize();
      $.ajax({
        url: 'public/procesos/empleado/createmp.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
      })
      .done(function(r) {
        if (!r.error) {
        alertify.success("Agregado con ÉXITO");
        window.location.href='index.php';
      }else{
        alertify.error("Datos Incorrectos");
      }
          });
    });
  });
  </script>
</body>
</html>
