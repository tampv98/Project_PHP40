<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/backend/layoutAdmin2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/backend/layoutAdmin2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/backend/layoutAdmin2/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/backend/layoutAdmin2/css/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- register file .js of ckeditor -->
    <script type="text/javascript" src="assets/backend/ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php?area=backend" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>M</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Tâm</b>Muỗi</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/backend/layoutAdmin2/images/admin.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $_SESSION["email"]; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="assets/backend/layoutAdmin2/images/admin.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $_SESSION["email"]; ?>
                                    <small>Web developer</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="index.php?area=backend&controller=logout" class="btn btn-default btn-flat">Sign out</a>
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
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/backend/layoutAdmin2/images/admin.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION["email"]; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>

                <li>
                    <a href="index.php?area=backend&controller=category&action=list_category">
                        <i class="fa fa-th"></i> <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?area=backend&controller=product&action=list_product">
                        <i class="fa fa-th"></i> <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?area=backend&controller=news&action=list_news">
                        <i class="fa fa-th"></i> <span>Tin tức</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?area=backend&controller=user&action=list_user">
                        <i class="fa fa-code"></i> <span>Quản lý user</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo $this->view; ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13-pre
        </div>
        <strong>Copyright &copy; 2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/backend/layoutAdmin2/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/backend/layoutAdmin2/js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/backend/layoutAdmin2/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/backend/layoutAdmin2/js/adminlte.min.js"></script>
</body>
</html>
