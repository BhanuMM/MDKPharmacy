<?php
   require APPROOT . '/views/includes/nav.php';
?>
            <div style="margin-left:17%; padding:1px 16px; width: 40%">
            <form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; "> 
                <h2 style="margin-top: 3%;">
                    User Details
                </h2>
                <h5>
                    Name
                </h5>
                <input type="text" id="Rfname" name="Rfname" size=15 placeholder="Name..." required>
                <h5>
                    NIC
                </h5>
                <input type="text" id="Rnic" name="Rnic" size=12 placeholder="NIC number..." required>
                <h5>
                    Phone Number
                </h5>
                <input type="text" id="Rtelno" name="Rtelno" size=10 placeholder="Contact number..." required>
                <h5>
                    Email
                </h5>
                <input type="text" id="Remail" name="Remail" size=40 placeholder="Email address..." >
                <h5>
                    Username
                </h5>
                <input type="text" id="Runame" name="Runame" size=40 placeholder="Username..." required> 
                <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
                <h5>
                   Password
                </h5>
                <input type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required>
                <h5>
                    Re-enter Password
                </h5>
                <input type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required>
                <br><br>
                <input type="reset" value="Refresh">
                <input type="submit" name="submitbutton1" Value="Register">
            </form>
            </div>

           
        </div>

    </body>
</html>




	<!--<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency</p>
	</div>-->


<!-- <div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="php echo URLROOT; ?>/users/register"
                >
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div> -->
