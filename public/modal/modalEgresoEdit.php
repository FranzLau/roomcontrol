<!-- Modal -->
<div class="modal fade" id="modalRetiroEditer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Retiro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditerEgreso">
              <input type="text" name="idEditEgreso" id="idEditEgreso" hidden>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Fecha:</label>
                <div class="col-sm-9">
                  <input type="date" name="fechEditEgreso" id="fechEditEgreso" class="form-control form-control-sm text-center" placeholder="City" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Descripcion:</label>
                <div class="col-sm-9">
                  <textarea name="descEditEgreso" id="descEditEgreso" class="form-control" rows="3" cols="50"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Precio:</label>
                <div class="col-sm-9">
                  <input type="number" aria-describedby="datesRetiro" name="precEditEgreso" id="precEditEgreso" step="any" class="form-control form-control-sm">
                  <small id="datesRetiro" class="form-text text-muted">Ingrese los datos correctos.</small>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnEditEgreso"><i class="fas fa-pen mr-2"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>
