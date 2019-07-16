<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="ModalNuevoEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formCreateEmp">
              <div class="form-group row">
                <label for="createNombEmp" class="col-sm-3 col-form-label col-form-label-sm">Nombres:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createNombEmp" name="createNombEmp" placeholder="Nombres">
                </div>
              </div>
              <div class="form-group row">
                <label for="createApeEmp" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createApeEmp" name="createApeEmp" placeholder="Apellidos">
                </div>
              </div>
              <div class="form-group row">
                <label for="createTipoDocEmp" class="col-sm-3 col-form-label col-form-label-sm">Documento:</label>
                <div class="col-sm-3">
                  <select class="form-control form-control-sm" id="createTipoDocEmp" name="createTipoDocEmp">
                    <option value="DNI" selected>DNI</option>
                    <option value="RUC">RUC</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="otro">Otros</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-sm" id="createNumDocEmp" name="createNumDocEmp" placeholder="N° del Documento">
                </div>
              </div>
              <div class="form-group row">
                <label for="createTelfEmp" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createTelfEmp" name="createTelfEmp" placeholder="Ingresa tu Celular">
                </div>
              </div>
              <div class="form-group row">
                <label for="createEmailEmp" class="col-sm-3 col-form-label col-form-label-sm">E-mail:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control form-control-sm" id="createEmailEmp" name="createEmailEmp" placeholder="tu-correo@ejemplo.com">
                </div>
              </div>
              <div class="form-group row" hidden>
                <label for="createEstaEmp" class="col-sm-3 col-form-label col-form-label-sm">Estado:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createEstaEmp" name="createEstaEmp" value="1">
                </div>
              </div>
              <div class="form-group row">
                <label for="createUserEmp" class="col-sm-3 col-form-label col-form-label-sm">Usuario:</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                  <select class="form-control form-control-sm" id="createUserEmp" name="createUserEmp">
                    <option value="Usuario">Usuario</option>
                    <option value="Administrador">Administrador</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="createPassEmp" class="col-sm-3 col-form-label col-form-label-sm">Password:</label>
                <div class="col-sm-9">
                  <input type="text" aria-describedby="emailHelp" class="form-control form-control-sm" id="createPassEmp" name="createPassEmp" placeholder="Ingresa una contraseña">
                  <small id="emailHelp" class="form-text text-muted">* Solo para quien use el Sistema.</small>
                </div>
              </div>
            </form>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12 text-center">
            <button type="button" class="btn btn-primary btn-sm w-100" id="btnCreateEmp"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
