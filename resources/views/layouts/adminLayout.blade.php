<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href={{asset("dist/css/AdminLTE.min.css")}} rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href={{asset("dist/css/skins/_all-skins.min.css")}} rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href={{asset("plugins/iCheck/flat/blue.css")}} rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href={{asset("plugins/morris/morris.css")}} rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href={{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css")}} rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href={{asset("plugins/datepicker/datepicker3.css")}} rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href={{asset("plugins/daterangepicker/daterangepicker-bs3.css")}} rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href={{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}} rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/admin')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b>WC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>PWC</b>Task</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @php ($adminImage = Auth::user()->image)
                            <img src={{asset("images/$adminImage")}} class="user-image" alt="User Image" />
                            <span class="hidden-xs">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu" style="width: 113px; ">
                            <!-- User image -->

                            <li class="user-footer" style="background-color: #ecf0f5" >
                                <div class="pull-right">
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="btn btn-danger btn-flat" style="width: 160%; margin-left: -64%;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src={{asset("images/$adminImage")}} class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{request()->getRequestUri() == '/admin' ? 'active': ''}}">
                    <a href="{{url('/admin')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{(request()->getRequestUri() == '/admin/pendingComplaint' || request()->getRequestUri() == '/admin/manageComplaint') ? 'treeview active': ''}}">
                    <a href="#">
                        <i class="fa fa-comments"></i>
                        <span>Complaint</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{request()->getRequestUri() == '/admin/pendingComplaint' ? 'active': ''}}"><a href="{{url('/admin/pendingComplaint')}}"><i class="fa fa-circle-o"></i>Pending Resolution</a></li>
                        <li class="{{request()->getRequestUri() == '/admin/manageComplaint' ? 'active': ''}}"><a href="{{url('/admin/manageComplaint')}}"><i class="fa fa-circle-o"></i>All Complaints</a></li>
                    </ul>
                </li>
                <li class="{{request()->getRequestUri() == '/admin/manageAdmins' ? 'active': ''}}">
                    <a href="{{url('/admin/manageAdmins')}}">
                        <i class="fa fa-user"></i>
                        <span>Admin Management</span>
                    </a>
                </li>
                <li class="{{request()->getRequestUri() == '/admin/manageUsers' ? 'active': ''}}">
                    <a href="{{url('/admin/manageUsers')}}">
                        <i class="fa fa-users"></i>
                        <span>User Management</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">

        </div>
        <strong>Copyright &copy; PWC.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src={{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src={{asset("bootstrap/js/bootstrap.min.js")}} type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src={{asset("plugins/morris/morris.min.js")}} type="text/javascript"></script>
<!-- Sparkline -->
<script src={{asset("plugins/sparkline/jquery.sparkline.min.js")}} type="text/javascript"></script>
<!-- jvectormap -->
<script src={{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}} type="text/javascript"></script>
<script src={{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}} type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src={{asset("plugins/knob/jquery.knob.js")}} type="text/javascript"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js")}} type="text/javascript"></script>
<script src={{asset("plugins/daterangepicker/daterangepicker.js")}} type="text/javascript"></script>
<!-- datepicker -->
<script src={{asset("plugins/datepicker/bootstrap-datepicker.js")}} type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}} type="text/javascript"></script>
<!-- Slimscroll -->
<script src={{asset("plugins/slimScroll/jquery.slimscroll.min.js")}} type="text/javascript"></script>
<!-- FastClick -->
<script src={{asset("plugins/fastclick/fastclick.min.js")}} type="text/javascript"></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/app.min.js")}} type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("dist/js/pages/dashboard.js")}} type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("dist/js/demo.js")}} type="text/javascript"></script>
</body>
</html>
