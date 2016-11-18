<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="UTF-8">
  <title>App  | Finanzas Personales</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="{{ URL::to('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" rel="stylesheet"/>
  <!-- Font Awesome Icons -->
  <link href="{{ URL::to('bower_components/AdminLTE/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="  {{ URL::to('bower_components/AdminLTE/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ URL::to("bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
  page. However, you can choose any other skin. Make sure you
  apply the skin class to the body tag so the changes take effect.
-->
<link href="{{ URL::to("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" >


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
@yield('head_content')
</head>
<body class="skin-blue">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="{{ url('/') }}/admin/main" class="logo"><b>Admin </b>Finanzas Personales</a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Tasks Menu -->
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ URL::to("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ URL::to("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                  <p>
                    {{ Auth::user()->name }}
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        @if (Auth::user())
        <ul class="sidebar-menu">
          <li class="header">Opciones</li>
          <!-- Optionally, you can add icons to the links -->
          {{-- <li class="active"><a href="{{URL::to('/')}}/admin/user" title="Usuarios"><span>Usuarios</span></a></li> --}}
          @if (Auth::user())
          <li><a href="{{ URL::to('/')}}/admin/user" title="Users">Users</a></li>
          <li class="treeview">
            <a href="#"><span>Business Shoes</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ URL::to('/')}}/admin/product" title="Products">Products</a></li>
              <li><a href="#" title="Clients">Clients</a></li>
              <li><a href="#" title="Orders">Orders</a></li>
              <li><a href="#" title="Abonos">Abonos</a></li>
            </ul>
          </li>
          <li><a href="#" title="Gastos Personales">Gastos Personales</a></li>
          @endif

        </ul><!-- /.sidebar-menu -->
        @endif
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div id="body_wrapper">
          @yield('body_content')
        </div>
      </section>
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright © 2015 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

  </div><!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="{!! URL::to('js/jquery/jquery-1.11.3.min.js') !!}"></script>
  <script type="text/javascript" src="{!! URL::to('js/bootstrap/bootstrap.min.js') !!}"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


  <!-- AdminLTE App -->
  <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script type="text/javascript" src="{!! URL::to('/') !!}/js/jquery/ie10-viewport-bug-workaround.js"></script>

  <!-- js de bootstrap 3 datepicker-->
  <script type="text/javascript" src="{!! URL::to('/') !!}/js/bootstrap/datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript">var rootUrl = "{!! URL::to('/') !!}/";</script>
  <script type="text/javascript" src="{!! URL::to('/') !!}/js/Util.js"></script>

  @yield('javascript_content')
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
  Both of these plugins are recommended to enhance the
  user experience -->
</body>
</html>
