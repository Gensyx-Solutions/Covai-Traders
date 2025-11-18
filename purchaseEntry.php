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
<title>Covai Traders - Purchase Entry</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- Select2 -->
<link rel="stylesheet" href="assets/plugins/select2/select2.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .dtp {
        z-index: 10000 !important;
    }
</style>
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
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">App Sortcute</li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Notifications</li>
            </ul>
        </li>
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
                    <h2>New Purchase Entry</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="purchaseList.html">Purchase</a></li>
                        <li class="breadcrumb-item active">New Entry</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Purchase</strong> Details</h2>
                        </div>
                        <div class="body">
                            <form id="purchaseForm" method="POST">
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <label for="purchaseDate">Purchase Date</label>
                                        <div class="form-group">
                                            <input type="text" id="purchaseDate" name="purchaseDate" class="form-control datetimepicker" placeholder="Please choose date..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="customerName">Customer Name</label>
                                        <select id="customerName" name="customerName" class="form-control show-tick ms select2" data-placeholder="Select a customer" style="width: 100%;" disabled>
                                            <option>Sample Customer</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="load12kg">12kg Load</label>
                                        <div class="form-group">
                                            <input type="number" id="load12kg" name="load12kg" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="given12kg">12kg Given</label>
                                        <div class="form-group">
                                            <input type="number" id="given12kg" name="given12kg" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <label for="load17kg">17kg Load</label>
                                        <div class="form-group">
                                            <input type="number" id="load17kg" name="load17kg" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="given17kg">17kg Given</label>
                                        <div class="form-group">
                                            <input type="number" id="given17kg" name="given17kg" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="srg">SRG</label>
                                        <div class="form-group">
                                            <input type="number" id="srg" name="srg" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="adap">Adap</label>
                                        <div class="form-group">
                                            <input type="number" id="adap" name="adap" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="stove">Stove</label>
                                        <div class="form-group">
                                            <input type="number" id="stove" name="stove" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <label for="lighter">Lighter</label>
                                        <div class="form-group">
                                            <input type="number" id="lighter" name="lighter" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="hose">Hose</label>
                                        <div class="form-group">
                                            <input type="number" id="hose" name="hose" class="form-control" placeholder="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="amount12kg">12kg Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="amount12kg" name="amount12kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="amount17kg">17kg Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="amount17kg" name="amount17kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="otheramount">S/A/S/L/H Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="otheramount" name="otheramount" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="totalPurchaseValue">Total Purchase Value</label>
                                        <div class="form-group">
                                            <input type="number" id="totalPurchaseValue" name="totalPurchaseValue" step="0.01" class="form-control" readonly disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <label for="deposit12kg">12kg Deposit</label>
                                        <div class="form-group">
                                            <input type="number" id="deposit12kg" name="deposit12kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="deposit17kg">17kg Deposit</label>
                                        <div class="form-group">
                                            <input type="number" id="deposit17kg" name="deposit17kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="depositAmount12kg">12kg Deposit Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="depositAmount12kg" name="depositAmount12kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="depositAmount17kg">17kg Deposit Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="depositAmount17kg" name="depositAmount17kg" step="0.01" class="form-control" placeholder="0.00" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="totalDepositAmount">Total Deposit Amount</label>
                                        <div class="form-group">
                                            <input type="number" id="totalDepositAmount" name="totalDepositAmount" step="0.01" class="form-control" readonly disabled>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="purchaseId" name="purchaseId">
                                <button id="form-submit-button" type="submit" class="btn btn-primary" disabled>Add Purchase</button>
                            </form>
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

<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 
<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script>
$(function() {
    // Initialize date picker and select2 for visual purposes
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
    });
    
    $('#customerName').select2();

    // All form interactions are disabled for this static demo.
});
</script>

</body>
</html>
