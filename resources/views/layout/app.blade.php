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
            <li {!! $section == 'board' ? 'class="active"' : '' !!}><a href="/"><i class="icon-home"></i><span>Dashboard</span></a></li>
            
            <li class="nav-parent {!! $section == 'users' ? 'class="active"' : '' !!}">
              <a href="#"><i class="fa fa-user"></i><span>Users</span></a>
              <ul class="children collapse">
                <li><a href="/users"> Overview</a></li>
                <li><a href="/users/gross_share"> Gross share</a></li>
                <li><a href="/users/list"> List</a></li>
              </ul>
            </li>           
            
            <li class="nav-parent {!! $section == 'relations' ? 'class="active"' : '' !!}">
              <a href="#"><i class="fa fa-users"></i><span>Relations</span></a>
              <ul class="children collapse">
                <li><a href="/projects"> Overview</a></li>
                <li><a href="/projects/list"> List</a></li>
              </ul>
            </li>  

            <li class="nav-parent {!! $section == 'projects' ? 'class="active"' : '' !!}">
              <a href="#"><i class="fa fa-file-text-o"></i><span>Projects</span></a>
              <ul class="children collapse">
                <li><a href="/projects"> Overview</a></li>
                <li><a href="/projects/list"> List</a></li>
              </ul>
            </li>  

            <li {!! $section == 'servers' ? 'class="active"' : '' !!}><a href="/servers"><i class="fa fa-server"></i><span>Servers</span></a></li>
          </ul>
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
                <!-- <li><a href="https://app.calculatietool.com/login"><span class="octicon octicon-device-desktop"></span></a></li> -->
                <li><a href="/sync"><span class="octicon octicon-sync"></span></a></li>
                <li>Last update: {{ $last_update->created_at->diffForHumans() }}</li>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN NOTIFICATION DROPDOWN -->
              @if (0)
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
              @endif
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
    <script src="/assets/js/pages/charts.js"></script>
    <!-- END PAGE SCRIPTS -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="/assets/js/pages/table_dynamic.js"></script>
    <!-- END PAGE SCRIPTS -->
  </body>
</html>