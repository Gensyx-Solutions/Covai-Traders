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
<title>Covai Traders - OD Collected List</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .dtp { z-index: 10000 !important; }
    .export-btn:disabled {
        background-color: #9ca3af; /* gray-400 */
        cursor: not-allowed;
        opacity: 0.7;
    }
    #pagination button { margin: 0 2px; }
    #pagination button:disabled { background-color: #ccc; cursor: not-allowed; }
    #page-numbers button.active { background-color: #1d4ed8; color: white; cursor: default; }
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
                    <h2>OD Collected List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Outstanding</li>
                        <li class="breadcrumb-item active">OD Collected List</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>OD Collected</strong> Entries</h2>
                            <div id="currentMonthDisplay" class="float-right text-lg font-semibold"></div>
                        </div>
                        <div class="body">
                            <div class="d-flex flex-wrap justify-content-between mb-3">
                                <div>
                                    <button id="downloadExcel" class="export-btn btn btn-success mr-2" disabled>Excel</button>
                                    <button id="downloadPDF" class="export-btn btn btn-danger mr-2" disabled>PDF</button>
                                    <button id="printTable" class="export-btn btn btn-info mr-2" disabled>Print</button>
                                    <button id="previousMonthBtn" class="btn btn-primary mr-2" disabled>Previous Month</button>
                                    <button id="currentMonthBtn" class="btn btn-secondary" style="display: none;" disabled>Current Month</button>
                                </div>
                                <div class="mt-2 mt-md-0">
                                    <input type="text" id="search" class="form-control" placeholder="Search OD Collected..." disabled>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>OD Collected</th>
                                            <th class="text-right">Cash</th>
                                            <th class="text-right">GPAY/Bank</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="odCollectedTable">
                                        <tr><td colspan="6" class="text-center py-4">No data available for this demo.</td></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="3" class="text-right">Total (Month):</td>
                                            <td id="totalCash" class="text-right">0.00</td>
                                            <td id="totalGpayBank" class="text-right">0.00</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <!-- Pagination Controls -->
                            <div id="pagination" class="d-flex justify-content-between align-items-center mt-4">
                                <div class="text-muted">
                                    Showing <span id="start-row">0</span> to <span id="end-row">0</span> of <span id="total-items">0</span> OD Collected Results
                                </div>
                                <div class="d-flex">
                                    <button id="prev-btn" class="btn btn-primary mr-2" disabled>Previous</button>
                                    <div id="page-numbers" class="d-flex align-items-center"></div>
                                    <button id="next-btn" class="btn btn-primary ml-2" disabled>Next</button>
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
<script src="assets/plugins/momentjs/moment.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
    // All dynamic functionality is disabled for the demo.
    $(function() {
        const monthNames = ["January", "February", "March", "April", "May", "June",
                            "July", "August", "September", "October", "November", "December"];
        const now = new Date();
        $('#currentMonthDisplay').text(`${monthNames[now.getMonth()]} ${now.getFullYear()}`);
    });
</script>
</body>
</html>