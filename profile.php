<?php
// This is a static demo page. No server-side logic is needed.
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Covai Traders - Profile</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- Select2 -->
<link rel="stylesheet" href="assets/plugins/select2/select2.css" />
<!-- Dropify -->
<link rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">
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
                    <h2>User Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12"><button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button></div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="#"><img id="profile_picture_img" src="assets/images/profile_av.jpg" class="rounded-circle" alt="profile-image"></a>
                            <h4 class="m-t-10" id="username_display">Guest</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <form id="upload_form" enctype="multipart/form-data">
                                <input type="file" class="dropify" name="profilePicture" disabled>
                                <button type="submit" class="btn btn-primary btn-block m-t-10" disabled>Update Picture</button>
                                <button type="button" id="remove_picture_btn" class="btn btn-danger btn-block m-t-10" style="display: none;" disabled>Remove Picture</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header"><h2><strong>Account</strong> Details</h2></div>
                        <div class="body">
                            <form id="account_form">
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="Guest" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="guest@example.com" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="currentPasswordDisplay">Current Password:</label>
                                    <div class="input-group">
                                        <input type="password" id="currentPasswordDisplay" class="form-control" value="********" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary toggle-password" type="button" data-target="currentPasswordDisplay" disabled>
                                                <i class="zmdi zmdi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" disabled>Update Details</button>
                            </form>
                            <hr>
                            <form id="password_form">
                                <div class="form-group">
                                    <input type="password" id="oldPassword" name="oldPassword" class="form-control" placeholder="Current Password" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="New Password" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="confirmNewPassword" class="form-control" placeholder="Confirm New Password" disabled>
                                </div>
                                <button type="submit" class="btn btn-primary" disabled>Update Password</button>
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
<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script>
// Static page, no JS needed for data fetching or updates.
$(function() {
    $('.dropify').dropify();
});
</script>
</body>
</html>
