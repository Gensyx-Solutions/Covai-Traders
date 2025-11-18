<?php
// This is a static demo page. No server-side logic is needed.
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Covai Traders - Sales Overview</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<div class="page-loader-wrapper"><div class="loader"><div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div><p>Please wait...</p></div></div>
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
                    <h2>Sales Overview</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Sales Overview</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="overviewPage" class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header"><h2><strong>Monthly Sales</strong> Overview</h2></div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="overviewTable" class="table table-bordered table-striped table-hover dataTable">
                                    <thead><tr><th>#</th><th>Month</th><th>Year</th><th>Total Sales</th><th>Report</th></tr></thead>
                                    <tbody>
                                        <tr><td colspan="5" class="text-center">No data available for this demo.</td></tr>
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

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
$(function() {
    // Initialize DataTable with empty data for demo purposes
    $('#overviewTable').DataTable({
        data: [],
        columns: [
            { title: "#" },
            { title: "Month" },
            { title: "Year" },
            { title: "Total Sales" },
            { title: "Report" }
        ]
    });
});
</script>

</body>
</html>
