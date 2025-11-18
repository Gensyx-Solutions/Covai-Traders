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
<title>Covai Traders - Outstanding Report</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
    .dtp { z-index: 10000 !important; }
    .flex { display: flex; }
    .space-x-4 > * + * { margin-left: 1rem; }
    .items-center { align-items: center; }
    .mb-6 { margin-bottom: 1.5rem; }
    .mt-4 { margin-top: 1rem; }
    .mt-6 { margin-top: 1.5rem; }
    .m-2 { margin: 0.5rem; }
    .hidden { display: none; }
    .w-1\/3 { width: 33.333333%; }
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

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <?php include 'sidebar-right.php'; ?>
</aside>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Outstanding Report</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Outstanding</a></li>
                        <li class="breadcrumb-item active">Outstanding Report</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div id="dateSelection" class="flex items-center mb-6">
                                <div class="flex space-x-4">
                                    <div class="form-group">
                                        <label for="fromDate">From Date:</label>
                                        <input type="text" id="fromDate" class="form-control" placeholder="Select Date" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="toDate">To Date:</label>
                                        <input type="text" id="toDate" class="form-control" placeholder="Select Date" disabled>
                                    </div>
                                </div>
                                <button class="btn btn-primary ml-3" disabled>Get Report</button>
                            </div>
                          
                            <div id="reportSection">
                                <div class="header">
                                    <h2><strong>Outstanding Collected</strong> List</h2>
                                </div>
                                <div id="downloadSection" class="mt-6 mb-3 flex space-x-4">
                                  <button class="btn btn-success" disabled>Excel</button>
                                  <button class="btn btn-danger" disabled>PDF</button>
                                  <button class="btn btn-info" disabled>Print</button>
                                </div>
                              
                                <div id="searchSection" class="mt-6 mb-3">
                                  <input
                                      type="text"
                                      id="search"
                                      class="form-control w-1/3"
                                      placeholder="Search..."
                                      disabled
                                  />
                                </div>

                                <div class="table-responsive">
                                    <table id="reportTable" class="table table-bordered table-striped table-hover dataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>OD Collected</th>
                                                <th>Cash</th>
                                                <th>GPAY/Bank</th>
                                            </tr>
                                        </thead>
                                        <tbody id="reportTableBody">
                                            <tr><td colspan="5" class="text-center">No data available for this demo.</td></tr>
                                        </tbody>
                                        <tfoot id="reportTableFooter" class="font-bold"></tfoot>
                                    </table>
                                </div>

                                <div class="flex justify-center items-center mt-4">
                                    <button id="prevBtn" class="btn btn-primary" disabled>Previous</button>
                                    <span id="pageNum" class="m-2">Page 1</span>
                                    <button id="nextBtn" class="btn btn-primary" disabled>Next</button>
                                </div>
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
// All dynamic functionality is disabled for the demo.
document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#fromDate", { dateFormat: "Y-m-d" });
    flatpickr("#toDate", { dateFormat: "Y-m-d" });
});
</script>

</body>
</html>