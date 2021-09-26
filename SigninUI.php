<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="./css/signin.css">
</head>
<body>

	<div>
		<ul>
			
			<li style="float:right"><a href="./userregUI.php">Register</a></li>   			
			<li style="float:right"><a href="./index.php#B3">Contact Us</a></li>
			<li style="float:right"><a href="./index.php">Home</a></li>
			<!-- <li style="float:left"><img src="./img/rushlogo2.png" alt="logo" height="7%"></li> -->
		</ul>
	</div>

	<div class="hdiv">
		<h1 align="center" id=removepadding>M D K HOSPITALS</h1>
		<p id=removepadding>Welcome Back!, Please login to your account.<br /><br /><p>
		<form method="post" action="signin.php">
			<p id=textdecors id=removepadding>Username:</p>
			<input type="text" id="Runame" name="Runame" placeholder="Enter your username">
			<br />
			<p id=textdecors id=removepadding>Password:</p>
			<input type="password" id="Rpass" name="Rpass" placeholder="Enter the password">
			<br /><br />
			<input type="submit" name="submitbutton4" value="Sign In">
		</form>
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