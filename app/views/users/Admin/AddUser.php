<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:20%; padding:1px 16px; width: 40%">
    

<form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; ">
<div class="form-left">
<!--   
  <div class="centered">  -->
        <h2 style="margin-top: 3%;">
            User Details
        </h2>
        <h5>
            User Role
        </h5>
        <select class="input1" name="Rrole" required>
            <option value="" disabled selected>Choose option</option>
            <option <?php if ($data['role'] == 'admin') echo ' selected="selected"'; ?> value="admin">Administrator</option>
            <option <?php if ($data['role'] == 'cashier') echo ' selected="selected"'; ?> value="cashier">Cashier</option>
            <option <?php if ($data['role'] == 'counsellor') echo ' selected="selected"'; ?> value="counsellor">Counsellor</option>
            <option <?php if ($data['role'] == 'delivery') echo ' selected="selected"'; ?> value="delivery">Delivery</option>
            <option <?php if ($data['role'] == 'doctor') echo ' selected="selected"'; ?> value="doctor">Doctor</option>
            <option <?php if ($data['role'] == 'pharmacist') echo ' selected="selected"'; ?> value="pharmacist">Pharmacist</option>
            <option <?php if ($data['role'] == 'receptionist') echo ' selected="selected"'; ?> value="receptionist">Receptionist</option>

        </select>
        <h5>
            Name
        </h5>
        <input class="input1" type="text" id="Rfname" name="Rfname" size=15 placeholder="A.D.N.Kulathunga" value="<?php echo $data['name']; ?>" required>
        <h5>
            NIC
        </h5>
        <input class="input1" type="text" id="Rnic" name="Rnic" size=12 placeholder="784596212V" value="<?php echo $data['nic']; ?>" required>
        <span class="invalidFeedback">
                <?php echo $data['nicError']; ?>
                </span>
        <h5>
            Phone Number
        </h5>

        <input class="input1" type="text" id="Rtelno" name="Rtelno" size=10 placeholder="075 2223576" value="<?php echo $data['telno']; ?>" required>
        <span class="invalidFeedback">
                <?php echo $data['telError']; ?>
                </span>
        </div>
  <!-- </div> -->
  
  <div class="form-right">
   <!-- <div class="centered"> -->


        <h5>

            Email
        </h5>

        <input class="input1" type="text" id="Remail" name="Remail" size=40 placeholder="abc@gmail.com" value="<?php echo $data['email']; ?>" >

  

  

        <h5>
            Username
        </h5>
        <input class="input1" type="text" id="Runame" name="Runame" size=40 placeholder="abc_78"  value="<?php echo $data['username']; ?>"required>
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
<div style="margin-left:220px;">
        <input class="form-clear" type="reset" value=" Clear ">
        <input class="form-submit" type="submit" name="submitbutton1" Value="Register">
    </form>
</div>
</div></div>


</div>

</body>
</html>

