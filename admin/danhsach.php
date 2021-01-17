<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ADMIN HALOTRIP</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
            });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.min.css">
        
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/last_logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="db-default.html" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="assets/img/logo-big-halotrip.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="assets/img/logo-header.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            <!-- Search -->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                            <!-- End Search -->
                            <!-- Begin Notifications -->
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                    <li>
                                        <div class="notifications-header">
                                            <div class="title">Notifications (4)</div>
                                            <div class="notifications-overlay"></div>
                                            <img src="assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New user registered
                                                </div>
                                                <span class="date">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New event added
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-history"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Server rebooted
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-twitter"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    You have 3 new followers
                                                </div>
                                                <span class="date">10 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Notifications -->
                            <!-- User -->
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="assets/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                        <img src="assets/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                                    </li>
                                    <li>
                                        <a href="pages-profile.html" class="dropdown-item"> 
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app-mail.html" class="dropdown-item"> 
                                            Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item no-padding-bottom"> 
                                            Settings
                                        </a>
                                    </li>
                                    <li class="separator"></li>
                                    <li>
                                        <a href="pages-faq.html" class="dropdown-item no-padding-top"> 
                                            Faq
                                        </a>
                                    </li>
                                    <li><a rel="nofollow" href="pages-login.html" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <span class="heading">Components</span>
                        <ul class="list-unstyled">
                            <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la la-share-alt"></i><span>UI Elements</span></a>
                                <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                                    <li><a href="components-buttons.html">Buttons</a></li>
                                    <li><a href="components-alerts.html">Alerts</a></li>
                                    <li><a href="components-modal.html">Modal</a></li>
                                    <li><a href="components-notifications.html">Noty</a></li>
                                    <li><a href="components-timeline.html">Timeline</a></li>
                                    <li><a href="components-progress.html">Progress</a></li>
                                    <li><a href="components-tabs.html">Tabs</a></li>
                                    <li><a href="components-charts.html">Chart Js</a></li>
                                    <li><a href="components-accordion.html">Accordion</a></li>
                                    <li><a href="components-popover.html">Popover</a></li>
                                    <li><a href="components-tooltip.html">Tooltip</a></li>
                                    <li><a href="components-scrollable.html">Scrollable</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i class="la la-font"></i><span>Icons</span></a>
                                <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                                    <li><a href="icons-lineawesome.html">Line Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-ionicons.html">Ionicons</a></li>
                                    <li><a href="icons-meteocons.html">Meteocons</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-forms" aria-expanded="false" data-toggle="collapse"><i class="la la-list-alt"></i><span>Forms</span></a>
                                <ul id="dropdown-forms" class="collapse list-unstyled pt-0">
                                    <li><a href="forms-basic.html">Form Basic</a></li>
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-select.html">Bootstrap Select</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i class="la la-th-large"></i><span>Tables</span></a>
                                <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatables.html">Datatables</a></li>
                                    <li><a href="tables-tabledit.html">Tabledit</a></li>
                                </ul>
                            </li>
                            <li><a href="maps-leaflet.html"><i class="la la-map"></i><span>Maps</span></a></li>
                        </ul>
                        <span class="heading">Pages</span>
                        <ul class="list-unstyled">
                            <li><a href="#dropdown-authentication" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>Authentication</span></a>
                                <ul id="dropdown-authentication" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-login-02.html">Login 02</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-mail-confirm.html">Mail Confirmation</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-generic" aria-expanded="false" data-toggle="collapse"><i class="la la-file-text"></i><span>Generic</span></a>
                                <ul id="dropdown-generic" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="pages-profile.html">Profile</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-search.html">Search</a></li>
                                    <li><a href="pages-faq.html">FAQ</a></li>
                                    <li><a href="pages-blank.html">Blank</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-social" aria-expanded="false" data-toggle="collapse"><i class="la la-comments"></i><span>Social</span></a>
                                <ul id="dropdown-social" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-newsfeed.html">Newsfeed</a></li>
                                    <li><a href="pages-about.html">About</a></li>
                                    <li><a href="pages-events.html">Events</a></li>
                                    <li><a href="pages-friends.html">Friends</a></li>
                                    <li><a href="pages-groups.html">Groups</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-email" aria-expanded="false" data-toggle="collapse"><i class="la la-at"></i><span>Email</span></a>
                                <ul id="dropdown-email" class="collapse list-unstyled pt-0">
                                    <li><a href="email-welcome.html">Welcome</a></li>
                                    <li><a href="email-password.html">Reset Password</a></li>
                                    <li><a href="email-order.html">Order Confirmation</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-pricing" aria-expanded="false" data-toggle="collapse"><i class="la la-usd"></i><span>Pricing</span></a>
                                <ul id="dropdown-pricing" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-pricing-tables-01.html">Style 01</a></li>
                                    <li><a href="pages-pricing-tables-02.html">Style 02</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-error" aria-expanded="false" data-toggle="collapse"><i class="la la-exclamation-triangle"></i><span>Errors</span></a>
                                <ul id="dropdown-error" class="collapse list-unstyled pt-0">
                                    <li><a href="pages-404-01.html">Style 01</a></li>
                                    <li><a href="pages-404-02.html">Style 02</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <!-- Begin Facebook -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-social-facebook text-facebook"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">David Green</div>
                                                <div class="number">10,865 Likes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Facebook -->
                            <!-- Begin Twitter -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-social-twitter text-twitter"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-twitter">@David_Green</div>
                                                <div class="number">8,986 Followers</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-social-linkedin-outline text-linkedin"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-linkedin">@David_Green</div>
                                                <div class="number">3,654 Followers</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                        </div>
                        <!-- End Row -->
                        
                    
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Begin Widget 07 -->
                                <div class="widget widget-07 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Product Overview</h2>
                                        <div class="widget-options">
                                            <!-- <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary ripple">Week</button>
                                                <button type="button" class="btn btn-primary ripple">Month</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="check-all" id="check-all">
                                                                <label for="check-all"></label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Country</th>
                                                        <th>Ship Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Order Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb1" id="cb1">
                                                                <label for="cb1"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">054-01-FR</span></td>
                                                        <td>Lori Baker</td>
                                                        <td>US</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$139.45</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb2" id="cb2">
                                                                <label for="cb2"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-12-US</span></td>
                                                        <td>Lawrence Crawford</td>
                                                        <td>FR</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$189.00</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb3" id="cb3">
                                                                <label for="cb3"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">189-01-RU</span></td>
                                                        <td>Samuel Walker</td>
                                                        <td>AU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb4" id="cb4">
                                                                <label for="cb4"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">092-06-FR</span></td>
                                                        <td>Angela Walters</td>
                                                        <td>US</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb5" id="cb5">
                                                                <label for="cb5"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-09-US</span></td>
                                                        <td>Ryan Hanson</td>
                                                        <td>ES</td>
                                                        <td>07/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$199.95</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb6" id="cb6">
                                                                <label for="cb6"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">054-01-FR</span></td>
                                                        <td>Evelyn Black</td>
                                                        <td>FR</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$139.45</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb7" id="cb7">
                                                                <label for="cb7"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-12-US</span></td>
                                                        <td>James Morris</td>
                                                        <td>EN</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$189.00</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb8" id="cb8">
                                                                <label for="cb8"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">189-01-RU</span></td>
                                                        <td>Valentin H.</td>
                                                        <td>AU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb9" id="cb9">
                                                                <label for="cb9"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">092-06-FR</span></td>
                                                        <td>Beverly Matthews</td>
                                                        <td>RU</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb10" id="cb10">
                                                                <label for="cb10"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-primary">021-09-US</span></td>
                                                        <td>Jeffrey Arnold</td>
                                                        <td>US</td>
                                                        <td>07/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                                        <td>$199.95</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                    <!-- Begin Widget Footer -->
                                    <div class="widget-footer d-flex align-items-center">
                                        <div class="mr-auto p-2">
                                            <span class="display-items">Showing 1-30 / 150 Results</span>
                                        </div>
                                        <div class="p-2">
                                            <nav aria-label="...">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i class="ion-chevron-left"></i></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <span class="page-link">2<span class="sr-only">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- End Widget Footer -->
                                </div>
                                <!-- End Widget 07 -->
                            </div>
                        </div>
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">HALOTRIP</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <!-- <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/chart/chart.min.js"></script>
        <script src="assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="assets/vendors/js/calendar/moment.min.js"></script>
        <script src="assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/vendors/js/app/app.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/dashboard/db-default.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>