<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A. A. Sumitro - Personal Pages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="Agus Adhi Sumitro Personal Page, Agus Adhi Sumitro blog, Agus Adhi Sumitro project, Agus Adhi Sumitro contact, web, mobile, blog, contact, project" />
    <meta name="author" content="Agus Adhi Sumitro" />

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/items/favicon.png">
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">    -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/AIR/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/AIR/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/AIR/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/AIR/css/flexslider.css">
    <!-- timeline -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timeline.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/AIR/css/style.css">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="<?php echo base_url(); ?>assets/vendor/AIR/js/modernizr-2.6.2.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body >

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="<?php echo base_url();?>">/.<span>SMIT</span></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="<?php echo ($activeTab=="index")?"active":""; ?>"><a href="<?php echo base_url();?>">Home</a></li>
                                <li class="has-dropdown <?php echo ($activeTab=="project")?"active":""; ?>">
                                    <a href="<?php echo base_url();?>project">Project</a>
                                    <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>project/mobile">Mobile</a></li>
                                            <li><a href="<?php echo base_url();?>project/web">Web</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown <?php echo ($activeTab=="blog")?"active":""; ?>">
                                    <a href="<?php echo base_url();?>blog">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url();?>categories/blow-mind">Blow mind</a></li>
                                        <li><a href="<?php echo base_url();?>categories/mobile">Mobile</a></li>
                                        <li><a href="<?php echo base_url();?>categories/web">Web</a></li>
                                    </ul>
                                </li>
                                <li class="<?php echo ($activeTab=="contact")?"active":""; ?>"><a href="<?php echo base_url();?>contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>