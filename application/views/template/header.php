<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>A. A. Sumitro - Dashboard</title>

        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/items/favicon.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Light Gallery Plugin Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        1<!-- Custom Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Tagsinput Css -->
        <link href="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Jquery Core Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Bootstrap Tags Input Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/node-waves/waves.js"></script>
         <!-- Light Gallery Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/light-gallery/js/lightgallery-all.js"></script>
        <!-- Jquery CountTo Plugin Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/jquery-countto/jquery.countTo.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/js/pages/medias/image-gallery.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/js/admin.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/js/pages/index.js"></script>
        <!-- Demo Js -->
        <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/js/demo.js"></script>

    </head>

    <body class="theme-blue-grey">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-blue-grey">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Asmith Dashboard</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a data-toggle="modal" data-target="#settingModal"><i class="material-icons waves-effect">settings</i></a></li>
                        <li><a href="<?php echo base_url();?>" target="_blank"><i class="material-icons">desktop_windows</i></a></li>
                        <li><a data-toggle="modal" data-target="#smallModal"><i class="material-icons waves-effect">input</i></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?php echo base_url();?>/assets/vendor/SBSMaterial/images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                                foreach ($users as $user) {
                                    if($id == $user['users_id']){
                                        echo $user['users_name'];
                                    }
                                }
                            ?>
                        </div>
                        <div class="email"><?php echo $email ?></div>
                    </div>
                </div>
                <!-- #User Info -->

                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="<?php echo ($activeTab=="home")?"active":""; ?>">
                            <a href="<?php echo base_url();?>dashboard">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="<?php echo ($activeTab=="message")?"active":""; ?>">
                            <a href="<?php echo base_url();?>dashboard/messages">
                                <i class="material-icons">forum</i>
                                <span>Message</span>
                            </a>
                        </li>
                        <li class="<?php echo ($activeTab=="article")?"active":""; ?>">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">text_fields</i>
                                <span>Article</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo ($activeTab2=="allPost")?"active":""; ?>">
                                    <a href="<?php echo base_url();?>dashboard/article">All article</a>
                                </li>
                                <li class="<?php echo ($activeTab2=="addPost")?"active":""; ?>">
                                    <a href="<?php echo base_url();?>dashboard/article/create">Add article</a>
                                </li>
                                <li  class="<?php echo ($activeTab2=="categories")?"active":""; ?>">
                                    <a href="<?php echo base_url();?>dashboard/article/categories">Categories</a>
                                </li>
                                <li class="<?php echo ($activeTab2=="tags")?"active":""; ?>" >
                                    <a href="<?php echo base_url();?>dashboard/article/tags">Tags</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo ($activeTab=="portfolio")?"active":""; ?>">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">business_center</i>
                                <span>Portfolio</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="<?php echo ($activeTab2=="allPort")?"active":""; ?>" >
                                    <a  href="<?php echo base_url();?>dashboard/portfolio">All portfolio</a>
                                </li>
                                <li class="<?php echo ($activeTab2=="addPort")?"active":""; ?>">
                                    <a  href="<?php echo base_url();?>dashboard/portfolio/create">Add portfolio</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo ($activeTab=="media")?"active":""; ?>">
                            <a href="<?php echo base_url();?>dashboard/media">
                                <i class="material-icons">perm_media</i>
                                <span>Media</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2017 <a href="<?php echo base_url();?>"> A. A. Sumitro </a>- Asmith Web.
                    </div>
                    <div class="version">
                        <b>Template: </b> AdminBSB - Material Design
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>

             <!-- Small Size modal -->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content modal-col-blue-grey">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Sing out</h4>
                        </div>
                        <div class="modal-body" >
                            Are you sure?
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-link waves-effect" href="<?php echo base_url(); ?>auth/logout">Let me out</a>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo form_open_multipart('admin/maintenance'); ?>
            <div class="modal fade" id="settingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="settingModalLabel">SETTINGS</h4>
                        </div>
                        <div class="modal-body" >
                            <div style="text-align:center">
                               <h4 style="margin-bottom:30px">SITE STATUS</h4>
                            </div>
                           <?php foreach ($users as $user) :?>
                                    <?php if($id == $user['users_id']) :?>

                                        <div class="switch" style="text-align:center; margin:0 0 15px 20px">
                                            <label>Active<input type="checkbox" name="siteStatus"
                                                <?php
                                                    $status = $user['maintenance_status'];
                                                    if($status == "Y") {
                                                        echo "checked";
                                                    }
                                                ?>>
                                            <span class="lever"></span>Maintenance</label>
                                        </div>

                                    <?php endif ?>
                           <?php endforeach ?>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link bg-red waves-effect" style="color:white">Save</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
