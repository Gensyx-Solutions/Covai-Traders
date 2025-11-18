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
<title>Covai Traders - Dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
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
        <li><a href="logout.php" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.php"><img src="new-logo1.png" width="25" alt="Aero"><span class="m-l-10">Covai Traders</span></a>
    </div>
    <?php include 'sidebar.php'; ?>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <?php include 'sidebar-right.php'; ?>

</aside>

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Covai Traders</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Closing Stock -->
            <div class="card">
                <div class="header">
                    <h2 id="closingStockDateDisplay">Closing Stock</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Load</h6><h2 id="latest_closing_12kg_load">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Empty</h6><h2 id="latest_closing_12kg_empty">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Load</h6><h2 id="latest_closing_17kg_load">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Empty</h6><h2 id="latest_closing_17kg_empty">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Hose</h6><h2 id="latest_closing_hose">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Hydraulic H</h6><h2 id="latest_closing_hydralic">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>SRG</h6><h2 id="latest_closing_srg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Ind SRG</h6><h2 id="latest_closing_ind_srg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Adap</h6><h2 id="latest_closing_adap">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Ind Adap</h6><h2 id="latest_closing_ind_adap">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Lighter</h6><h2 id="latest_closing_lighter">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Stove</h6><h2 id="latest_closing_stove">0</h2></div></div></div>
                    </div>
                </div>
            </div>
            <!-- Purchases -->
            <div class="card">
                <div class="header">
                    <h2 id="purchaseDataDateDisplay">Purchase Data</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Load</h6><h2 id="latest_purchase_load12kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Given</h6><h2 id="latest_purchase_given12kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Load</h6><h2 id="latest_purchase_load17kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Given</h6><h2 id="latest_purchase_given17kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>SRG</h6><h2 id="latest_purchase_srg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Adap</h6><h2 id="latest_purchase_adap">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Stove</h6><h2 id="latest_purchase_stove">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Lighter</h6><h2 id="latest_purchase_lighter">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Hose</h6><h2 id="latest_purchase_hose">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Amount 12kg</h6><h2 id="latest_purchase_amount12kg">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Amount 17kg</h6><h2 id="latest_purchase_amount17kg">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Other Amount</h6><h2 id="latest_purchase_otheramount">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Total Purchase</h6><h2 id="latest_purchase_totalPurchaseValue">0.00</h2></div></div></div>
                    </div>
                </div>
            </div>
            <!-- Sales -->
            <div class="card">
                <div class="header">
                    <h2 id="salesDataDateDisplay">Sales Data</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Load</h6><h2 id="latest_sales_load12kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>12kg Empty</h6><h2 id="latest_sales_empty12kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Load</h6><h2 id="latest_sales_load17kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>17kg Empty</h6><h2 id="latest_sales_empty17kg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>SRG</h6><h2 id="latest_sales_srg">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Adap</h6><h2 id="latest_sales_adap">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Stove</h6><h2 id="latest_sales_stove">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Lighter</h6><h2 id="latest_sales_lighter">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Hose</h6><h2 id="latest_sales_hose">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Hydraulic</h6><h2 id="latest_sales_hydralic">0</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Total Amount</h6><h2 id="latest_sales_totalAmount">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Deposit</h6><h2 id="latest_sales_deposit">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Amount Paid</h6><h2 id="latest_sales_amountPaid">0.00</h2></div></div></div>
                        <div class="col-lg-2 col-md-3 col-sm-6"><div class="card widget_2"><div class="body"><h6>Amount OD</h6><h2 id="latest_sales_amountOD">0.00</h2></div></div></div>
                    </div>
                </div>
            </div>
            <!-- Outstanding -->
            <div class="card">
                <div class="header">
                    <h2 id="outstandingDataDateDisplay">Outstanding Data</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12"><div class="card widget_2"><div class="body"><h6>Total for Date</h6><h2 id="latest_outstanding_totalForSelectedDate">0.00</h2></div></div></div>
                        <div class="col-lg-3 col-md-6 col-sm-12"><div class="card widget_2"><div class="body"><h6>OD Collected</h6><h2 id="latest_outstanding_odCollectedTotal">0.00</h2></div></div></div>
                        <div class="col-lg-3 col-md-6 col-sm-12"><div class="card widget_2"><div class="body"><h6>Outstanding Total</h6><h2 id="latest_outstanding_outstandingTotal">0.00</h2></div></div></div>
                        <div class="col-lg-3 col-md-6 col-sm-12"><div class="card widget_2"><div class="body"><h6>Final Total</h6><h2 id="latest_outstanding_finalTotal">0.00</h2></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets.js"></script>
<script>
    // --- Since this is a demo, we are not fetching any data ---
    document.addEventListener('DOMContentLoaded', function() {
        // Set all displays to a default message
        document.getElementById('closingStockDateDisplay').textContent = 'No data available';
        document.getElementById('purchaseDataDateDisplay').textContent = 'No data available';
        document.getElementById('salesDataDateDisplay').textContent = 'No data available';
        document.getElementById('outstandingDataDateDisplay').textContent = 'No data available';

        // Set all numerical values to 0 or 0.00
        const allH2s = document.querySelectorAll('.widget_2 h2');
        allH2s.forEach(h2 => {
            if (h2.textContent.includes('.')) {
                h2.textContent = '0.00';
            } else {
                h2.textContent = '0';
            }
        });
    });

    function handleLogout() {
        // In a demo, logout can just redirect to the index page.
        window.location.href = 'index.php';
    }
</script>
</body>
</html>