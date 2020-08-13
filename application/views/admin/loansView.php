<!-- Librerias -->
<?=$this->load->view('admin/headers/libraries');?>

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>css-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>css-admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?=$this->load->view('admin/headers/navigation');?>

        <!-- MODAL INFORMATION LOAN -->
        <?=$this->load->view('admin/modals/infoLoan');?>

        <!-- MODAL INFORMATION LOAN -->
        <?=$this->load->view('admin/modals/addLoan');?>

        <!-- MODAL EDIT LOAN -->
        <?=$this->load->view('admin/modals/editLoan');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Préstamos</h1>

                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#addLoan" style="float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Préstamo
                    </a>
                </div>
                <!-- /.col-lg-12 -->

            </div><br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todos los préstamos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lector</th>
                                            <th>Libro</th>
                                            <th>Fecha de préstamo</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($loans as $row): ?>
                                            <tr style="cursor: pointer;" class="odd gradeX" data-toggle="modal" data-target='<?php echo '#INF'.$row->id_ln; ?>'>
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_r.' '.$row->last1_r; ?></td>
                                                <td><?php echo $row->title; ?></td>
                                                <td><?php $date = new DateTime($row->start_date); echo $date->format('d/m/Y'); ?></td>
                                                <td><?php if ($row->advance == 'Vencido' && $row->delivery == 'No') {
                                                        echo "<span style='color: #FF0000'>Vencido: Libro no entregado</span>";
                                                    } elseif ($row->advance == 'Vencido' && $row->delivery == 'Si') {
                                                        echo "<span style='color: #0000FF'>Vencido: Libro entregado</span>";
                                                    } elseif ($row->advance == 'Vigente' && $row->delivery == 'Si') {
                                                        echo "<span style='color: #0000FF'>Vigente: Libro entregado</span>";
                                                    } else {
                                                        echo "<span style='color: #31B404'>Vigente</span>";
                                                        } ?>
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

    <script type="text/javascript">  
    function elimina(url){
        if (confirm("¿Está seguro que desea eliminar el préstamo? Se eliminará toda la información contenida acerca de dicho préstamo en el sistema. \n \n En caso de que la prestación seleccionada informe que el estado del libro no ha sido entregado, el sistema tomará por hecho que éste ha sido devuelto a la biblioteca. ") ){
          location.href=url;
        }
    }
    </script>

</body>

</html>