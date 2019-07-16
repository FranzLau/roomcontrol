<!-- Modal -->
<div class="modal fade" id="modalRetiroCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registra el Retiro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formNewEgreso">
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Fecha:</label>
                <div class="col-sm-9">
                  <?php
                    date_default_timezone_set('America/Lima');
                    $fechaGasto = date('Y-m-d');
                  ?>
                  <input type="text" name="fechNewEgreso" id="fechNewEgreso" class="form-control form-control-sm text-center" placeholder="City" value="<?php echo $fechaGasto ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Descripcion:</label>
                <div class="col-sm-9">
                  <textarea name="descNewEgreso" id="descNewEgreso" placeholder="Escriba la descripción aquí..." class="form-control" rows="3" cols="50"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Precio:</label>
                <div class="col-sm-9">
                  <input type="number" aria-describedby="datesRetiro" name="precNewEgreso" id="precNewEgreso" step="any" class="form-control form-control-sm" placeholder="S/.">
                  <small id="datesRetiro" class="form-text text-muted">Todos los campos son obligatorios.</small>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary w-100" id="btnCreateEgreso"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
