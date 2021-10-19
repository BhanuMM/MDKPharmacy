<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <title>
        Patient Details
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/StyleSheet.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/csscode.css">
</head>
<body style="font-family: arial;">


<!-- --------------------------------------------------------------------------------------------- -->
<div class="sidebar">
    <header>MDK HOSPITALS</header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "<?php echo URLROOT ?>/receptionists/receptionistdashboard">Dashboard</a></li>
        <li><a href = "#">Prescriptions </a></li>
        <li><a href = "#">Patients </a></li>
        <li><a href = "#">Profile Settings</a></li>
    </ul>
</div>

<div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 10%; padding-top:0px; padding-bottom: 0px; height: 4.7%; ">
    <ul id="list2">
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