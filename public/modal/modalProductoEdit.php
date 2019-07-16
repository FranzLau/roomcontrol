<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar Habitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateProd">
          <input type="text" hidden="" name="idProdEdit" id="idProdEdit">
          <div class="form-group row">
            <label for="nomEditProd" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="nomEditProd" name="nomEditProd" placeholder="Ingrese el nombre...">
            </div>
          </div>
          <div class="form-group row">
            <label for="catgEditProd" class="col-sm-3 col-form-label">Categoria:</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="catgEditProd" name="catgEditProd">
                <option value="">Elije producto</option>
								<?php $ctg = $con->query("SELECT * FROM categoria");
										while ($row = $ctg->fetch_assoc()) {
											echo "<option value='".$row['id_categoria']."' ";
											echo ">";
											echo $row['nom_categoria'];
											echo "</option>";
										}
								?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="detalleEditProd" class="col-sm-3 col-form-label col-form-label-sm">Detalles:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="detalleEditProd" name="detalleEditProd" placeholder="Ingrese algun detalle...">
            </div>
          </div>
          <div class="form-group row">
            <label for="precioEditProd" class="col-sm-3 col-form-label col-form-label-sm">Precio:</label>
            <div class="col-sm-4">
              <input type="number" step="any" class="form-control form-control-sm" id="precioEditProd" name="precioEditProd" placeholder="S/.">
            </div>
          </div>
          <div class="form-group row">
            <label for="estadoEditProd" class="col-sm-3 col-form-label col-form-label-sm">Estado</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="estadoEditProd" name="estadoEditProd">
                <option value="Disponible">Disponible</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Ocupado">Ocupado</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100 btn-sm" id="btnUpdateProd"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Actualizar Datos</button>
      </div>
    </div>
  </div>
</div>
