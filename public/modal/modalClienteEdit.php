<!-- Modal CLIENTE create-->
<div class="modal fade" id="modalClientEdit" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-edit mr-3"></i>Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <form id="formUpdateClient">
          <input type="text" name="CliIdEdit" id="CliIdEdit" hidden>
          <div class="form-group row">
            <label for="CliTipoDocEdit" class="col-sm-2 col-form-label col-form-label-sm">Doc:</label>
            <div class="col-sm-3">
              <select class="form-control form-control-sm" id="CliTipoDocEdit" name="CliTipoDocEdit">
                <option value="DNI" selected>DNI</option>
                <option value="RUC">RUC</option>
                <option value="PASAPORTE">PASAPORTE</option>
                <option value="otro">Otros</option>
              </select>
            </div>
            <div class="col-sm-7">
              <input type="text" class="form-control form-control-sm" id="CliNumDocEdit" name="CliNumDocEdit" placeholder="XXXXXXXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliNombreEdit" class="col-sm-2 col-form-label col-form-label-sm">Nombre:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="CliNombreEdit" name="CliNombreEdit" placeholder="Nombres">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliApellidoEdit" class="col-sm-2 col-form-label col-form-label-sm">Apellidos:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="CliApellidoEdit" name="CliApellidoEdit" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliTelefonoEdit" class="col-sm-2 col-form-label col-form-label-sm">Teléfono:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-sm" id="CliTelefonoEdit" name="CliTelefonoEdit">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliEmailEdit" class="col-sm-2 col-form-label col-form-label-sm">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control form-control-sm" id="CliEmailEdit" name="CliEmailEdit">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnClientUpdate"><i class="fas fa-pencil-alt mr-2"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>
