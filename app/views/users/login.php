<?php
   require APPROOT . '/views/includes/loginhead.php';
?>

<!-- <div class="navbar">
   php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div> -->
<div align="center" style="margin-top: 8%;">
            <h2 style="letter-spacing: 5px;">M D K HOSPITALS</h2>
            <p style="font-size: 14px;">Welcome Back!, Please login to your account.<br /><br /><p>
            <form  method="post" action="<?php echo URLROOT; ?>/users/login" style="width:30%; text-align: left;">
                <p>Username:</p>
                <input type="text" id="Runame" name="Runame" style="border: none;" placeholder="Enter your username">
                <hr />
                <br />
                <p>Password:</p>
                <input type="password" id="Rpass" style="border: none; " name="Rpass" placeholder="Enter the password">
                <hr />
				<input type="submit" name="submitbutton4" value="Sign In" class="button button1" style="margin-top: 3%;" >
            </form>
        </div>


<!--<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency</p>
	</div>-->


<!-- 
</body>
</html> -->

<!-- <div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="/users/login" method ="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
               
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
               
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="/users/register">Create an account!</a></p>
        </form>
    </div>
</div> -->
