<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content" style="width: 1050px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Nuevo libro <small>El autor y editorial deben estar previamente registrados</small></h4>
                </div>

                <form enctype="multipart/form-data" role="form" name="formB" id="formB" action="<?php echo base_url().'book/addBook' ?>" method="post" accept-charset="utf-8">

	                <div class="modal-body">
	                	<div class="row">

	                        <div class="col-lg-5">
	                            <div class="form-group">
	                                <label>Folio</label>
	                                <input class="form-control" name="folio" id="folio" placeholder="XIAP100...">
	                            </div>
	                            <div class="form-group">
	                                <label>T&iacute;tulo</label>
	                                <input class="form-control" name="title" id="title">
	                            </div>
	                            <div class="form-group">
	                                <label>Autor</label>
	                                <select class="form-control" name="author" id="author">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($author as $row): ?>
	                                        <option value="<?php echo $row->name_a.' '.$row->last1_a; ?>"
	                                                name="<?php echo $row->name_a.' '.$row->last1_a; ?>">
	                                                <?php echo $row->name_a.' '.$row->last1_a; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Número de edición</label>
	                                <input class="form-control" name="number" id="number">
	                            </div>
	                            <div class="form-group">
	                                <label>Editorial</label>
	                                <select class="form-control" name="editorial" id="editorial">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($editorial as $row): ?>
	                                        <option value="<?php echo $row->name_e; ?>"
	                                                name="<?php echo $row->name_e; ?>">
	                                                <?php echo $row->name_e; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Año de publicaci&oacute;n</label>
	                                <input class="form-control" name="year" id="year">
	                            </div>
	                            <div class="form-group">
	                                <label>Lugar de publicaci&oacute;n</label>
	                                <input class="form-control" name="place" id="place">
	                            </div>
	                            <div class="form-group">
	                                <label>Tema</label>
	                                <select class="form-control" name="genre" id="genre">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($genre as $row): ?>
	                                        <option value="<?php echo $row->name_g; ?>"
	                                                name="<?php echo $row->name_g; ?>">
	                                                <?php echo $row->name_g; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Idioma</label>
	                                <input class="form-control" name="language" id="language">
	                            </div>
	                        </div>
	                        <!-- /.col-lg-5 (nested) -->

	                        <div class="col-lg-4">
	                            <div class="form-group">
	                                <label>No. de p&aacute;ginas</label>
	                                <input class="form-control" name="pages" id="pages">
	                            </div>
	                            <div class="form-group">
	                                <label>Descripción</label>
	                                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Reseña/sinopsis para el público"></textarea>
	                            </div>
	                            <div class="form-group">
	                                <label>Observaciones</label>
	                                <textarea class="form-control" name="notes" id="notes" rows="2" placeholder="Estado físico del libro"></textarea>
	                            </div>
	                            <div class="form-group">
	                                <label>Copias</label>
	                                <input class="form-control" name="copy" id="copy">
	                            </div>
	                            <div class="form-group">
	                                <label>Clasificación</label>
	                                <input class="form-control" name="classification" id="classification">
	                            </div>
	                            <div class="form-group">
	                                <label>Biblioteca</label>
	                                <select class="form-control" name="library" id="library">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($library as $row): ?>
	                                        <option value="<?php echo $row->name_l; ?>"
	                                                name="<?php echo $row->name_l; ?>">
	                                                <?php echo $row->name_l; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Colección</label>
	                                <select class="form-control" name="collection" id="collection">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($collection as $row): ?>
	                                        <option value="<?php echo $row->name_c; ?>"
	                                                name="<?php echo $row->name_c; ?>">
	                                                <?php echo $row->name_c; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label>Instituto</label>
	                                <select class="form-control" name="institute" id="institute">
	                                    <option value="" disabled selected>Selecciona...</option>
	                                    <?php foreach($institute as $row): ?>
	                                        <option value="<?php echo $row->name_i; ?>"
	                                                name="<?php echo $row->name_i; ?>">
	                                                <?php echo $row->name_i; ?>
	                                        </option>
	                                    <?php endforeach; ?>
	                                </select>
	                            </div>
	                        </div>
	                        <!-- /.col-lg-4 (nested) -->

	                        <div class="col-lg-3">
	                                <label>Portada</label>

	                                <input type="file" accept="image/*" name="userfile" id="userfile" onchange="showMyImage(this)" value=""/>
	                                <br>
	                                <img id="thumbnil" name="thumbnil" style="height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;" src="" alt="">
	                        </div>
	                        <!-- /.col-lg-3 (nested) -->

	                    </div>
	                    <!-- /.row (nested) -->
	                </div>
	                <!-- /.modal-body (nested) -->

	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	                    <button type="submit" class="btn btn-primary" name="saveB" id="saveB">Guardar</button>
	                </div>

                </form>

            </div>
        </div>
    </div>
</div>