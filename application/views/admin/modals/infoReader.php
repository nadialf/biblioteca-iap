<!-- Modal edit reader -->
<?php foreach($reader as $row): ?>
<div class="modal fade" id='<?php echo 'INF'.$row->id_r; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel"><?php echo $row->name_r.' '.$row->last1_r; ?>&nbsp;
                        <a class='label label-success' data-dismiss="modal" data-toggle="modal" data-target='<?php echo '#UPD'.$row->id_r; ?>'>
                            <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                        </a> 
                        &nbsp;
                        <a class='label label-danger' onclick="elimina('<?=base_url()?>reader/deleteReader/<?=$row->id_r?>');">
                            <i class='glyphicon glyphicon-trash' title='Eliminar'></i>
                        </a>
                     </h4>
                </div>

                <form role="form" name="formInfR" id="formInfR" accept-charset="utf-8">

                    <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (s)</label>
                                    <input class="form-control" value="<?php echo $row->name_r; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Apellido paterno</label>
                                    <input class="form-control" value="<?php echo $row->last1_r; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Apellido materno</label>
                                    <input class="form-control" value="<?php echo $row->last2_r; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <input class="form-control" value="<?php echo $row->sex; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" value="<?php echo $row->phone; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" value="<?php echo $row->email; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <input class="form-control" value="<?php echo $row->notes_r; ?>" disabled>
                                </div>                                      
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <?php
                            $this->load->database('default');
                            $this->db->select();
                            $this->db->where('id_r', $row->id_r);
                            $this->db->from('address');
                            $query = $this->db->get();

                            if($query->num_rows() > 0){
                                foreach ($query->result() as $line) { ?>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Calle</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->street."' disabled>";
                                            echo $input; ?>                                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Número</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->number."' disabled>";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->location."' disabled>";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->state."' disabled>";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>CP</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->pc."' disabled>";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>País</label>
                                            <?php 
                                            $input = "<input class='form-control' value='".$line->country."' disabled>";
                                            echo $input; ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                <?php }
                            } else { ?>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Calle</label>
                                        <input class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Número</label>
                                        <input class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <input class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <input class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>CP</label>
                                        <input class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>País</label>
                                        <input class="form-control" disabled>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            <?php } ?>
                        </div>
                        
                        <!-- /.row (nested) -->
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