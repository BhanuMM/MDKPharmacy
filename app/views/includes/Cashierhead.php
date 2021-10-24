<?php
if (!isset($_SESSION['user_id']) && ($_SESSION['urole']!="cashier")){
    header('location: ' . URLROOT . '/users/logout');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <title>
        Stocks
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/StyleSheet.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/csscode.css">
</head>
<body style="font-family: arial;">

<!-- --------------------------------------------------------------------------------------------- -->
<div class="sidebar">
    <header><img src="<?php echo URLROOT ?>/public/images/1.png" style="width: 70px;"/><br><br><strong>MDK HOSPITALS</strong></header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "<?php echo URLROOT ?>/cashiers/cashierdashboard">Dashboard</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/inpatientbills">Inpatient Bills</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/onlineorderbills">Online Order Bills</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/outpatientbills">Out-Patient Bills</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/pastbills">Previous Bills</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/medicineavailability">Medicine Availability</a></li>
        <li><a href = "<?php echo URLROOT ?>/cashiers/profilesettings">Profile Settings</a></li>
       <!-- <li><a href = "--><?php //echo URLROOT ?><!--/cashiers/prescriptionview"> Users</a></li> -->
<!--        <li><a href = "../Admin/ReportDetails.html">Reports </a></li>-->
<!--        <li><a href = "../Admin/SupplierDetails.html">Suppliers</a></li>-->
<!--        <li><a href = "../Admin/StockDetails.html">Stocks</a></li>-->
    </ul>
</div>

<div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff;  padding-top:10px; padding-bottom: 0px; height: 4.7%; ">
    <p style="margin-left: 20%; margin-top: 0; padding-left: 2%;  padding-right: 10%; float: left;"  id="myDiv"></p>
 <ul id="list2">
    <!-- Date and Time -->
  <!-- <li style="padding-left: 4%; padding-right: 60%; float: left;"><div id="myDiv"></div></li>  -->

<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Settings.png" alt="Settings" height="15px" style="opacity: 0.5;"></li>-->
<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Notification.png" alt="Notifications" height="15px" style="opacity: 0.5;"></li>-->
<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Message.png" alt="messages" height="15px" style="opacity: 0.5;"></li>-->
        <li><div class="dropdown">
                <span> 
                    <img src="<?php echo URLROOT ?>/public/images/drop-icon.png" alt="View" height="20px" style="opacity: 0.5; vertical-align:middle;">
                </span>

                <div class="dropdown-content">
                    <p><a href="<?php echo URLROOT ?>/cashiers/profilesettings"><button class="btn-ddc">Settings</button></a></p>

                    <p> <a href="<?php echo URLROOT ?>/users/logout"> <button class="btn-ddc">Logout</button> </a></p>

                </div>
            </div>
        </li>
        <li style="color: #afafaf;margin-left: 5%;"> | </li>
        <li><img src="<?php echo URLROOT ?>/public/images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>
        
        <li style="color: #888888;"><?php echo $_SESSION['username'] ?></li>

        

        
       

    </ul>
</div>
<script src="<?php echo URLROOT ?>/public/js/main.js"></script>