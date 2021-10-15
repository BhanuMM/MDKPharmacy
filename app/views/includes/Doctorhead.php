<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <title>
        Dashboard
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/StyleSheet.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/csscode.css">
</head>
<body style="font-family: arial;">


<div class="sidebar">
    <header>MDK HOSPITALS</header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "<?php echo URLROOT ?>/doctors/doctordashboard">Dashboard</a></li>
        <li><a href = "<?php echo URLROOT ?>/doctors/viewprescriptions">Prescriptions </a></li>
        <li><a href = "<?php echo URLROOT ?>/doctors/viewpatientdetails">Patients</a></li>
        <li><a href = "<?php echo URLROOT ?>/doctors/viewmedicineavailability">Medicine Availability</a></li>
        <li><a href = "#">Profile Settings</a></li>
    </ul>
</div>

<div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 10%; padding-top:0px; padding-bottom: 0px; height: 4.7%; ">
    <ul id="list2">
        <a href = "<?php echo URLROOT ?>/doctors/doctordashboard">
        <li style="padding-left: 4%; padding-right: 60%; float: left;"><button class="button"><img src="<?php echo URLROOT ?>/public/images/Back.png" alt="Return to Dashboard" height="15px" style="opacity: 0.5;">Back to Dashboard</button></li>
        </a>
<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Settings.png" alt="Settings" height="15px" style="opacity: 0.5;"></li>-->
<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Notification.png" alt="Notifications" height="15px" style="opacity: 0.5;"></li>-->
<!--        <li><img src="--><?php //echo URLROOT ?><!--/public/images/Message.png" alt="messages" height="15px" style="opacity: 0.5;"></li>-->
        <li style="color: #afafaf;margin-left: 5%;"> | </li>
        <li><div class="dropdown">
                <span> <img src="<?php echo URLROOT ?>/public/images/Drop.png" alt="View" height="8px" style="opacity: 0.5;"></span>
                <div class="dropdown-content">
                    <p><button class="btn-ddc">Settings</button></p>
                    <p><button class="btn-ddc">Logout</button></p>
                </div>
            </div>
        </li>
        <li style="color: #888888;"><?php echo $_SESSION['username'] ?></li>
        <li><img src="<?php echo URLROOT ?>/public/images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>

    </ul>
</div>