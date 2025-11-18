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
<title>Covai Traders - Stock Report</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

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
                    <h2>Stock Report</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Stock</li>
                        <li class="breadcrumb-item active">Stock Report</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div id="page1" class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Datewise</strong> Stock Report</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label for="fromDate">From Date:</label>
                                    <input type="text" id="fromDate" class="form-control datetimepicker" placeholder="Select Date" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="toDate">To Date:</label>
                                    <input type="text" id="toDate" class="form-control datetimepicker" placeholder="Select Date" disabled>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <button class="btn btn-primary" disabled>Get Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="page2" class="row clearfix">
                 <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Stock Report</strong> Details</h2>
                        </div>
                        <div class="body">
                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <button class="btn btn-primary" disabled>Excel</button>
                                    <button class="btn btn-primary" disabled>PDF</button>
                                    <button class="btn btn-primary" disabled>Print</button>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="searchDate" class="form-control" placeholder="Search by date..." disabled>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="stockTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>12kg Load</th>
                                            <th>12kg Empty</th>
                                            <th>17kg Load</th>
                                            <th>17kg Empty</th>
                                            <th>Hose</th>
                                            <th>Hydralic H</th>
                                            <th>SRG</th>
                                            <th>Ind SRG</th>
                                            <th>ADP</th>
                                            <th>Ind ADP</th>
                                            <th>Stove</th>
                                            <th>Lighter</th>
                                        </tr>
                                    </thead>
                                    <tbody id="stockReportTable">
                                        <tr><td colspan="14" class="text-center">No data available for this demo.</td></tr>
                                    </tbody>
                                    <tfoot id="totalRow"></tfoot>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-4" id="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/plugins/momentjs/moment.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
    // All dynamic functionality is disabled for the demo.
    $(function() {
        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
        });
    });
</script>
</body>
</html>
