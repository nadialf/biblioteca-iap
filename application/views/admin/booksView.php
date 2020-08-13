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

        <!-- MODAL ADD BOOK -->
        <?=$this->load->view('admin/modals/addBook');?>

        <!-- MODAL ADD AUTHOR. EDITORIAL, GENRE -->
        <?=$this->load->view('admin/modals/addAEG');?>

        <!-- MODAL INFORMATION BOOK -->
        <?=$this->load->view('admin/modals/infoBook');?>

        <!-- MODAL INFORMATION BOOK -->
        <?=$this->load->view('admin/modals/editBook');?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Libros</h1>

                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#addEditorial" style="float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Editorial
                    </a>
                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#addAuthor" style="margin-right:2px; float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Autor
                    </a>
                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#addBook" style="margin-right:2px; float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Libro
                    </a>
                </div>
                <!-- /.col-lg-12 -->

            </div><br>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todos los libros
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Clasificaci&oacute;n / No. Inv. UV</th>
                                            <th>Titulo</th>
                                            <th>Autor</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($book as $row): ?>
                                            <tr style="cursor: pointer;" class="odd gradeX" data-toggle="modal" data-target='<?php echo '#INF'.$row->id_b; ?>'> 
                                                    <td><?php echo $row->id_b; ?></td>
                                                    <td><?php echo $row->classification; ?></td>
                                                    <td><?php echo $row->title; ?></td>
                                                    <td><?php echo $row->name_a.' '.$row->last1_a; ?></td>
                                                    <td><?php
                                                    if($row->copy == $row->copy_loan) {
                                                        echo "<span style='color: #FF0000'>En préstamo</span>";
                                                      } else {
                                                        echo "<span style='color: #31B404'>Disponible</span>";
                                                      }
                                                    ?>    
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

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/jquery.validate.js"></script>
    
    <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.js"></script> -->
    
    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteBook.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteAuthor.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteEditorial.js"></script>

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteGenre.js"></script>

    <script type="text/javascript">  
    function elimina(url){
        if (confirm("¿Está seguro que desea eliminar el libro? Se eliminará toda la información contenida acerca de dicho libro en el sistema.") ){
          location.href=url;
        }
    }
    </script>

    <script type="text/javascript">
    function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }   
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
    </script>

    <script type="text/javascript">
        function showMyImage2(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {           
                var file = files[i];
                var imageType = /image.*/;     
                if (!file.type.match(imageType)) {
                    continue;
                }   
                var img=document.getElementById("thumbnil2");            
                img.file = file;    
                var reader = new FileReader();
                reader.onload = (function(aImg) { 
                    return function(e) { 
                        aImg.src = e.target.result; 
                    }; 
                })(img);
                reader.readAsDataURL(file);
            }    
        }
    </script>

    <script type="text/javascript">
    function showMyImage3(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }   
            var img=document.getElementById("thumbnil3");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
    </script>

    <!--<script type="text/javascript">
        function initialize() {
            var input = document.getElementById('searchTextField');

            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>-->

</body>

</html>