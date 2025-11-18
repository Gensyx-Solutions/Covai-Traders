<?php
// Static sidebar for demo purposes.
$profilePicture = 'assets/images/profile_av.jpg'; // Default image
?>
<div class="menu">
    <ul class="list">
        <li>
            <div class="user-info">
                <a class="image" href="Profile"><img src="<?php echo htmlspecialchars($profilePicture); ?>" alt="User"></a>
                <div class="detail">
                    <h4>Hi, Guest</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </li>

        <li class="active"><a href="Dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Customer</span></a>
            <ul class="ml-menu">
                <li><a href="ViewCustomer">View Customer</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Sales</span></a>
            <ul class="ml-menu">
                <li><a href="SalesEntry">Sales Entry</a></li>
                <li><a href="SalesList">Sales List</a></li>
                <li><a href="SalesListDate">Sales List with Date</a></li>
                <li><a href="SalesReport">Sales Report</a></li>
                <li><a href="SalesOverView">Sales Overview</a></li>
            </ul>
        </li>
        
        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-alert-circle-o"></i><span>Outstanding</span></a>
            <ul class="ml-menu">
                <li><a href="NewOutstanding">O/S Entry</a></li>
                <li><a href="ViewOutstanding">OD Collected List</a></li>
                <li><a href="odSelectedDate.html">OD Collected List with Date</a></li>
                <li><a href="OutstandingReport">Outstanding Report</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-storage"></i><span>Stock</span></a>
            <ul class="ml-menu">
                                <li><a href="StockEntry">Stock Entry</a></li>
                <li><a href="StockList">Stock List</a></li>
                <li><a href="StockReport">Stock Report</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-truck"></i><span>Purchase</span></a>
            <ul class="ml-menu">
                <li><a href="NewPurchase">Purchase Entry</a></li>
                <li><a href="ViewPurchase">Purchase List</a></li>
                <li><a href="PurchaseReport">Purchase Report</a></li>
            </ul>
        </li>

        <li><a href="https://covaitraders.in/accounts/Accounts" target="_blank"><i class="zmdi zmdi-swap-alt"></i><span>Switch GST Acc</span></a></li>

        <li><a href="https://covaitraders.in/accounts/Inventory" target="_blank"><i class="zmdi zmdi-swap-alt"></i><span>Switch INV Acc</span></a></li>

        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
            <ul class="ml-menu">
                <li><a href="Profile">Profile</a></li>
                <li><a href="Security">Change Password</a></li>
            </ul>
        </li>

        <li><a href="Logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>

    </ul>
</div>