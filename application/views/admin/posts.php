<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
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
                <a class="navbar-brand" href="index.html">FINAL SISTEM INFORMASI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
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
                    <img src="<?php echo base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo site_url() ?>/admin/index">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/customer">
                            <i class="material-icons">layers</i>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/company">
                            <i class="material-icons">layers</i>
                            <span>Company</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/library">
                            <i class="material-icons">layers</i>
                            <span>Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/product">
                            <i class="material-icons">layers</i>
                            <span>Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/admin/post">
                            <i class="material-icons">layers</i>
                            <span>Post</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    IMAGE GALLERY
                    <small>Taken from <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">sachinchoolur.github.io/lightGallery</a></small>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERY
                                <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-1.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-2.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-3.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-4.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-5.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-6.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-7.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-8.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-9.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-10.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-11.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-12.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-13.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-14.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-15.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-16.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-17.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-18.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-19.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-20.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>assets/js/demo.js"></script>
</body>

</html>
