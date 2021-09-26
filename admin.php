<?php 
include "./conn.php";
session_start();
if(!isset($_SESSION["urole"])){
	echo '<script> alert("Restricted page. Please Log In!");</script>';
    echo '<script> location.href="./signinUI.php"</script>';
        }
 ?><html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="./css/signin.css">
</head>
<body>

	<div>
		<ul>
			
			<li style="float:right"><a href="./userregUI.php">Register</a></li>   			
			<li style="float:right"><a href="./logout.php">logout</a></li>
			<li style="float:right"><a href="./index.php">Home</a></li>
			<!-- <li style="float:left"><img src="./img/rushlogo2.png" alt="logo" height="7%"></li> -->
		</ul>
	</div>

	<div class="hdiv">
		<h1 align="center" id=removepadding>M D K HOSPITALS</h1>
		<p id=removepadding>Welcome Back Admin  <?php
        if(isset($_SESSION["uname"]) and isset($_SESSION["urole"])){
          echo  $_SESSION["uname"];
        }
  ?> <br /><br /><p>
	
		<!-- <p id=size1>Haven't registered yet? <br><br>
		<a href="./Rider/RiderReg.php">Register As a Rider</a> OR 
		<a href="./Driver/DriverReg.php">Register As a Driver</a> 
		</p> -->
	</div>

<!--<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency</p>
	</div>-->



</body>
</html>