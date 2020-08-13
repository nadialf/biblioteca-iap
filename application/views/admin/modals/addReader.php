<!-- Modal add reader -->
<div class="modal fade" id="addReader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-admin vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Nuevo lector</h4>
                </div>

                <form role="form" name="formR" id="formR" action="<?php echo base_url().'reader/addReader' ?>" method="post" accept-charset="utf-8">

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (s)</label>
                                    <input class="form-control" name="reader" id="reader">
                                </div>
                                <div class="form-group">
                                    <label>Apellido paterno</label>
                                    <input class="form-control" name="lastName1" id="lastName1">
                                </div>
                                <div class="form-group">
                                    <label>Apellido materno</label>
                                    <input class="form-control" name="lastName2" id="lastName2">
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sex" id="sex">
                                        <option>Femenino</option>
                                        <option>Masculino</option>
                                    </select>
                                </div>
                                <div class="form-group" id="locationField">
                                    <label>Dirección</label>
                                    <input class="form-control" name="autocomplete" id="autocomplete" onfocus="geolocate()" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Calle</label>
                                    <input class="form-control" name="route" id="route" disabled="true">
                                </div>
                                <div class="form-group">
                                    <label>Número</label>
                                    <input class="form-control" name="street_number" id="street_number" disabled="true">
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input class="form-control" name="locality" id="locality" disabled="true">
                                </div>
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input class="form-control" name="administrative_area_level_1" id="administrative_area_level_1" disabled="true">
                                </div>
                                <div class="form-group">
                                    <label>CP</label>
                                    <input class="form-control" name="postal_code" id="postal_code" disabled="true">
                                </div>
                                <div class="form-group">
                                    <label>País</label>
                                    <input class="form-control" name="country" id="country" disabled="true">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" name="phone" id="phone">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="mail" id="mail">
                                </div>
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <input class="form-control" name="notes" id="notes">
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="saveR" id="saveR">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>