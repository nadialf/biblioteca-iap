<!-- Librerias -->
<?=$this->load->view('admin/headers/libraries');?>

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>css-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>css-admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery-ui.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?=$this->load->view('admin/headers/navigation');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editoriales</h1>

                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#myModalAdd" style="float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Editorial
                    </a>
                </div>
                <!-- /.col-lg-12 -->

                <!-- Modal add editorial -->
                <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Nueva editorial</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formE" id="formE" action="<?php echo base_url().'editorial/addEditorial' ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="editorial" id="editorial">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveE" id="saveE">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal edit editorial -->
                <?php foreach($editorial as $row): ?>
                <div class="modal fade" id='<?php echo $row->id_e; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Editar editorial</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formE" id="formE" action="<?php echo base_url().'editorial/updateEditorial/'.$row->id_e ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="editorial" id="editorial" value="<?php echo $row->name_e; ?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveE" id="saveE">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div><br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todas las editoriales
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre editorial</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($editorial as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_e; ?></td>
                                                <td>
                                                    <a href='#' class='label label-success' data-toggle="modal" data-target='<?php echo '#'.$row->id_e; ?>'>
                                                        <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                                                    </a> 
                                                    &nbsp;|
                                                    <a href='#' class='label label-danger' 
                                                    onclick="elimina('<?=base_url()?>editorial/deleteEditorial/<?=$row->id_e?>');">
                                                        <i class='glyphicon glyphicon-trash' title='Eliminar'></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>css-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery-ui.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>css-admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url() ?>css-admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>css-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>css-admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery.validate.js"></script>
    
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteEditorial.js"></script>

    <script type="text/javascript">
    
    function elimina(url){
        if (confirm("¿Está seguro que desea eliminar la editorial? Se eliminará toda la información contenida acerca de dicha editorial.") ){
          location.href=url;
        }
    }
    
    function edita(url){
        location.href=url;
    }
    
    </script>

</body>

</html>