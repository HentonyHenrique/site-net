<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
    <!-- title -->
    <title>NET1 INFORMÁTICA</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('public/css/all.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('public/css/main.css'); ?>">

</head>

<body>

    <!-- header -->
    <div class="top-header-area">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        
                        <nav class="navbar navbar-expand-lg sticky-top navbar-light">
                        <div class="site-logo">
                            <a href="#">
                                <img src="https://i.ibb.co/kyNrCCJ/Logos.png" alt="Logos" border="0">
                            </a>
                        </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText" >
                                <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url('home'); ?>">Home</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url('downloads'); ?>">Downloads</a></li>
                                    <?php if (!$this->ion_auth->logged_in()) : ?>
                                        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url('login'); ?>">Login</a></li>
                                    <?php else : ?>
                                        <li class="nav-item"><a class="nav-link text-dark" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php echo base_url('public/js/jquery-1.11.3.min.js'); ?>"></script>
<!-- bootstrap -->
<script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- count down -->
<script src="<?php echo base_url('public/js/jquery.countdown.js'); ?>"></script>
<!-- isotope -->
<script src="<?php echo base_url('public/js/jquery.isotope-3.0.6.min.js'); ?>"></script>
<!-- waypoints -->
<script src="<?php echo base_url('public/js/waypoints.js'); ?>"></script>
<!-- owl carousel -->
<script src="<?php echo base_url('public/js/owl.carousel.min.js'); ?>"></script>
<!-- magnific popup -->
<script src="<?php echo base_url('public/js/jquery.magnific-popup.min.js'); ?>"></script>
<!-- mean menu -->
<script src="<?php echo base_url('public/js/jquery.meanmenu.min.js'); ?>"></script>
<!-- sticker js -->
<script src="<?php echo base_url('public/js/sticker.js'); ?>"></script>
<!-- main js -->
<script src="<?php echo base_url('public/js/main.js'); ?>"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.jqueryui.min.css">



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/datatables.min.css" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.6/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/sc-2.0.6/datatables.min.js"></script>


<script src="https://kit.fontawesome.com/3aa2e9ad9e.js" crossorigin="anonymous"></script>

</html>