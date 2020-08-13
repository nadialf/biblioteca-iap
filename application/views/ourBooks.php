<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nadia Libreros">

    <title>Biblioteca IAP</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php base_url() ?>css-user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php base_url() ?>css-user/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php base_url() ?>css-user/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>img/iconBIAP.png">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">
                    <i><img src="<?php echo base_url(); ?>img/iconUV.png"></i> Biblioteca IAP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="btn-lg" href="<?php echo base_url().'admin'; ?>"><i class="glyphicon glyphicon-user" title="Iniciar sesión"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Nuestros libros Section -->
    <section id="nuestros_libros" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Nuestros libros</h2>
                <p>En este portal proveemos, compartimos y difundimos los recursos informativos propios del instituto <b>para los especialistas y público en general</b>. Puedes consultar la base de datos completa de nuestra biblioteca dando clic <a href="" target="_blank"><b>aqu&iacute;</b></a>.
                
                <p>Tambi&eacute;n te recomendamos ingresar a los cat&aacute;logos diponibles de la <a href="http://www.uv.mx/bvirtual/" target="_blank"><b>Biblioteca Virtual</b></a> de la Universidad Veracruzana.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contacto Instituto de Artes Pl&aacute;sticas</h2>
                <p>No dudes en enviarnos un correo el&eacute;ctronico para proporcionarte informaci&oacute;n acerca
                de los libros de esta biblioteca, o cualquier tema relacionado al IAP.</p>
                <p><a href="#contact">xcozar@uv.mx</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="http://www.uv.mx/iap/" class="btn btn-default btn-lg" target="_blank"><img src="<?php echo base_url(); ?>img/iconUV.png"/><span class="network-name"> UV</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/institutoartesplasticas.uv" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-fw"></i><span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d939.9522590399455!2d-96.93141000716764!3d19.549810435636406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x762a28ae5c46575c!2sInstituto+de+Artes+Plasticas!5e0!3m2!1ses!2smx!4v1464977922671" width="100%" height="300" frameborder="0" style="border:0; margin-top: 100px;" allowfullscreen></iframe>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Biblioteca IAP 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php base_url() ?>css-user/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php base_url() ?>css-user/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php base_url() ?>css-user/js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php base_url() ?>css-user/js/grayscale.js"></script>

</body>

</html>