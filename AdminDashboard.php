<?php 
include "./conn.php";
session_start();
// if(!isset($_SESSION["urole"])){
// 	echo '<script> alert("Restricted page. Please Log In!");</script>';
//     echo '<script> location.href="./signinUI.php"</script>';
//         }
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="MDK/jpg" href="./Images/MDK.jpg"/>
        <style>
            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                width: 150px;
                height: 60px;
              }
              
              .button1:hover {
                background-color: #008CBA;
                color: white;
              }
              .center {
                margin: 0;
                position: absolute;
                top: 20%;
                left: 55%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
              }
            </style>
        <title>
            Dashboard
        </title>
        <link rel="stylesheet" href="StyleSheet.css">
    </head>
    <body style="font-family: arial;">

        <ul id="list">
            <li><a class="active" href="#home">MDK HOSPITAL</a></li>
            <li><a href="./CashierDashboard.html">Dashboard </a></li>
            <li><a href="#contact">Inbox</a></li>
            <li><a href="#about">Calender</a></li>
            <li><a href="#about">Help Center</a></li>
            <li><a href="#about">Settings</a></li>
        </ul>
        
        <div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 80%; padding-top:0px; padding-bottom: 0px; height: 55px; ">
            <ul id="list2">
                
                <li style="color: #afafaf;"> | </li>
                <li><img src="./Images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>
                <li style="color: #888888;"><?php
        if(isset($_SESSION["uname"]) and isset($_SESSION["urole"])){
          echo  $_SESSION["uname"];
        }
  ?></li><li style="color: #afafaf;"> | </li>
  <li style="color: #afafaf;"> <a href="logout.php"> Logout</a> </li>
                <li><img src="./Images/Drop.png" alt="View" height="8px" style="opacity: 0.5;"> </li>
                
                
            </ul>
        </div>
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <div class="center">
                <a href="UserRegistration.php"><button class="button button1"> User Management</button></a>
                    <button class="button button1">Report Management</button>
                    <button class="button button1">Stock Management</button>
                    <button class="button button1">Supplier Management</button>
                </div>
            </div>

           
        </div>

    </body>
</html>