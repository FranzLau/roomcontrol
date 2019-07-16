<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="ModalEditarEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formUpdateEmp">
              <input type="text" name="editIdEmp" id="editIdEmp" name="editIdEmp" hidden>
              <div class="form-group row">
                <label for="editNombEmp" class="col-sm-3 col-form-label col-form-label-sm">Nombres:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="editNombEmp" name="editNombEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editApeEmp" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="editApeEmp" name="editApeEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editTipoDocEmp" class="col-sm-3 col-form-label col-form-label-sm">Documento:</label>
                <div class="col-sm-3">
                  <select class="form-control form-control-sm" id="editTipoDocEmp" name="editTipoDocEmp">
                    <option value="DNI" selected>DNI</option>
                    <option value="RUC">RUC</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="otro">Otros</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-sm" id="editNumDocEmp" name="editNumDocEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editTelfEmp" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="editTelfEmp" name="editTelfEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editEmailEmp" class="col-sm-3 col-form-label col-form-label-sm">E-mail:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control form-control-sm" id="editEmailEmp" name="editEmailEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editEstaEmp" class="col-sm-3 col-form-label col-form-label-sm">Estado:</label>
                <div class="col-sm-9">

                  <select class="form-control form-control-sm" id="editEstaEmp" name="editEstaEmp">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                  </select>
                </div>
              </div>
              <div class="form-group row" hidden>
                <label for="editUserEmp" class="col-sm-3 col-form-label col-form-label-sm">Usuario:</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                  <select class="form-control form-control-sm" id="editUserEmp" name="editUserEmp">
                    <option value="Usuario">Usuario</option>
                    <option value="Administrador">Administrador</option>
                  </select>
                </div>
              </div>
              <div class="form-group row" hidden>
                <label for="editPassEmp" class="col-sm-3 col-form-label col-form-label-sm">Password:</label>
                <div class="col-sm-9">
                  <input type="text" aria-describedby="emailHelp" class="form-control form-control-sm" id="editPassEmp" name="editPassEmp" placeholder="Ingresa una contraseña">
                  <small id="emailHelp" class="form-text text-muted">* Solo para quien use el Sistema.</small>
                </div>
              </div>
            </form>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <button type="button" class="btn w-100 btn-warning btn-sm" id="btnUpdateEmp"><i class="fas fa-edit mr-2 fa-sm text-white-50"></i>Editar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
