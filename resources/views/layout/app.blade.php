<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">
    <title>CTinsight</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/ui.css" rel="stylesheet">
    <link href="/assets/css/layout.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="/assets/plugins/metrojs/metrojs.min.css" rel="stylesheet">
    <link href="/assets/plugins/maps-amcharts/ammap/ammap.min.css" rel="stylesheet">
    <link href="/assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <!-- BEGIN BODY -->
  <body class="sidebar-top fixed-topbar fixed-sidebar theme-sdtl color-purple">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <ul class="nav nav-sidebar">
            <li {!! $section == 'board' ? 'class="active"' : '' !!}><a href="/board"><i class="icon-home"></i><span>Dashboard</span></a></li>
            <li {!! $section == 'users' ? 'class="active"' : '' !!}><a href="/table"><i class="fa fa-table"></i><span>Users</span></a></li>
            <li {!! $section == 'projects' ? 'class="active"' : '' !!}><a href="/table"><i class="fa fa-table"></i><span>Projects</span></a></li>
            <!--<li class="nav-parent">
              <a href="#"><i class="icon-puzzle"></i><span>Builder</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a target="_blank" href="../../admin-builder/index.html"> Admin</a></li>
                <li><a href="page-builder/index.html"> Page</a></li>
                <li><a href="ecommerce-pricing-table.html"> Pricing Table</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="#"><i class="icon-bulb"></i><span>Mailbox</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="mailbox.html"> Inbox</a></li>
                <li><a href="mailbox-send.html"> Send Email</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-screen-desktop"></i><span>UI Elements</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="ui-buttons.html" > Buttons</a></li>
                <li><a href="ui-components.html"> Components</a></li>
                <li><a href="ui-tabs.html"> Tabs</a></li>
                <li><a href="ui-animations.html"> Animations CSS3</a></li>
                <li><a href="ui-icons.html"> Icons</a></li>
                <li><a href="ui-portlets.html"> Portlets</a></li>
                <li><a href="ui-nestable-list.html" > Nestable List</a></li>
                <li><a href="ui-tree-view.html"> Tree View</a></li>
                <li><a href="ui-modals.html"> Modals</a></li>
                <li><a href="ui-notifications.html"> Notifications</a></li>
                <li><a href="ui-typography.html"> Typography</a></li>
                <li><a href="ui-helper.html"> Helper Classes</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-layers"></i><span>Layouts</span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="layouts-api.html"> Layout API</a></li>
                <li><a href="layout-topbar-menu.html"> Topbar Menu</a></li>
                <li><a href="layout-topbar-mega-menu.html"> Topbar Mega Menu</a></li>
                <li><a href="layout-topbar-mega-menu-dark.html"> Topbar Mega Dark</a></li>
                <li><a href="layout-boxed.html"> Boxed Layout</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-note"></i><span>Forms </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="forms.html"> Forms Elements</a></li>
                <li><a href="forms-validation.html"> Forms Validation</a></li>
                <li><a href="forms-plugins.html"> Advanced Plugins</a></li>
                <li><a href="forms-wizard.html"> <span class="pull-right badge badge-danger">low</span> <span>Form Wizard</span></a></li>
                <li><a href="forms-sliders.html"> Sliders</a></li>
                <li><a href="forms-editors.html"> Text Editors</a></li>
                <li><a href="forms-input-masks.html"> Input Masks</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-bar-chart"></i><span>Charts </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="charts.html"> Charts</a></li>
                <li><a href="charts-finance.html"> Financial Charts</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-picture"></i><span>Medias</span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="medias-image-croping.html"> Images Croping</a></li>
                <li><a href="medias-gallery-sortable.html"> Gallery Sortable</a></li>
                <li><a href="medias-hover-effects.html"> <span class="pull-right badge badge-primary">12</span> Hover Effects</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-docs"></i><span>Pages </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="page-timeline.html"> Timeline</a></li>
                <li><a href="page-404.html"> Error 404</a></li>
                <li><a href="page-500.html"> Error 500</a></li>
                <li><a href="page-blank.html"> Blank Page</a></li>
                <li><a href="page-contact.html"> Contact</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-user"></i><span>User </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="user-profil.html"> <span class="pull-right badge badge-danger">Hot</span> Profil</a></li>
                <li><a href="user-lockscreen.html"> Lockscreen</a></li>
                <li><a href="user-login-v1.html"> Login / Register</a></li>
                <li><a href="user-login-v2.html"> Login / Register v2</a></li>
                <li><a href="user-session-timeout.html"> Session Timeout</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-basket"></i><span>eCommerce </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="ecommerce-cart.html"> Shopping Cart</a></li>
                <li><a href="ecommerce-invoice.html"> Invoice</a></li>
                <li><a href="ecommerce-pricing-table.html"><span class="pull-right badge badge-success">5</span> Pricing Table</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-cup"></i><span>Extra </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="extra-fullcalendar.html"><span class="pull-right badge badge-primary">New</span> Fullcalendar</a></li>
                <li><a href="extra-widgets.html"> Widgets</a></li>
                <li><a href="page-coming-soon.html"> Coming Soon</a></li>
                <li><a href="extra-sliders.html"> Sliders</a></li>
                <li><a href="maps-google.html"> Google Maps</a></li>
                <li><a href="maps-vector.html"> Vector Maps</a></li>
                <li><a href="extra-translation.html"> Translation</a></li>
              </ul>
            </li>-->
          </ul>
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
              <ul class="nav nav-icons">
                <!-- <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li> -->
                <li><a href="https://app.calculatietool.com/login"><span class="octicon octicon-device-desktop"></span></a></li>
                <!-- <li><a href="#"><span class="octicon octicon-flame"></span></a></li> -->
                <!-- <li><a href="builder-page.html"><span class="octicon octicon-rocket"></span></a></li> -->
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN NOTIFICATION DROPDOWN -->
              <li class="dropdown" id="notifications-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-bell"></i>
                <span class="badge badge-danger badge-header">6</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">12 Pending Notifications</p>
                  </li>
                  <li>
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                      <li>
                        <a href="#">
                        <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                        Steve have rated your photo
                        <span class="dropdown-time">Just now</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                        John added you to his favs
                        <span class="dropdown-time">15 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-file-text p-r-10 f-18"></i>
                        New document available
                        <span class="dropdown-time">22 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">40 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                        Meeting in 1 hour
                        <span class="dropdown-time">1 hour</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18"></i>
                        Server 5 overloaded
                        <span class="dropdown-time">2 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                        Bill comment your post
                        <span class="dropdown-time">3 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">2 days</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="#" class="pull-left">See all notifications</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END NOTIFICATION DROPDOWN -->
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <!-- <img src="/assets/images/avatars/user1.png" alt="user image"> -->
                <span class="username">Hi, {{ Auth::user()->username }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="/logout"><i class="icon-login"></i><span>Application</span></a>
                  </li>
                  <li>
                    <a href="/logout"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
          @yield('content')
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
    </section>
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    <script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <!-- <script src="/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display --> -->
    <!-- <script src="/assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs --> -->
    <script src="/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <!-- <script src="/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image --> -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>

    <!-- <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover --> -->
    <!-- <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget --> -->
    <!-- <script src="/assets/js/quickview.js"></script> <!-- Chat Script --> -->
    <!-- <script src="/assets/js/pages/search.js"></script> <!-- Search Script --> -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/layout.js"></script> <!-- Main Application Script -->

    <!-- BEGIN PAGE SCRIPT -->
    <script src="/assets/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
    <script src="/assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
    <script src="/assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
    <script src="/assets/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
    <script src="/assets/js/widgets/todo_list.js"></script>
    <script src="/assets/plugins/metrojs/metrojs.min.js"></script> <!-- Flipping Panel -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
    <script src="/assets/plugins/charts-highstock/js/highstock.min.js"></script> <!-- financial Charts -->
    <script src="/assets/plugins/charts-highstock/js/modules/exporting.min.js"></script> <!-- Financial Charts Export Tool -->
    <script src="/assets/plugins/maps-amcharts/ammap/ammap.min.js"></script> <!-- Vector Map -->
    <!-- <script src="/assets/plugins/maps-amcharts/ammap/maps/js/worldLow.min.js"></script> <!-- Vector World Map  --> -->
    <!-- <script src="/assets/plugins/maps-amcharts/ammap/themes/black.min.js"></script> <!-- Vector Map Black Theme --> -->
    <!-- <script src="/assets/plugins/skycons/skycons.min.js"></script> <!-- Animated Weather Icons --> -->
    <!-- <script src="/assets/plugins/simple-weather/jquery.simpleWeather.js"></script> <!-- Weather Plugin --> -->
    <!-- <script src="/assets/js/widgets/widget_weather.js"></script> -->
    <script src="/assets/js/pages/dashboard.js"></script>
    <!-- END PAGE SCRIPTS -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="/assets/js/pages/table_dynamic.js"></script>
    <!-- END PAGE SCRIPTS -->
  </body>
</html>