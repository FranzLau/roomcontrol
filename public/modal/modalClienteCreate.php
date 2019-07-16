<!-- Modal CLIENTE create-->
<div class="modal fade" id="modalClientCreate" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-file mr-3"></i>Registra un Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <div class="row">
          <div class="col-sm-12">
            <form id="Form-NewClient">
              <div class="form-group row">
                <label for="tdocNewClient" class="col-sm-3 col-form-label col-form-label-sm">Doc:</label>
                <div class="col-sm-3">
                  <select class="form-control form-control-sm" id="tdocNewClient" name="tdocNewClient">
                    <option value="DNI" selected>DNI</option>
                    <option value="RUC">RUC</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="otro">Otros</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-sm" id="ndocNewClient" name="ndocNewClient" placeholder="XXXXXXXX">
                </div>
              </div>
              <div class="form-group row">
                <label for="nomNewClient" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="nomNewClient" name="nomNewClient" placeholder="Nombres">
                </div>
              </div>
              <div class="form-group row">
                <label for="apeNewClient" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="apeNewClient" name="apeNewClient" placeholder="Apellidos">
                </div>
              </div>

              <div class="form-group row">
                <label for="telfNewClient" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="telfNewClient" name="telfNewClient">
                </div>
              </div>
              <div class="form-group row">
                <label for="emailNewClient" class="col-sm-3 col-form-label col-form-label-sm">Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control form-control-sm" id="emailNewClient" name="emailNewClient">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <button type="button" class="btn btn-sm btn-primary w-100" id="btn-CreateNewClient"><i class="fas fa-save"></i> Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
