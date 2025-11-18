<?php
// This is a static demo page. No server-side logic is needed.
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Covai Traders - Customer List</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li><a href="logout.php" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="SalesManagement"><img src="new-logo1.png" width="25" alt="Covai Traders"><span class="m-l-10">Covai Traders</span></a>
    </div>
    <?php include 'sidebar.php'; ?>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <?php include 'sidebar-right.php'; ?>
</aside>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Customer List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Customer</li>
                        <li class="breadcrumb-item active">View Customers</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Customer</strong> List </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Code</th>
                                            <th>Company Name</th>
                                            <th>Customer Name</th>
                                            <th>GSTIN</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Code</th>
                                            <th>Company Name</th>
                                            <th>Customer Name</th>
                                            <th>GSTIN</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- Data is not populated for this static demo -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script>
$(function () {
    $('.js-exportable').DataTable({
        responsive: true,
        data: [], // Provide empty data for the demo
        columns: [
            { data: 'Mem_No' },
            { data: 'Mem_Id' },
            { data: 'Mem_Name' },
            { data: 'Mem_Fname' },
            { data: 'Mem_GST' },
            { data: 'Mem_Mobile' }
        ]
    });
});
</script>
</body>
</html>