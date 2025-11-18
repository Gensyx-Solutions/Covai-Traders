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
<title>Covai Traders - Purchase List</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
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

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li><a href="Logout" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="SalesManagement"><img src="new-logo1.png" width="25" alt="Aero"><span class="m-l-10">Covai Traders</span></a>
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
                    <h2>Purchase List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Purchase</li>
                        <li class="breadcrumb-item active">Purchase List</li>
                    </ul>
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
                        <div class="body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <button class="btn btn-success" disabled>Excel</button>
                                    <button class="btn btn-danger" disabled>PDF</button>
                                    <button class="btn btn-info" disabled>Print</button>
                                    <button class="btn btn-primary" disabled>Previous Month</button>
                                    <button class="btn btn-secondary" disabled style="display: none;">Current Month</button>
                                </div>
                                <div class="w-25">
                                    <input type="text" id="customSearch" class="form-control" placeholder="Search..." disabled>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="purchaseTable" class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th><th>Date</th><th>Customer Name</th>
                                            <th>12kg L</th><th>12kg G</th><th>17kg L</th><th>17kg G</th>
                                            <th>SRG</th><th>Adp</th><th>Stv</th><th>Lig</th><th>Hose</th>
                                            <th>12kg AMT</th><th>17kg AMT</th><th>Other AMT</th><th>Total AMT</th>
                                            <th>12Kg Dep</th><th>17Kg Dep</th><th>12Kg Dep AMT</th><th>17Kg Dep AMT</th><th>Total Dep AMT</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data is not populated for this static demo -->
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="3" class="text-right">Total</td>
                                            <td id="total12kgLoad">0</td><td id="total12kgGiven">0</td>
                                            <td id="total17kgLoad">0</td><td id="total17kgGiven">0</td>
                                            <td id="srg">0</td><td id="adap">0</td><td id="stove">0</td>
                                            <td id="lighter">0</td><td id="hose">0</td>
                                            <td id="total12kgAmount">0.00</td><td id="total17kgAmount">0.00</td>
                                            <td id="otheramount">0.00</td><td id="totalPurchaseValue">0.00</td>
                                            <td id="deposit12kg">0.00</td><td id="deposit17kg">0.00</td>
                                            <td id="depositAmount12kg">0.00</td><td id="depositAmount17kg">0.00</td>
                                            <td id="totalDepositAmount">0.00</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
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
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
$(function() {
    // Initialize a static, empty DataTable for demo purposes
    $('#purchaseTable').DataTable({
        data: [], // No data
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        pageLength: 15,
        dom: 'Bfrtip',
        buttons: [], // No buttons
        columns: [
            { title: '#' }, { title: 'Date' }, { title: 'Customer Name' },
            { title: '12kg L' }, { title: '12kg G' }, { title: '17kg L' }, { title: '17kg G' },
            { title: 'SRG' }, { title: 'Adp' }, { title: 'Stv' }, { title: 'Lig' }, { title: 'Hose' },
            { title: '12kg AMT' }, { title: '17kg AMT' }, { title: 'Other AMT' }, { title: 'Total AMT' },
            { title: '12Kg Dep' }, { title: '17Kg Dep' }, { title: '12Kg Dep AMT' }, { title: '17Kg Dep AMT' }, { title: 'Total Dep AMT' },
            { title: 'Action', defaultContent: '<button class="btn btn-sm btn-warning" disabled>Edit</button> <button class="btn btn-sm btn-danger" disabled>Delete</button>' }
        ]
    });
});
</script>

</body>
</html>
