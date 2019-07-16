<!-- Modal -->
<div class="modal fade" id="modalCloseBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Cierre de Caja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditOpenbox">
          <input type="text" name="idOpenbox" id="idOpenbox" hidden>
          <!-- <div class="form-group row">
            <label for="empCloseBox" class="col-sm-3 col-form-label col-form-label-sm">Responsable:</label>
            <div class="col-sm-9">
              <input type="number" name="empCloseBox" id="empCloseBox" class="form-control form-control-sm text-center" readonly>
            </div>
          </div> -->
          <div class="form-group row">
            <label for="montoAperturaBox" class="col-sm-3 col-form-label col-form-label-sm">Apertura:</label>
            <div class="col-sm-9">
              <input type="number" id="montoAperturaBox" class="form-control form-control-sm text-center" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="FechaCloseBox" class="col-sm-3 col-form-label col-form-label-sm">Fecha Cierre:</label>
            <div class="col-sm-9">
              <?php
                date_default_timezone_set('America/Lima');
                $fechaGasto = date('Y-m-d');
              ?>
              <input type="text" name="FechaCloseBox" id="FechaCloseBox" class="form-control form-control-sm text-center" value="<?php echo $fechaGasto ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="montoCloseBox" class="col-sm-3 col-form-label col-form-label-sm">Monto Cierre:</label>
            <div class="col-sm-9">
              <input type="number" aria-describedby="msjData" name="montoCloseBox" id="montoCloseBox" step="any" class="form-control form-control-sm" placeholder="S/.">
              <small id="msjData" class="form-text text-muted">* Campo obligatorio.</small>
            </div>
          </div>
          <input type="text" name="estadoCloseBox" value="Cerrada" hidden>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn-closeBox"><i class="fas fa-check-circle fa-sm mr-2 text-white-50"></i>Cerrar Caja</button>
      </div>
    </div>
  </div>
</div>
