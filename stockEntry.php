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
<title>Covai Traders - Stock Entry</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .table-cell {
        width: 8rem;
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
        <a href="SalesManagement" class="logo><img src="new-logo1.png" width="25" alt="Aero"><span class="m-l-10">Covai Traders</span></a>
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
                    <h2>Stock Management</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Stock</a></li>
                        <li class="breadcrumb-item active">Stock Entry</li>
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
                            <h2><strong>Stock</strong> Details</h2>
                        </div>
                        <div class="body">
                            <form id="stockForm">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="date">Select Date: </label>
                                        <input type="date" id="date" name="date" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="table-cell"></th>
                                                <th class="table-cell">12kg Load</th>
                                                <th class="table-cell">12kg Empty</th>
                                                <th class="table-cell">17kg Load</th>
                                                <th class="table-cell">17kg Empty</th>
                                                <th class="table-cell">Hose</th>
                                                <th class="table-cell">Hydralic H</th>
                                                <th class="table-cell">SRG</th>
                                                <th class="table-cell">Ind SRG</th>
                                                <th class="table-cell">Adap</th>
                                                <th class="table-cell">Ind Adap</th>
                                                <th class="table-cell">Lighter</th>
                                                <th class="table-cell">Stove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-cell">Opening Stock</td>
                                                <td><input type="number" name="opening_12kg_load" id="opening_12kg_load" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_12kg_empty" id="opening_12kg_empty" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_17kg_load" id="opening_17kg_load" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_17kg_empty" id="opening_17kg_empty" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_hose" id="opening_hose" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_hydralic" id="opening_hydralic" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_srg" id="opening_srg" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_ind_srg" id="opening_ind_srg" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_adap" id="opening_adap" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_ind_adap" id="opening_ind_adap" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_lighter" id="opening_lighter" class="form-control" disabled></td>
                                                <td><input type="number" name="opening_stove" id="opening_stove" class="form-control" disabled></td>
                                            </tr>
                                            <tr>
                                                <td class="table-cell">Purchase</td>
                                                <td><input type="number" name="purchase_12kg_load" id="purchase_12kg_load" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_12kg_empty" id="purchase_12kg_empty" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_17kg_load" id="purchase_17kg_load" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_17kg_empty" id="purchase_17kg_empty" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_hose" id="purchase_hose" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_hydralic" id="purchase_hydralic" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_srg" id="purchase_srg" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_ind_srg" id="purchase_ind_srg" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_adap" id="purchase_adap" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_ind_adap" id="purchase_ind_adap" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_lighter" id="purchase_lighter" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="purchase_stove" id="purchase_stove" class="form-control" value="0" disabled></td>
                                            </tr>
                                            <tr>
                                                <td class="table-cell">Sales</td>
                                                <td><input type="number" name="sales_12kg_load" id="sales_12kg_load" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_12kg_empty" id="sales_12kg_empty" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_17kg_load" id="sales_17kg_load" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_17kg_empty" id="sales_17kg_empty" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_hose" id="sales_hose" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_hydralic" id="sales_hydralic" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_srg" id="sales_srg" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_ind_srg" id="sales_ind_srg" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_adap" id="sales_adap" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_ind_adap" id="sales_ind_adap" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_lighter" id="sales_lighter" class="form-control" value="0" disabled></td>
                                                <td><input type="number" name="sales_stove" id="sales_stove" class="form-control" value="0" disabled></td>
                                            </tr>
                                            <tr>
                                                <td class="table-cell">Closing Stock</td>
                                                <td><input type="number" name="closing_12kg_load" id="closing_12kg_load" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_12kg_empty" id="closing_12kg_empty" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_17kg_load" id="closing_17kg_load" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_17kg_empty" id="closing_17kg_empty" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_hose" id="closing_hose" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_hydralic" id="closing_hydralic" class="form-control" disabled></td>
                                                <td><input type="number" name="closing_srg" id="closing_srg" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_ind_srg" id="closing_ind_srg" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_adap" id="closing_adap" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_ind_adap" id="closing_ind_adap" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_lighter" id="closing_lighter" class="form-control" readonly disabled></td>
                                                <td><input type="number" name="closing_stove" id="closing_stove" class="form-control" readonly disabled></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <button type="button" class="btn btn-primary" disabled>Calculate</button>
                                <button type="submit" id="stockSubmitBtn" class="btn btn-success ml-2" disabled>Save Stock</button>
                            </form>
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
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
    // All dynamic functionality is disabled for the demo.
    document.addEventListener("DOMContentLoaded", function () {
        const dateInput = document.getElementById("date");
        const today = new Date();
        const day = ("0" + today.getDate()).slice(-2);
        const month = ("0" + (today.getMonth() + 1)).slice(-2);
        const year = today.getFullYear();
        dateInput.value = `${year}-${month}-${day}`;
    });
</script>

</body>
</html>
