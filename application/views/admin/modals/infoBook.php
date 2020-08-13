<?php foreach($exemplar as $row): ?>
<div class="modal fade" id='<?php echo 'INF'.$row->id_b; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content" style="width: 1050px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel"><?php echo $row->title; ?>&nbsp;
                        <a class='label label-success' data-dismiss="modal" data-toggle="modal" data-target='<?php echo '#UPD'.$row->id_b; ?>'>
                            <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                        </a> 
                        &nbsp;
                        <a class='label label-danger' onclick="elimina('<?=base_url()?>book/deleteBook/<?=$row->id_b?>');">
                            <i class='glyphicon glyphicon-trash' title='Eliminar'></i>
                        </a>
                     </h4>
                </div>

                <form role="form" name="formInfB" id="formInfB" accept-charset="utf-8">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Folio</label>
                                    <input class="form-control" value="<?php echo $row->id_b; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>T&iacute;tulo</label>
                                    <input class="form-control" value="<?php echo $row->title; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Autor</label>
                                    <input class="form-control" value="<?php echo $row->name_a.' '.$row->last1_a; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Número de edición</label>
                                    <input class="form-control" value="<?php echo $row->edition; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Editorial</label>
                                    <input class="form-control" value="<?php echo $row->name_e; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Año de publicaci&oacute;n</label>
                                    <input class="form-control" value="<?php echo $row->release_year; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Lugar de publicaci&oacute;n</label>
                                    <input class="form-control" value="<?php echo $row->place; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tema</label>
                                    <input class="form-control" value="<?php echo $row->name_g; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Idioma</label>
                                    <input class="form-control" value="<?php echo $row->language; ?>" disabled>
                                </div>
                            </div>
                            <!-- /.col-lg-5 (nested) -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>No. de p&aacute;ginas</label>
                                    <input class="form-control" value="<?php echo $row->pages; ?>" disabled>
                                </div> 
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea class="form-control" rows="4" disabled><?php echo $row->description; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" rows="2" disabled><?php echo $row->notes_b; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Copias</label>
                                    <input class="form-control" value="<?php echo $row->copy; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Clasificación</label>
                                    <input class="form-control" value="<?php echo $row->classification; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Biblioteca</label>
                                    <input class="form-control" value="<?php echo $row->name_l; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Colección</label>
                                    <input class="form-control" value="<?php echo $row->name_c; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Instituto</label>
                                    <input class="form-control" value="<?php echo $row->name_i; ?>" disabled>
                                </div>
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-lg-3"> <?php
                                if ($row->cover == '0' || $row->cover == '') { ?>
                                    <div class="form-group">
                                        <label>Portada</label>
                                        <br>
                                        <?php
                                        echo "<img src='".base_url()."img/covers/noCover.jpg' style='height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;'>"; ?>
                                    </div> <?php 
                                } else { ?>
                                        <div class="form-group">
                                            <label>Portada</label>
                                            <br>
                                            <?php
                                            echo "<img src='".base_url().$row->cover."' style='height:300px;margin-top:10px;margin-bottom:10px;margin-right:5px;'>"; ?>
                                        </div> <?php
                                } ?>
                            </div>
                            <!-- /.col-lg-3 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.moadal-body (nested) -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>