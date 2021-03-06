<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="formRol" name="formRol">
                            <input type="hidden" id="idRol" name="idRol" value="">
                            <p class="text-primary">
                                Los campos con asterisco (<span class="required">*</span>) son obligatorios.
                            </p>
                            <div class="form-group">
                              <label for="txtNombre" class="control-label">Nombre <span class="required">*</span></label>
                              <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del rol">
                            </div>
                            <div class="form-group">
                              <label for="txtDescripcion" class="control-label">Descripción <span class="required">*</span></label>
                              <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción del rol"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="listStatus">Estado</label>
                                <select class="form-control" id="listStatus" name="listStatus">
                                  <option value="1">Activo</option>
                                  <option value="2">Inactivo</option>
                                </select>
                            </div>
                            <div class="tile-footer">
                                <button id="btnActionForm" class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span>
                                </button>&nbsp;&nbsp;&nbsp;
                                  <button class="btn btn-danger" href="#" data-dismiss="modal">
                                    <i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>