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
<title>Covai Traders - Stock List</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .export-btn:disabled {
        cursor: not-allowed;
        opacity: 0.7;
    }
</style>
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
                    <h2>Stock List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Stock</li>
                        <li class="breadcrumb-item active">Stock List</li>
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
                        <div class="body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary export-btn" disabled>Excel</button>
                                    <button class="btn btn-primary export-btn" disabled>PDF</button>
                                    <button class="btn btn-primary export-btn" disabled>Print</button>
                                    <button class="btn btn-success" disabled>Previous Month</button>
                                    <button class="btn btn-success" style="display: none;" disabled>Current Month</button>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="search" placeholder="Search..." class="form-control" disabled>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="stockTable" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th class="text-right">12kg Load</th>
                                            <th class="text-right">12kg Empty</th>
                                            <th class="text-right">17kg Load</th>
                                            <th class="text-right">17kg Empty</th>
                                            <th class="text-right">Hose</th>
                                            <th class="text-right">Hydralic H</th>
                                            <th class="text-right">SRG</th>
                                            <th class="text-right">Ind SRG</th>
                                            <th class="text-right">Adap</th>
                                            <th class="text-right">Ind Adap</th>
                                            <th class="text-right">Lighter</th>
                                            <th class="text-right">Stove</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="stock-list">
                                        <tr><td colspan="15" class="text-center">No data available for this demo.</td></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="font-weight-bold">Total (Page)</td>
                                            <td id="total_closing_12kg_load" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_12kg_empty" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_17kg_load" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_17kg_empty" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_hose" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_hydralic" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_srg" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_ind_srg" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_adap" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_ind_adap" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_lighter" class="text-right font-weight-bold">0</td>
                                            <td id="total_closing_stove" class="text-right font-weight-bold">0</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div>
                                    Showing <span id="start-row">0</span> to <span id="end-row">0</span> of <span id="total-rows">0</span> Results
                                </div>
                                <div class="btn-group">
                                    <button id="prev-btn" class="btn btn-primary" disabled>Previous</button>
                                    <div id="page-numbers" class="btn-group"></div>
                                    <button id="next-btn" class="btn btn-primary" disabled>Next</button>
                                </div>
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
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    // All dynamic functionality is disabled for the demo.
</script>
</body>
</html>
