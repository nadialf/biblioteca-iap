<div class="modal fade" id="addAuthor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Nuevo autor</h4>
                </div>
                <form role="form" id="formA" name="formA" action="<?php echo base_url().'author/addAuthorB' ?>" method="post" accept-charset="utf-8">
                    <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="author" id="author">
                            </div>
                            <div class="form-group">
                                <label>Apellido(s)</label>
                                <input class="form-control" name="lastName" id="lastName">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveA" id="saveA">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addEditorial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Nueva editorial</h4>
                </div>
                <form role="form" name="formE" id="formE" action="<?php echo base_url().'editorial/addEditorialB' ?>" method="post" accept-charset="utf-8">
                    <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="editorial" id="editorial">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveE" id="saveE">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>