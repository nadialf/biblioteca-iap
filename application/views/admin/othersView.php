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
                    <h1 class="page-header">Otros</h1>

                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#myModalAddI" style="float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Instituto
                    </a>
                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#myModalAddC" style="margin-right:2px; float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Colecci&oacute;n
                    </a>
                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#myModalAddL" style="margin-right:2px; float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Biblioteca
                    </a>
                </div>
                <!-- /.col-lg-12 -->

                <!-- Modal add library -->
                <div class="modal fade" id="myModalAddL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Nueva biblioteca</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formL" id="formL" action="<?php echo base_url().'others/addLibrary' ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="library" id="library">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveL" id="saveL">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal edit library -->
                <?php foreach($library as $row): ?>
                <div class="modal fade" id='<?php echo 'L'.$row->id_l; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Editar biblioteca</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formL" id="formL" action="<?php echo base_url().'others/updateLibrary/'.$row->id_l ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="library" id="library" value="<?php echo $row->name_l; ?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveL" id="saveL">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Modal add collection -->
                <div class="modal fade" id="myModalAddC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Nueva colecci&oacute;n</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formC" id="formC" action="<?php echo base_url().'others/addCollection' ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="collection" id="collection">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveC" id="saveC">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal edit collection -->
                <?php foreach($collection as $row): ?>
                <div class="modal fade" id='<?php echo 'C'.$row->id_c; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Editar colecci&oacute;n</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formC" id="formC" action="<?php echo base_url().'others/updateCollection/'.$row->id_c ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="collection" id="collection" value="<?php echo $row->name_c; ?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveC" id="saveC">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Modal add institute -->
                <div class="modal fade" id="myModalAddI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Nuevo instituto</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formI" id="formI" action="<?php echo base_url().'others/addInstitute' ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="institute" id="institute">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveI" id="saveI">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal edit institute -->
                <?php foreach($institute as $row): ?>
                <div class="modal fade" id='<?php echo 'I'.$row->id_i; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="vertical-alignment-helper">
                        <div class="modal-admin vertical-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                                    </button>
                                     <h4 class="modal-title" id="myModalLabel">Editar instituto</h4>

                                </div>
                                <div class="modal-body">
                                    <form role="form" name="formI" id="formI" action="<?php echo base_url().'others/updateInstitute/'.$row->id_i ?>" method="post" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="institute" id="institute" value="<?php echo $row->name_i; ?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="saveI" id="saveI">Guardar cambios</button>
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
                            Bibliotecas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Biblioteca</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($library as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_l; ?></td>
                                                <td>
                                                    <a href='#' class='label label-success' data-toggle="modal" data-target='<?php echo '#L'.$row->id_l; ?>'>
                                                        <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                                                    </a> 
                                                    &nbsp;|
                                                    <a href='#' class='label label-danger' 
                                                    onclick="eliminaB('<?=base_url()?>others/deleteLibrary/<?=$row->id_l?>');">
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Colecciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Colecci&oacute;n</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($collection as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_c; ?></td>
                                                <td>
                                                    <a href='#' class='label label-success' data-toggle="modal" data-target='<?php echo '#C'.$row->id_c; ?>'>
                                                        <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                                                    </a> 
                                                    &nbsp;|
                                                    <a href='#' class='label label-danger' 
                                                    onclick="eliminaC('<?=base_url()?>others/deleteCollection/<?=$row->id_c?>');">
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Institutos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Instituto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($institute as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_i; ?></td>
                                                <td>
                                                    <a href='#' class='label label-success' data-toggle="modal" data-target='<?php echo '#I'.$row->id_i; ?>'>
                                                        <i class='glyphicon glyphicon-pencil' title='Editar'></i>
                                                    </a> 
                                                    &nbsp;|
                                                    <a href='#' class='label label-danger' 
                                                    onclick="eliminaI('<?=base_url()?>others/deleteInstitute/<?=$row->id_i?>');">
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

    <!--<script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery-ui.js"></script>-->

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

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteLibrary.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteCollection.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteInstitute.js"></script>

    <script type="text/javascript">  
    function eliminaB(url){
        if (confirm("¿Está seguro que desea eliminar la biblioteca? Se eliminará toda la información contenida acerca de dicha biblioteca en el sistema.") ){
          location.href=url;
        }
    }

    function eliminaC(url){
        if (confirm("¿Está seguro que desea eliminar la colección? Se eliminará toda la información contenida acerca de dicha colección en el sistema.") ){
          location.href=url;
        }
    }

    function eliminaI(url){
        if (confirm("¿Está seguro que desea eliminar el instituto? Se eliminará toda la información contenida acerca de dicho instituto en el sistema.") ){
          location.href=url;
        }
    }
    </script>

</body>

</html>