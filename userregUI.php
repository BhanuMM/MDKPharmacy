<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" href="./css/driverexternal1.css">
</head>
<body>

	<div>
		<ul> 
			<li style="float:right"><a href="./SigninUI.php">Login</a></li> 			
			<li style="float:right"><a href="../index.php#B3">Contact Us</a></li>
			<li style="float:right"><a href="../index.php">Home</a></li>
			<!-- <li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="7%"></li> -->
		</ul>
	</div>

<div class="left">
<img src="test2.jpg" width="40%" height="112.5%" />
</div>
<div class="right">
<h1>Register Now!</h1><br />
<form method="post" class="data" action="userreg.php" style="background-color: white; "> 
<input type="radio" id="pharm" name="pharm" value="p">
<label for="pharm">Pharmacist</label><br>
<input type="radio" id="cashier" name="cashire" value="c">
<label for="cashire">Cashier</label><br>
<input type="radio" id="Couns" name="Couns" value="cs">
<label for="counsellort">counsellor</label>
<table border=0>
<tr>
<td>
NIC:</td><td>
<input type="text" id="Rnic" name="Rnic" size=12 placeholder="NIC number..." required><br /></td></tr>
<tr>
<td>
Name:</td><td>
<input type="text" id="Rfname" name="Rfname" size=15 placeholder="First name..." required><br /></td></tr>

<tr>
<td>
Contact Number:</td><td>
<input type="text" id="Rtelno" name="Rtelno" size=10 placeholder="Contact number..." required><br /></td></tr>

<tr>
<td>
Email:</td><td>
<input type="text" id="Remail" name="Remail" size=40 placeholder="Email address..." required><br /></td></tr>
<tr>
<td>
Username:</td><td>
<input type="text" id="Runame" name="Runame" size=40 placeholder="Username..." required><br /></td></tr>
<tr>
<td>
Password:</td><td>
<input type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required></td></tr>
<tr>
<td>
Re-enter Password:</td><td>
<input type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required></td></tr>
</table>

<input type="reset" value="Refresh">
<input type="submit" name="submitbutton1" Value="Register">
</form>

</div>


	<!--<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency</p>
	</div>-->
</body>
</html>