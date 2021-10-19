<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <title>
        Reports
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/StyleSheet.css">
</head>
<body style="font-family: arial;">

<!-- --------------------------------------------------------------------------------------------- -->
<div class="sidebar">
    <header><img src="<?php echo URLROOT ?>/public/images/1.png" style="width: 70px;"/><br><br><strong>MDK HOSPITALS</strong></header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "../Admin/AdminDashboard.html">Dashboard</a></li>
        <li><a href = "../Admin/UserDetails.html"> Users</a></li>
        <li><a href = "../Admin/ReportDetails.html">Reports </a></li>
        <li><a href = "../Admin/SupplierDetails.html">Suppliers</a></li>
        <li><a href = "../Admin/StockDetails.html">Stocks</a></li>
    </ul>
</div>


<div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 10%; padding-top:0px; padding-bottom: 0px; height: 4.7%; ">
    <ul id="list2">
        <li style="padding-left: 4%; padding-right: 60%; float: left;"><button class="button"><img src="<?php echo URLROOT ?>/public/images/Back.png" alt="Return to Dashboard" height="15px" style="opacity: 0.5;">Back to Dashboard</button></li>
        <!-- <li><img src="<?php echo URLROOT ?>/public/images/Settings.png" alt="Settings" height="15px" style="opacity: 0.5;"></li> -->
        <!-- <li><img src="<?php echo URLROOT ?>/public/images/Notification.png" alt="Notifications" height="15px" style="opacity: 0.5;"></li> -->
        <!-- <li><img src="<?php echo URLROOT ?>/public/images/Message.png" alt="messages" height="15px" style="opacity: 0.5;"></li> -->
        <li style="color: #888888;"><?php echo $_SESSION['username'] ?></li>
        <li><img src="<?php echo URLROOT ?>/public/images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>
        <li style="color: #afafaf;"> | </li>
        <li><div class="dropdown">
                <span> <img src="<?php echo URLROOT ?>/public/images/Settings.png" alt="View" height="8px" style="opacity: 0.5;"></span>
                <div class="dropdown-content">
                    <p><button class="btn-ddc">Settings</button></p>
                    <p> <a href="<?php echo URLROOT ?>/users/logout"> <button class="btn-ddc">Logout</button> </a></p>
                </div>
            </div>
        </li>

    </ul>
</div>