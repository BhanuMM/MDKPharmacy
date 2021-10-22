<?php
require APPROOT . '/views/includes/Adminhead.php';
?>
<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; ">
        <h2 style="margin-top: 3%;">
            User Details
        </h2>
        <h5>
            User Role
        </h5>
        <select class="input1" name="Rrole" required>
            <option value="" disabled selected>Choose option</option>
            <option value="admin">Administrator</option>
            <option value="cashier">Cashier</option>
            <option value="counsellor">Counsellor</option>
            <option value="delivery">Delivery</option>
            <option value="doctor">Doctor</option>
            <option value="owner">Owner</option>
            <option value="pharmacist">Pharmacist</option>
            <option value="receptionist">Receptionist</option>

        </select>
        <h5>
            Name
        </h5>
        <input class="input1" type="text" id="Rfname" name="Rfname" size=15 placeholder="Name..." value="<?php echo $data['name']; ?>" required>
        <h5>
            NIC
        </h5>
        <input class="input1" type="text" id="Rnic" name="Rnic" size=12 placeholder="NIC number..." value="<?php echo $data['nic']; ?>" required>

        <h5>
            Phone Number
        </h5>
        <input class="input1" type="text" id="Rtelno" name="Rtelno" size=10 placeholder="Contact number..." value="<?php echo $data['telno']; ?>"  min="10" max="10" required>
        <h5>
            Email
        </h5>
        <input class="input1" type="text" id="Remail" name="Remail" size=40 placeholder="Email address..." value="<?php echo $data['email']; ?>" >
        <h5>
            Username
        </h5>
        <input class="input1" type="text" id="Runame" name="Runame" size=40 placeholder="Username..."  value="<?php echo $data['username']; ?>"required>
        <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
                </span>
        <h5>
            Password
        </h5>
        <input class="input1" type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required>
        <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
        </span>

        <h5>
            Re-enter Password
        </h5>
        <input class="input1" type="password" id="Repass" name="Repass" minlength="4" placeholder="***********" required>
        <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
                </span>
        <br><br>
<!--      //if($data['viewalert']=="view"){-->
<!--         echo '<script> alert(" Updated Successfully!");</script>'; }-->
        <input class="button button1" type="reset" value="Refresh">
        <input class="button button1" type="submit" name="submitbutton1" Value="Register">
    </form>
</div>


</div>

</body>
</html>

