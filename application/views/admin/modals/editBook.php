<?php foreach($exemplar as $row): ?>
<div class="modal fade" id='<?php echo 'UPD'.$row->id_b; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content" style="width: 1050px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel"><?php echo $row->title; ?></h4>
                </div>

                <form role="form" name="formB" id="formB" action="<?php echo base_url().'book/updateBook/'.$row->id_b ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Folio</label>
                                    <input class="form-control" name="folio" id="folio" value="<?php echo $row->id_b; ?>">
                                </div>
                                <div class="form-group">
                                    <label>T&iacute;tulo</label>
                                    <input class="form-control" name="title" id="title" value="<?php echo $row->title; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Autor</label>
                                    <select class="form-control" name="author" id="author">
                                        <option value="<?php echo $row->name_a.' '.$row->last1_a; ?>" 
                                                name="<?php echo $row->name_a.' '.$row->last1_a; ?>" selected>
                                                <?php echo $row->name_a.' '.$row->last1_a; ?>
                                        </option>
                                        <option value="" disabled>Selecciona...</option>
                                        <?php foreach($author as $line): ?>
                                            <option value="<?php echo $line->name_a.' '.$line->last1_a; ?>"
                                                    name="<?php echo $line->name_a.' '.$line->last1_a; ?>">
                                                    <?php echo $line->name_a.' '.$line->last1_a; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Número de edición</label>
                                    <input class="form-control" name="number" id="number" value="<?php echo $row->edition; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Editorial</label>
                                    <select class="form-control" name="editorial" id="editorial">
                                        <option value="<?php echo $row->name_e; ?>" name="<?php echo $row->name_e; ?>"        selected>
                                                <?php echo $row->name_e; ?>
                                        </option>
                                        <option value="" disabled >Selecciona...</option>
                                        <?php foreach($editorial as $line): ?>
                                            <option value="<?php echo $line->name_e; ?>"
                                                    name="<?php echo $line->name_e; ?>">
                                                    <?php echo $line->name_e; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Año de publicaci&oacute;n</label>
                                    <input class="form-control" name="year" id="year" value="<?php echo $row->release_year; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Lugar de publicaci&oacute;n</label>
                                    <input class="form-control" name="place" id="place" value="<?php echo $row->place; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tema</label>
                                    <select class="form-control" name="genre" id="genre">
                                        <option value="<?php echo $row->name_g; ?>" name="<?php echo $row->name_g; ?>" selected>
                                                <?php echo $row->name_g; ?>                              
                                        </option>
                                        <option value="" disabled>Selecciona...</option>
                                        <?php foreach($genre as $line): ?>
                                            <option value="<?php echo $line->name_g; ?>"
                                                    name="<?php echo $line->name_g; ?>">
                                                    <?php echo $line->name_g; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Idioma</label>
                                    <input class="form-control" name="language" id="language" value="<?php echo $row->language; ?>">
                                </div>
                            </div>
                            <!-- /.col-lg-5 (nested) -->

                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>No. de p&aacute;ginas</label>
                                        <input class="form-control" name="pages" id="pages" value="<?php echo $row->pages; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" name="description" id="description" rows="4"><?php echo $row->description; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <textarea class="form-control" name="notes" id="notes" rows="2"><?php echo $row->notes_b; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Copias</label>
                                        <input class="form-control" name="copy" id="copy" value="<?php echo $row->copy; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Clasificación</label>
                                        <input class="form-control" name="classification" id="classification" value="<?php echo $row->classification; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Biblioteca</label>
                                        <select class="form-control" name="library" id="library">
                                            <option value="<?php echo $row->name_l; ?>" name="<?php echo $row->name_l;    ?>" selected>
                                                    <?php echo $row->name_l; ?>
                                            </option>
                                            <option value="" disabled>Selecciona...</option>
                                            <?php foreach($library as $line): ?>
                                                <option value="<?php echo $line->name_l; ?>"
                                                        name="<?php echo $line->name_l; ?>">
                                                        <?php echo $line->name_l; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Colección</label>
                                        <select class="form-control" name="collection" id="collection">
                                            <option value="<?php echo $row->name_c; ?>" name="<?php echo $row->name_c;         ?>" selected>
                                                        <?php echo $row->name_c; ?>                                 
                                            </option>
                                            <option value="" disabled>Selecciona...</option>
                                            <?php foreach($collection as $line): ?>
                                                <option value="<?php echo $line->name_c; ?>"
                                                        name="<?php echo $line->name_c; ?>">
                                                        <?php echo $line->name_c; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Instituto</label>
                                        <select class="form-control" name="institute" id="institute">
                                            <option value="<?php echo $row->name_i; ?>" name="<?php echo $row->name_i;         ?>" selected>
                                                        <?php echo $row->name_i; ?>s
                                            </option>
                                            <option value="" disabled>Selecciona...</option>
                                            <?php foreach($institute as $line): ?>
                                                <option value="<?php echo $line->name_i; ?>"
                                                        name="<?php echo $line->name_i; ?>">
                                                        <?php echo $line->name_i; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                            </div>
                            <!-- /.col-lg-4 (nested) -->

                            <div class="col-lg-3"><?php
                            if ($row->cover == '0' || $row->cover == '') { ?>
                                <label>Portada</label>

                                <input type="file" accept="image/*" name="userfile" id="userfile" onchange="showMyImage2(this)" value=""/>
                                <br>
                                <img id="thumbnil2" name="thumbnil2" style="height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;" src="" alt=""> <?php 
                            } else { ?>
                                <label>Portada</label>
                                <br> <?php
                                echo "<img src='".base_url().$row->cover."' style='height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;'>"; ?>
                                <br><br>
                                <p>Seleccionar nueva portada</p>

                                <input type="file" accept="image/*" name="userfile" id="userfile" onchange="showMyImage3(this)" value=""/>
                                <br>
                                <img id="thumbnil3" name="thumbnil3" style="height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;" src="" alt=""><?php
                            } ?>
                            </div>
                            <!-- /.col-lg-3 (nested) -->

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.modal-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveB" id="saveB">Guardar cambios</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- MODAL EDIT BOOK END -->