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

        <!-- MODAL ADD BOOK -->
        <?=$this->load->view('admin/modals/addReader');?>

        <!-- MODAL INFORMATION BOOK -->
        <?=$this->load->view('admin/modals/infoReader');?>

        <!-- MODAL INFORMATION BOOK -->
        <?=$this->load->view('admin/modals/editReader');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lectores</h1>

                    <a type="button" class="btn btn-success col-md-1" data-toggle="modal" data-target="#addReader" style="float:right;">
                        <i class="glyphicon glyphicon-plus"></i> Lector
                    </a>
                </div>
                <!-- /.col-lg-12 -->

            </div><br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todos los lectores
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Télefono</th>
                                            <th>E-mail</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach($reader as $row): ?>
                                            <tr style="cursor: pointer;" class="odd gradeX" data-toggle="modal" data-target='<?php echo '#INF'.$row->id_r; ?>'>
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $row->name_r.' '.$row->last1_r.' '.$row->last2_r; ?></td>
                                                <td><?php echo $row->phone; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td></td>
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

    <script src="<?php echo base_url() ?>css-admin/bower_components/jquery/dist/siteReader.js"></script>

    <script type="text/javascript">  
    function elimina(url){
        if (confirm("¿Está seguro que desea eliminar al lector? Se eliminará toda la información contenida acerca de dicho lector en el sistema.") ){
          location.href=url;
        }
    }
    </script>

    <script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        route: 'long_name',
        street_number: 'short_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        postal_code: 'short_name',
        country: 'long_name'
    };

    function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
        {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
    }

    // [START region_fillform]
    function fillInAddress() {
    // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
    // [END region_fillform]

    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                 autocomplete.setBounds(circle.getBounds());
            });
        }
    }
    // [END region_geolocation]
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeyQUKrAwe16IJwvkZCdVypD3ONhB5ZO4&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script>

</body>

</html>