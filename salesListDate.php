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
<title>Covai Traders - Sales List by Date</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .dtp { z-index: 10000 !important; }
    #salesTable_filter { display: none; } /* Hide default datatable search */
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
                    <h2>Sales List by Date</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="SalesList">Sales</a></li>
                        <li class="breadcrumb-item active">Sales List by Date</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <!-- Date Selection -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Select Date</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="selectDate" class="form-control datetimepicker" placeholder="Please choose a date..." disabled>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <button id="fetchSalesBtn" class="btn btn-primary" disabled>Get Sales</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Data Display -->
            <div id="salesContent" class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Sales List</strong> for <span id="displayDate"></span></h2>
                        </div>
                        <div class="body">
                            <!-- Totals Summary -->
                            <div class="row clearfix mb-3">
                                <div class="col-md-3"><p><strong>Total:</strong> <span id="totalForSelectedDate">0.00</span></p></div>
                                <div class="col-md-3"><p><strong>OD Collected:</strong> <span id="odCollectedTotal">0.00</span></p></div>
                                <div class="col-md-3"><p><strong>Outstanding:</strong> <span id="outstandingTotal">0.00</span></p></div>
                                <div class="col-md-3"><p><strong>Final Total:</strong> <span id="finalTotal">0.00</span></p></div>
                            </div>
                            <!-- Action Buttons and Search -->
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <button id="exportExcel" class="btn btn-success" disabled>Excel</button>
                                    <button id="exportPdf" class="btn btn-danger" disabled>PDF</button>
                                    <button id="printData" class="btn btn-info" disabled>Print</button>
                                </div>
                                <div class="w-25">
                                    <input type="text" id="customSearch" class="form-control" placeholder="Search..." disabled>
                                </div>
                            </div>
                            <!-- Sales Table -->
                            <div class="table-responsive">
                                <table id="salesTable" class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th><th>Date</th><th>Name</th><th>Remarks</th>
                                            <th>12L</th><th>12E</th><th>17L</th><th>17E</th>
                                            <th>SRG</th><th>Adap</th><th>Stove</th><th>Ltr</th><th>Hose</th><th>Hyd</th>
                                            <th>Amt</th><th>Dep</th><th>Paid</th><th>OD</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td colspan="19" class="text-center">No data available for this demo.</td></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="4" class="text-right">Total</td>
                                            <td id="total_load12kg">0</td><td id="total_empty12kg">0</td>
                                            <td id="total_load17kg">0</td><td id="total_empty17kg">0</td>
                                            <td id="total_srg">0</td><td id="total_adap">0</td>
                                            <td id="total_stove">0</td><td id="total_lighter">0</td>
                                            <td id="total_hose">0</td><td id="total_hydralic">0</td>
                                            <td id="total_totalAmount">0.00</td><td id="total_deposit">0.00</td>
                                            <td id="total_amountPaid">0.00</td><td id="total_amountOD">0.00</td>
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
<script src="assets/plugins/momentjs/moment.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
$(function() {
    // Initialize date picker for visual representation
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false,
        defaultDate: moment()
    });

    // Initialize DataTable with empty data for demo purposes
    $('#salesTable').DataTable({
        data: [],
        columns: [
            { title: "#" }, { title: "Date" }, { title: "Name" }, { title: "Remarks" },
            { title: "12L" }, { title: "12E" }, { title: "17L" }, { title: "17E" },
            { title: "SRG" }, { title: "Adap" }, { title: "Stove" }, { title: "Ltr" }, { title: "Hose" }, { title: "Hyd" },
            { title: "Amt" }, { title: "Dep" }, { title: "Paid" }, { title: "OD" },
            { title: "Actions" }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        responsive: true,
        pageLength: 30,
        dom: 'Bfrtip',
        buttons: []
    });
});
</script>

</body>
</html>
