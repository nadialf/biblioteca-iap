<!-- Modal edit reader -->
<?php foreach($reader as $row): ?>
<div class="modal fade" id='<?php echo 'UPD'.$row->id_r; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel"><?php echo $row->name_r.' '.$row->last1_r; ?></h4>
                </div>

                <form role="form" name="formR" id="formR" action="<?php echo base_url().'reader/updateReader/'.$row->id_r ?>" method="post" accept-charset="utf-8">

                    <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (s)</label>
                                    <input class="form-control" name="reader" id="reader" value="<?php echo $row->name_r; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Apellido paterno</label>
                                    <input class="form-control" name="lastName1" id="lastName1" value="<?php echo $row->last1_r; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Apellido materno</label>
                                    <input class="form-control" name="lastName2" id="lastName2" value="<?php echo $row->last2_r; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sex" id="sex">
                                        <option><?php echo $row->sex; ?></option>
                                        <option>Femenino</option>
                                        <option>Masculino</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" name="phone" id="phone" value="<?php echo $row->phone; ?>">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="mail" id="mail" value="<?php echo $row->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <input class="form-control" name="notes" id="notes" value="<?php echo $row->notes_r; ?>">
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
                                            $input = "<input class='form-control' name='route' id='route' value='".$line->street."' >";
                                            echo $input; ?>                                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Número</label>
                                            <?php 
                                            $input = "<input class='form-control' name='street_number' id='street_number' value='".$line->number."' >";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <?php 
                                            $input = "<input class='form-control' name='locality' id='locality' value='".$line->location."' >";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <?php 
                                            $input = "<input class='form-control' name='administrative_area_level_1' id='administrative_area_level_1' value='".$line->state."' >";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>CP</label>
                                            <?php 
                                            $input = "<input class='form-control' name='postal_code' id='postal_code' value='".$line->pc."' >";
                                            echo $input; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>País</label>
                                            <?php 
                                            $input = "<input class='form-control' name='country' id='country' value='".$line->country."' >";
                                            echo $input; ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                <?php }
                            } else { ?>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Calle</label>
                                        <input class="form-control" name="route" id="route">
                                    </div>
                                    <div class="form-group">
                                        <label>Número</label>
                                        <input class="form-control" name="street_number" id="street_number">
                                    </div>
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <input class="form-control" name="locality" id="locality">
                                    </div>
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <input class="form-control" name="administrative_area_level_1" id="administrative_area_level_1">
                                    </div>
                                    <div class="form-group">
                                        <label>CP</label>
                                        <input class="form-control" name="postal_code" id="postal_code">
                                    </div>
                                    <div class="form-group">
                                        <label>País</label>
                                        <input class="form-control" name="country" id="country">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            <?php } ?>
                        </div>
                        
                        <!-- /.row (nested) -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveR" id="saveR">Guardar cambios</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>