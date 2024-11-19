<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu List | Lic Credit Card</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/admin/logo.png">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <!-- Dropify userimage css -->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/admin/admin-css-js/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/frontend/mystyle.css">

    <!-- End Dropify userimage css -->
    <style type="text/css">
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        margin: 2px 0;
        white-space: nowrap;
        justify-content: flex-end;
        display: none;
    }

    .btntopmargin {
        margin-top: 30px;
    }

    /* p#innerPara{padding:20px ;} */
    legend {
        width: 75px;
        padding: 10px 20px;
    }

    .fieldsetsty {
        border-top: 1px solid #8d8e8e !important;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
            </ul>

            <!-- SEARCH FORM -->
            <div class="image  text-center">
                <!-- <img src="http://127.0.0.1:8000/upload/users" alt="user Image" class="brand-image img-circle elevation-3" style="width: 40px; max-width: 100%;"> -->
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="info">
                <a href="http://127.0.0.1:8000/admin/dashboard" class="d-block">Welcome, (Admin) Mr.
                    Rohit Shakya</a>
            </div>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->


                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="">Settings</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://127.0.0.1:8000/admin/logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="fas fa-file mr-2"></i>Logout</a>
                        <form id="logout-form" action="http://127.0.0.1:8000/admin/logout" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> </form>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="http://127.0.0.1:8000/admin/dashboard" class="brand-link" style="text-align: center;">
                <img src="http://127.0.0.1:8000/assets/admin/logo.png" alt="Admin Logo" class="brand-image"
                    style="float: none!important;">
                <span class="brand-text font-weight-light">&nbsp; </span>
            </a>
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/admin/dashboard" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        </li>

                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/cards" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Card List </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    CMS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/banner" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Home Page </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/blog" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Blog List </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/partner/create" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Partners List </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/pages" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Pages List </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/menus" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Menus List </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/document/create" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Documents List </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/srmaster" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> SR Master List</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/csm" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> CSM </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/ccsa" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> CCSA </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/admin/dme" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> DME </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/admin/settings/1/edit" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Settings </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/admin/application/list" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Applications </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/admin/area-office" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Area Office</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1><a href="http://127.0.0.1:8000/admin/menus/create"
                                        class="btn btn-success float-left">Add New Menus</a>
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"> Menu List </li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Menu List Table</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="">

                                        <div id="message_error" style="display: none;" class="alert alert-danger">Status
                                            Disabled
                                        </div>
                                        <div id="message_success" style="display: none;" class="alert alert-success">
                                            Status Enable
                                        </div>
                                    </div>

                                    <form method="get" action="http://127.0.0.1:8000/admin/search/cms/list" role="form"
                                        enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" name="_token"
                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq">
                                        <div class="row">

                                            <div class="col-sm-4 border-right">
                                                <div class="form-group">
                                                    <label for="inputName">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Title">
                                                </div>
                                            </div>

                                            <div class="col-sm-4 border-right">
                                                <div class="form-group">
                                                    <label for="inputName">Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="1">testimonial</option>
                                                        <option value="2">Links</option>
                                                        <option value="3">About</option>
                                                        <option value="4">Contact Info</option>
                                                        <option value="5">Only Image</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-2 my-4" style="padding-top: 6px;">
                                                <input type="submit" value="Search" class="btn btn-success">
                                            </div>

                                        </div>
                                    </form>
                                    <table id="" class="table table-bordered table-striped my-4">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Parent Menu</th>
                                                <th>Menu Type</th>
                                                <th>Order By</th>
                                                <th>Url</th>
                                                <th>Target Type</th>
                                                <th>Pages</th>
                                                <th>Bank</th>
                                                <th>created_at</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Demos</td>
                                                <td> Demos </td>
                                                <td> Sub Menu </td>
                                                <td>1</td>
                                                <td>#</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 12:07:07</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="31" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/31/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/31"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Quick Links</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>3</td>
                                                <td>#</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 12:06:34</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="30" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/30/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/30"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Download Form</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>2</td>
                                                <td>#</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 12:06:04</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="29" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/29/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/29"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Important Links</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>1</td>
                                                <td>#</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 12:05:43</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="28" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/28/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/28"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>About UNION Bank</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>2</td>
                                                <td></td>
                                                <td> Same Page </td>
                                                <td> About UNION Bank </td>
                                                <td> UNION Bank </td>
                                                <td>2021-08-14 11:51:13</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="27" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/27/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/27"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Home</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>1</td>
                                                <td>/</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> UNION Bank </td>
                                                <td>2021-08-14 11:50:39</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="26" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/26/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/26"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>About AXIS Bank</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>2</td>
                                                <td></td>
                                                <td> Same Page </td>
                                                <td> About AXIS Bank </td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 11:45:13</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="25" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/25/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/25"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Home</td>
                                                <td></td>
                                                <td> Main Menu
                                                </td>
                                                <td>1</td>
                                                <td>/</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td> AXIS Bank </td>
                                                <td>2021-08-14 11:41:00</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="24" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/24/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/24"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>Demo</td>
                                                <td> Demo </td>
                                                <td> Sub Menu </td>
                                                <td>4</td>
                                                <td></td>
                                                <td> Same Page </td>
                                                <td> About Lic </td>
                                                <td></td>
                                                <td>2021-08-13 14:05:34</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="23" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/23/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/23"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>Notices &amp; Tenders</td>
                                                <td> Notices &amp; Tenders </td>
                                                <td> Sub Menu </td>
                                                <td>5</td>
                                                <td>#</td>
                                                <td> Same Page </td>
                                                <td></td>
                                                <td></td>
                                                <td>2021-08-13 14:02:40</td>
                                                <td><input type="checkbox" class="MenusStatus btn btn-success" name=""
                                                        rel="22" data-toggle="toggle" data-on="Enable" data-of="Disable"
                                                        data-onstyle="success" data-offstyle="danger" checked>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/menus/22/edit"
                                                        class="btn btn-primary w-100">Edit</a>


                                                    <form method="POST" action="http://127.0.0.1:8000/admin/menus/22"
                                                        role="form" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <input type="hidden" name="_token"
                                                            value="GXJusTMlS2dT1yRdVFsGakRsvcYJc3XW8LDLPCFq"> <input
                                                            type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger w-100 mt-2"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            </tr>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Parent Menu</th>
                                                <th>Menu Type</th>
                                                <th>Order By</th>
                                                <th>Url</th>
                                                <th>Target Type</th>
                                                <th>Pages</th>
                                                <th>Bank</th>
                                                <th>created_at</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="row">

                                        <div class="col-sm-6">
                                            Showing 1 to 10
                                            of total 31 entries
                                        </div>

                                        <div class="col-sm-6">
                                            <nav role="navigation" aria-label="Pagination Navigation"
                                                class="flex items-center justify-between">
                                                <div class="flex justify-between flex-1 sm:hidden">
                                                    <span
                                                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                                                        &laquo; Previous
                                                    </span>

                                                    <a href="http://127.0.0.1:8000/admin/menus?page=2"
                                                        class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                                        Next &raquo;
                                                    </a>
                                                </div>

                                                <div
                                                    class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                    <div>
                                                        <p class="text-sm text-gray-700 leading-5">
                                                            Showing
                                                            <span class="font-medium">1</span>
                                                            to
                                                            <span class="font-medium">10</span>
                                                            of
                                                            <span class="font-medium">31</span>
                                                            results
                                                        </p>
                                                    </div>

                                                    <div>
                                                        <span class="relative z-0 inline-flex shadow-sm rounded-md">

                                                            <span aria-disabled="true"
                                                                aria-label="&amp;laquo; Previous">
                                                                <span
                                                                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5"
                                                                    aria-hidden="true">
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                        viewBox="0 0 20 20">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </span>





                                                            <span aria-current="page">
                                                                <span
                                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                                            </span>
                                                            <a href="http://127.0.0.1:8000/admin/menus?page=2"
                                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                                aria-label="Go to page 2">
                                                                2
                                                            </a>
                                                            <a href="http://127.0.0.1:8000/admin/menus?page=3"
                                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                                aria-label="Go to page 3">
                                                                3
                                                            </a>
                                                            <a href="http://127.0.0.1:8000/admin/menus?page=4"
                                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                                aria-label="Go to page 4">
                                                                4
                                                            </a>


                                                            <a href="http://127.0.0.1:8000/admin/menus?page=2"
                                                                rel="next"
                                                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                                                aria-label="Next &amp;raquo;">
                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                    viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd"
                                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </nav>

                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong> LIC CARDS SERVICES LIMITED Developed By <a target="_blank" href="http://atomsindia.com">Atoms
                    India</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <!-- <b>Version</b> 3.0.5 -->
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!--product attribute -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!--product attribute -->

    <!-- jQuery -->
    <script src="http://127.0.0.1:8000/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://127.0.0.1:8000/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://127.0.0.1:8000/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://127.0.0.1:8000/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://127.0.0.1:8000/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <!-- <script src="http://127.0.0.1:8000/assets/plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="http://127.0.0.1:8000/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="http://127.0.0.1:8000/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://127.0.0.1:8000/assets/plugins/moment/moment.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://127.0.0.1:8000/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="http://127.0.0.1:8000/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="http://127.0.0.1:8000/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://127.0.0.1:8000/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://127.0.0.1:8000/assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://127.0.0.1:8000/assets/dist/js/demo.js"></script>

    <!-- DataTables -->
    <!-- <script src="http://127.0.0.1:8000/assets/dist/js/adminlte.min.js"></script> -->
    <script src="http://127.0.0.1:8000/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <script src="http://127.0.0.1:8000/assets/frontend/ckeditor/ckeditor.js"></script>
    <script src="http://127.0.0.1:8000/assets/admin/admin-css-js/customjs.js"></script>


    <!--Start user image upload form -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script> -->
    <script src="http://127.0.0.1:8000/assets/admin/admin-css-js/dropify.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/frontend/js/helpers.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <!--     <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" /> -->


    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script> -->
    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->

    <script>
    var drEvent = $('.dropify').dropify();

    drEvent.on('dropify.error.fileSize', function(event, element) {
        alert('Filesize error message!');
    });
    drEvent.on('dropify.error.minWidth', function(event, element) {
        alert('Min width error message!');
    });
    drEvent.on('dropify.error.maxWidth', function(event, element) {
        alert('Max width error message!');
    });
    drEvent.on('dropify.error.minHeight', function(event, element) {
        alert('Min height error message!');
    });
    drEvent.on('dropify.error.maxHeight', function(event, element) {
        alert('Max height error message!');
    });
    drEvent.on('dropify.error.imageFormat', function(event, element) {
        alert('Image format error message!');
    });
    </script>

    <script>
    // global app configuration object
    var config = {
        routes: {
            updatecardstatus: "http://127.0.0.1:8000/admin/card/status",
            updatepagesurl: "http://127.0.0.1:8000/admin/pages/status",
            updatepartnersstatusurl: "http://127.0.0.1:8000/admin/partner/status",
            menusstatusurl: "http://127.0.0.1:8000/admin/menus/status",
            bannerstatusurl: "http://127.0.0.1:8000/admin/banner/status",
            marqueurl: "http://127.0.0.1:8000/admin/marque/status",
            missionurl: "http://127.0.0.1:8000/admin/mission/status",
            vissionurl: "http://127.0.0.1:8000/admin/vission/status",
            cobrandedurl: "http://127.0.0.1:8000/admin/cobranded/status",
            areaofficeurl: "http://127.0.0.1:8000/admin/area-office/status",
            getdmecityurl: "http://127.0.0.1:8000/admin/get-dme-city",
            getccsacityurl: "http://127.0.0.1:8000/admin/get-ccsa-city",
            getcsmcityurl: "http://127.0.0.1:8000/admin/get-csm-city",
            getsrmastercityurl: "http://127.0.0.1:8000/admin/get-srmaster-city",
            blogstatusurl: "http://127.0.0.1:8000/admin/blog/status",
        }
    };
    </script>
</body>

</html>