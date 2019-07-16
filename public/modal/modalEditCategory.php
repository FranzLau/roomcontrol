<!-- Modal -->
<div class="modal fade" id="modalEditCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualiza los Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formUpdateCategory">
              <input type="text" hidden="" name="idCategEdit" id="idCategEdit">
              <div class="form-group">
                <label for="nomCategEdit" class="col-form-label col-form-label-sm">Nombre:</label>
                <input type="text" class="form-control form-control-sm" id="nomCategEdit" name="nomCategEdit" placeholder="Categoria Aquí...">
              </div>
              <div class="form-group">
                <label for="desCategEdit" class="col-form-label col-form-label-sm">Descripción:</label>
                <textarea class="form-control form-control-sm" name="desCategEdit" id="desCategEdit" rows="3" placeholder="Ingresa una descripción..."></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnEditCategory"><i class="fas fa-pen mr-2"></i>Actualizar Datos</button>
      </div>
    </div>
  </div>
</div>
