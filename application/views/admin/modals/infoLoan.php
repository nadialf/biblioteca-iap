<!-- Modal edit reader -->
<?php foreach($loan as $row): ?>
<div class="modal fade" id='<?php echo 'INF'.$row->id_ln; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel"><?php echo $row->name_r.' '.$row->last1_r; ?>&nbsp; <?php
                        if ($row->delivery == 'No'){ ?>
                            <a class='label label-success' data-dismiss="modal" data-toggle="modal" data-target='<?php echo '#UPD'.$row->id_ln; ?>'>
                                <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                            </a> 
                            &nbsp; <?php
                        } ?>
                        <a class='label label-danger' onclick="elimina('<?=base_url()?>loan/deleteLoan/<?=$row->id_ln?>');">
                            <i class='glyphicon glyphicon-trash' title='Eliminar'></i>
                        </a>
                     </h4>
                </div>

                <form role="form" name="formInfL" id="formInfL" accept-charset="utf-8">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre del lector</label>
                            <input class="form-control" value="<?php echo $row->name_r.' '.$row->last1_r.' '.$row->last2_r; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Título del libro</label>
                            <input class="form-control" value="<?php echo $row->title; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Fecha de préstamo</label>
                            <input class="form-control" type="date" value="<?php echo $row->start_date; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Fecha de devolución</label>
                            <input class="form-control" type="date" value="<?php echo $row->end_date; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Estado</label> <?php
                            if ($row->advance == 'Vencido' && $row->delivery == 'No') { ?>
                                <input class="form-control" style="color: #FF0000;" value="Vencido: Libro no entregado" disabled> <?php
                            } elseif ($row->advance == 'Vencido' && $row->delivery == 'Si') { ?>
                                <input class="form-control" style="color: #0000FF;" value="Vencido: Libro entregado" disabled> <?php
                            } elseif ($row->advance == 'Vigente' && $row->delivery == 'Si') { ?>
                                <input class="form-control" style="color: #0000FF;" value="Vigente: Libro entregado" disabled> <?php
                            } else { ?>
                                <input class="form-control" style="color: #31B404;" value="Vigente" disabled> <?php
                            } ?>
                        </div>
                        <div class="form-group">
                            <label>Tipo de credencial</label>
                            <input class="form-control" value="<?php echo $row->credential; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="2" disabled><?php echo $row->notes_l; ?></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>