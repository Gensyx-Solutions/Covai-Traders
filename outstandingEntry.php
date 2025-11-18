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
<title>Covai Traders - O/S Entry</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .dtp { z-index: 10000 !important; }
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

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="SalesManagement"><img src="new-logo1.png" width="25" alt="Aero"><span class="m-l-10">Covai Traders</span></a>
    </div>
    <?php include 'sidebar.php'; ?>
</aside>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>New O/S Entry</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Outstanding</li>
                        <li class="breadcrumb-item active">New O/S Entry</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Collection and Outstanding</strong> Tracker</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="selectedDate">Select Date:</label>
                                    <div class="form-group">
                                        <input type="text" id="selectedDate" class="form-control datetimepicker" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <button id="singleEntryBtn" class="btn btn-success" disabled>Single Entry</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>OD Collected</strong></h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>OD Collected (Customer)</th>
                                        <th>Cash</th>
                                        <th>GPAY/Bank</th>
                                    </tr>
                                </thead>
                                <tbody id="odCollectedBody"></tbody>
                            </table>
                            <button class="btn btn-primary mt-2" disabled>Add Collected</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Totals</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6"><p><strong>Total for Selected Date:</strong> <span id="totalForSelectedDate">0.00</span></p></div>
                                <div class="col-md-6"><p><strong>OD Collected Total:</strong> <span id="odCollectedTotal">0.00</span></p></div>
                                <div class="col-md-6"><p><strong>Outstanding Total:</strong> <span id="outstandingTotal">0.00</span></p></div>
                                <div class="col-md-6"><p><strong>Final Total:</strong> <span id="finalTotal">0.00</span></p></div>
                            </div>
                            <button class="btn btn-success mt-4" disabled>Save Data</button>
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
$(function() {
    // Initialize date picker for visual purposes but it will be disabled.
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
