<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"> <a class="logo" href="index.php"><b><!--This is dark logo icon--><img src="../plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.php">Basic Forms</a></li>
                                    <li><a href="form-layout.php">Form Layout</a></li>
                                    <li><a href="form-advanced.php">Form Addons</a></li>
                                    <li><a href="form-material-elements.php">Form Material</a></li>
                                    <li><a href="form-float-input.php">Form Float Input</a></li>
                                    <li><a href="form-upload.php">File Upload</a></li>
                                    <li><a href="form-mask.php">Form Mask</a></li>
                                    <li><a href="form-img-cropper.php">Image Cropping</a></li>
                                    <li><a href="form-validation.php">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.php">File Dropzone</a></li>
                                    <li><a href="form-pickers.php">Form-pickers</a></li>
                                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                                    <li><a href="form-wizard.php">Form-wizards</a></li>
                                    <li><a href="form-typehead.php">Typehead</a></li>
                                    <li><a href="form-xeditable.php">X-editable</a></li>
                                    <li><a href="form-summernote.php">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.php">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.php">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.php">Basic Tables</a></li>
                                    <li><a href="table-layouts.php">Table Layouts</a></li>
                                    <li><a href="data-table.php">Data Table</a></li>
                                    <li class="hidden"><a href="crud-table.php">Crud Table</a></li>
                                    <li><a href="bootstrap-tables.php">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.php">Responsive Tables</a></li>
                                    <li><a href="editable-tables.php">Editable Tables</a></li>
                                    <li><a href="foo-tables.php">FooTables</a></li>
                                    <li><a href="jsgrid.php">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.php">Flot Charts</a> </li>
                                    <li><a href="morris-chart.php">Morris Chart</a></li>
                                    <li><a href="chart-js.php">Chart-js</a></li>
                                    <li><a href="peity-chart.php">Peity Charts</a></li>
                                    <li><a href="knob-chart.php">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.php">Sparkline charts</a></li>
                                    <li><a href="extra-charts.php">Extra Charts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-12 m-t-40 demo-box">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-purple"><a href="../eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="../eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="../eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="../eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="../eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav><!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="index.php">Minimalistic</a> </li>
                    <li> <a href="index2.php">Demographical</a> </li>
                    <li> <a href="index3.php">Analitical</a> </li>
                    <li> <a href="index4.php">Simpler</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="../eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                    <li> <a href="../eliteadmin-crm/index.html">CRM Admin</a> </li>
                    <li> <a href="../eliteadmin-university/index.html">University Admin</a> </li>
                    <li> <a href="../eliteadmin-music/index.html">Music Admin</a> </li>
                    <li> <a href="../eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                    <li role="separator" class="divider"></li>
                    <li> <a href="../eliteadmin-inverse/index.html">Inverse</a></li>
                    <li> <a href="../eliteadmin-colors/index.html">Colors</a></li>
                    <li> <a href="../eliteadmin/index.html">Eliteadmin</a></li>
                    <li> <a href="../eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                    <li> <a href="../eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                    <li> <a href="../eliteadmin-modern/index.html">Modern</a></li>
                    <li> <a href="../eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                    <li> <a href="../eliteadmin-material/index3.html">Material Design</a></li>
                    <li> <a href="../eliteadmin-dark/index.html">Dark</a></li>
                    <li> <a href="../eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                    <li> <a href="../eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                    <li> <a href="../eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                    <li> <a href="../eliteadmin-iconbar/index4.html">Iconbar</a></li>
                    <li> <a href="../eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                    <li> <a href="../eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="panels-wells.html">Panels and Wells</a></li>
                    <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                    <li><a href="panel-draggable.html">Draggable Panel</a></li>
                    <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                    <li><a href="date-paginator.html">Date Paginator</a></li>
                    <li><a href="sweatalert.php">Sweat alert</a></li>
                    <li><a href="typography.php">Typography</a></li>
                    <li><a href="grid.php">Grid</a></li>
                    <li><a href="tabs.php">Tabs</a></li>
                    <li><a href="tab-stylish.php">Stylish Tabs</a></li>
                    <li><a href="modals.php">Modals</a></li>
                    <li><a href="progressbars.php">Progress Bars</a></li>
                    <li><a href="notification.php">Notifications</a></li>
                    <li><a href="carousel.php">Carousel</a></li>
                    <li><a href="list-style.php">List & Media object</a></li>
                    <li><a href="user-cards.php">User Cards</a></li>
                    <li><a href="timeline.php">Timeline</a></li>
                    <li><a href="timeline-horizontal.php">Horizontal Timeline</a></li>
                    <li><a href="nestable.php">Nesteble</a></li>
                    <li><a href="range-slider.php">Range Slider</a></li>
                    <li><a href="ribbons.html">Ribbons</a></li>
                    <li><a href="steps.html">Steps</a></li>
                    <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                    <li><a href="session-timeout.html">Session Timeout</a></li>
                    <li><a href="tooltip-stylish.php">Stylish Tooltip</a></li>
                    <li><a href="bootstrap.php">Bootstrap UI</a></li>
                </ul>
            </li>
            <li> <a href="forms.php" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="form-basic.php">Basic Forms</a></li>
                    <li><a href="form-layout.php">Form Layout</a></li>
                    <li><a href="form-advanced.php">Form Addons</a></li>
                    <li><a href="form-material-elements.php">Form Material</a></li>
                    <li><a href="form-float-input.php">Form Float Input</a></li>
                    <li><a href="form-upload.php">File Upload</a></li>
                    <li><a href="form-mask.php">Form Mask</a></li>
                    <li><a href="form-img-cropper.php">Image Cropping</a></li>
                    <li><a href="form-validation.php">Form Validation</a></li>
                    <li><a href="form-dropzone.php">File Dropzone</a></li>
                    <li><a href="form-pickers.php">Form-pickers</a></li>
                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                    <li><a href="form-wizard.php">Form-wizards</a></li>
                    <li><a href="form-typehead.php">Typehead</a></li>
                    <li><a href="form-xeditable.php">X-editable</a></li>
                    <li><a href="form-summernote.php">Summernote</a></li>
                    <li><a href="form-bootstrap-wysihtml5.php">Bootstrap wysihtml5</a></li>
                    <li><a href="form-tinymce-wysihtml5.php">Tinymce wysihtml5</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Proffessional</li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="starter-page.php">Starter Page</a></li>
                    <li><a href="blank.php">Blank Page</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="../email-templates/basic.php">Basic</a></li>
                            <li> <a href="../email-templates/alert.php">Alert</a></li>
                            <li> <a href="../email-templates/billing.php">Billing</a></li>
                            <li> <a href="../email-templates/password-reset.php">Reset Pwd</a></li>
                        </ul>
                    </li>
                    <li><a href="lightbox.php">Lightbox Popup</a></li>
                    <li><a href="treeview.php">Treeview</a></li>
                    <li><a href="search-result.php">Search Result</a></li>
                    <li><a href="utility-classes.php">Utility Classes</a></li>
                    <li><a href="custom-scroll.php">Custom Scrolls</a></li>
                    <li><a href="login.php">Login Page</a></li>
                    <li><a href="login2.php">Login v2</a></li>
                    <li><a href="animation.php">Animations</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="invoice.php">Invoice</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="register2.php">Register v2</a></li>
                    <li><a href="recoverpw.php">Recover Password</a></li>
                    <li><a href="lock-screen.php">Lock Screen</a></li>
                    <li><a href="400.php">Error 400</a></li>
                    <li><a href="403.php">Error 403</a></li>
                    <li><a href="404.php">Error 404</a></li>
                    <li><a href="500.php">Error 500</a></li>
                    <li><a href="503.php">Error 503</a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="flot.php">Flot Charts</a> </li>
                    <li><a href="morris-chart.php">Morris Chart</a></li>
                    <li><a href="chart-js.php">Chart-js</a></li>
                    <li><a href="peity-chart.php">Peity Charts</a></li>
                    <li><a href="knob-chart.php">Knob Charts</a></li>
                    <li><a href="sparkline-chart.php">Sparkline charts</a></li>
                    <li><a href="extra-charts.php">Extra Charts</a></li>
                </ul>
            </li>
            <li> <a href="tables.php" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="basic-table.php">Basic Tables</a></li>
                    <li><a href="table-layouts.php">Table Layouts</a></li>
                    <li><a href="data-table.php">Data Table</a></li>
                    <li class="hidden"><a href="crud-table.php">Crud Table</a></li>
                    <li><a href="bootstrap-tables.php">Bootstrap Tables</a></li>
                    <li><a href="responsive-tables.php">Responsive Tables</a></li>
                    <li><a href="editable-tables.php">Editable Tables</a></li>
                    <li><a href="foo-tables.php">FooTables</a></li>
                    <li><a href="jsgrid.php">JsGrid Tables</a></li>
                </ul>
            </li>
            <li> <a href="widgets.php" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
            <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="fontawesome.php">Font awesome</a> </li>
                    <li> <a href="themifyicon.php">Themify Icons</a> </li>
                    <li> <a href="simple-line.php">Simple line Icons</a> </li>
                    <li><a href="linea-icon.php">Linea Icons</a></li>
                    <li><a href="weather.php">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="inbox.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">New</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="chat.php">Chat-message</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="inbox.php">Mail box</a></li>
                            <li> <a href="inbox-detail.php">Inbox detail</a></li>
                            <li> <a href="compose.php">Compose mail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="contact.php">Contact1</a></li>
                            <li> <a href="contact2.php">Contact2</a></li>
                            <li> <a href="contact-detail.php">Contact Detail</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="map-google.php" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
            <li> <a href="map-vector.php" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
            <li> <a href="calendar.php" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="login.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
            <li class="nav-small-cap">--- Support</li>
            <li><a href="documentation.php" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
            <li><a href="gallery.php" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
            <li><a href="faq.php" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Utility Classes</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb"><li><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse-php/index.php">Dashboard</a></li><li class="active">Utility classes</li></ol>                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <!-- .row -->
                        <div class="row">
                            <!-- .col -->
                            <div class="col-sm-6">
                                <h3 class="box-title">Float Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap" width="150">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.pull-left</code> </td>
                                            <td>Element to the left (float:left).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.pull-right</code> </td>
                                            <td>Element to the right(float:right).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.clearfix</code> </td>
                                            <td>To Clear floats.(clreafix)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap" width="150">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.show</code> </td>
                                            <td>Element to Show (display: block)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.hidden</code> </td>
                                            <td>Element to hide (display: none)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-6">
                                <h3 class="box-title">Text Color Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-muted</code> </td>
                                            <td class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-primary</code> </td>
                                            <td class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-success</code> </td>
                                            <td class="text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-info</code> </td>
                                            <td class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-warning</code> </td>
                                            <td class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-danger</code> </td>
                                            <td class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-0</code> </td>
                                            <td>Padding will be 0px from all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-10</code> </td>
                                            <td>Padding will be 10px from all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-20</code> </td>
                                            <td>Padding will be 20px from all side</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding Left Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-0</code> </td>
                                            <td>Only Padding Left will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-10 </code> </td>
                                            <td>Only Padding Left will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-20</code> </td>
                                            <td>Only Padding Left will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding right Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-0</code> </td>
                                            <td>Only Padding right will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-10 </code> </td>
                                            <td>Only Padding right will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-20</code> </td>
                                            <td>Only Padding right will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding top Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-0</code> </td>
                                            <td>Only Padding top will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-10 </code> </td>
                                            <td>Only Padding top will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-20</code> </td>
                                            <td>Only Padding top will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin top Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-5</code> </td>
                                            <td>Only Margin top will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-10 </code> </td>
                                            <td>Only Margin top will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-15 </code> </td>
                                            <td>Only Margin top will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-20</code> </td>
                                            <td>Only Margin top will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-30</code> </td>
                                            <td>Only Margin top will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                            <td>Only Margin top will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Bottom Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-5</code> </td>
                                            <td>Only Margin Bottom will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-10 </code> </td>
                                            <td>Only Margin Bottom will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-15 </code> </td>
                                            <td>Only Margin Bottom will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-20</code> </td>
                                            <td>Only Margin Bottom will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-30</code> </td>
                                            <td>Only Margin Bottom will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                            <td>Only Margin top will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Right Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-5</code> </td>
                                            <td>Only Margin Right will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-10 </code> </td>
                                            <td>Only Margin Right will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-15 </code> </td>
                                            <td>Only Margin Right will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-20</code> </td>
                                            <td>Only Margin Right will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-30</code> </td>
                                            <td>Only Margin Right will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-40</code> </td>
                                            <td>Only Margin Right will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Left Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-5</code> </td>
                                            <td>Only Margin Left will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-10 </code> </td>
                                            <td>Only Margin Left will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-15 </code> </td>
                                            <td>Only Margin Left will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-20</code> </td>
                                            <td>Only Margin Left will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-30</code> </td>
                                            <td>Only Margin Left will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-40</code> </td>
                                            <td>Only Margin Left will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Vertical Align</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vt</code> </td>
                                            <td>Element - vertical align top.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vb</code> </td>
                                            <td>Element - vertical align bottom.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vertical-middle </code> </td>
                                            <td>Element - vertical align middle.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Font Weight</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-light</code> </td>
                                            <td>Font weight will be light (300).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-normal</code> </td>
                                            <td>Font weight will be normal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-bold </code> </td>
                                            <td>Font weight will be bold (700)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Border</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-all</code> </td>
                                            <td>Border 1px all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-none</code> </td>
                                            <td>border none all side</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-t </code> </td>
                                            <td>border top 1px </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-b</code> </td>
                                            <td>Border bottom 1px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-l</code> </td>
                                            <td>border left 1px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-r</code> </td>
                                            <td>border right 1px </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped responsive-utilities">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
                                                <th> Small devices <small>Tablets (≥768px)</small> </th>
                                                <th> Medium devices <small>Desktops (≥992px)</small> </th>
                                                <th> Large devices <small>Desktops (≥1200px)</small> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><code>.visible-xs-*</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-sm-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-md-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-lg-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><code>.hidden-xs</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-sm</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-md</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-lg</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">Background Colors</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-primary</code> </td>
                                            <td>For Primary background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-success</code> </td>
                                            <td>For Success (green) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-info</code> </td>
                                            <td>For info (Blue) background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-warning</code> </td>
                                            <td>For Warning (yellow) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-danger</code> </td>
                                            <td>For Danger (red) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-theme</code> </td>
                                            <td>For Theme background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-theme-dark</code> </td>
                                            <td>For theme dark background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-inverse </code> </td>
                                            <td>For inverse (dark) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-purple</code> </td>
                                            <td>For Purple background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul>
                        <li><b>Layout Options</b></li>
                        <li>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox1" type="checkbox" class="fxhdr">
                                <label for="checkbox1"> Fix Header </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox" class="open-close">
                                <label for="checkbox4"> Toggle Sidebar </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox2" type="checkbox" class="fxsdr">
                                <label for="checkbox2"> Fix Sidebar </label>
                            </div>
                        </li>
                    </ul>
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                        <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                        <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                        <li><b>With Dark sidebar</b></li>
                        <br/>
                        <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>