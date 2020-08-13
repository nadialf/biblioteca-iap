<div class="modal fade" id="addLoan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Nuevo préstamo <small>El lector debe estar previamente registrado</small></h4>
                </div>
                <form role="form" id="formLn" name="formLn" action="<?php echo base_url().'loan/addLoan' ?>" method="post" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre del lector</label>
                            <select class="form-control" name="reader" id="reader">
                                <option value="" disabled selected>Selecciona...</option>
                                <?php foreach($reader as $row): ?>
                                    <option value="<?php echo $row->name_r.' '.$row->last1_r.' '.$row->last2_r; ?>"
                                            name="<?php echo $row->name_r.' '.$row->last1_r.' '.$row->last2_r; ?>">
                                            <?php echo $row->name_r.' '.$row->last1_r.' '.$row->last2_r; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Título del libro</label>
                            <select class="form-control" name="book" id="book">
                                <option value="" disabled selected>Selecciona...</option>
                                <?php foreach($book as $row): ?>
                                    <option value="<?php echo $row->title; ?>" name="<?php echo $row->title; ?>">
                                            <?php echo $row->title; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php date_default_timezone_set('America/Mexico_City'); ?>
                            <label>Fecha de préstamo</label>
                            <input class="form-control" type="date" name="start_date" id="start_date" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label>Fecha de devolución</label>
                            <input class="form-control" type="date" name="end_date" id="end_date">
                        </div>
                        <div class="form-group">
                            <label>Tipo de credencial</label>
                            <input class="form-control" name="credential" id="credential">
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="2" name="notes_l" id="notes_l"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveLn" id="saveLn">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>