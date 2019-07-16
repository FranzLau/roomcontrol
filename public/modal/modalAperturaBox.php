<!-- Modal Apertura Caja-->
<div class="modal fade" id="ModalAperturarBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Apertura Inicial de Caja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formOpenBox">
              <div class="form-group row">
                <label for="FechaOpenBox" class="col-sm-3 col-form-label col-form-label-sm">Fecha:</label>
                <div class="col-sm-9">
                  <?php
                    date_default_timezone_set('America/Lima');
                    $fechaGasto = date('Y-m-d');
                  ?>
                  <input type="text" name="FechaOpenBox" class="form-control form-control-sm text-center" value="<?php echo $fechaGasto ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="montoOpenBox" class="col-sm-3 col-form-label col-form-label-sm">Monto:</label>
                <div class="col-sm-9">
                  <input type="number" aria-describedby="msjData" name="montoOpenBox" step="any" class="form-control form-control-sm" placeholder="S/.">
                  <small id="msjData" class="form-text text-muted">* Campo obligatorio.</small>
                </div>
              </div>
              <input type="text" name="estadoOpenBox" value="Abierta" hidden>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary w-100" id="btn-saveOpenBox"><i class="fas fa-save fa-sm mr-2 text-white-50"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>
