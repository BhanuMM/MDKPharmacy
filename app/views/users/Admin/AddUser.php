<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back button-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                    Add New User 
                    <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                        <li><a href="<?php echo URLROOT ?>/admins/viewuser">User Details</a></li>
                        <li>Supplier Management</li>
                        
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<!--User registration form starts here-->
<div style="margin-left: -4.5%; margin-right: 2%; margin-top: 50%; "> 

    <form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; ">
        <div class="form-left">
            <br>
 
            

            <!--        Left side of the form starts here-->
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
            <input class="input1" type="text" id="Rtelno" name="Rtelno" size=10 placeholder="0752223576" value="<?php echo $data['telno']; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['telError']; ?>
                    </span>

        </div>


<!--  Right side of the form starts here-->
        <div class="form-right">
            <br>
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
            <br>


    <!--            Submit the form details-->
             <div style="float: left; margin-left: 44%;">
            <br><br>
                   <input class="clearBtn" style="  " type="reset"  value=" Clear">
           
       
                    <input class="submitBtn" style="" type="submit" name="submitbutton1"  Value="Register" >
             
            </div>
        </div>
    </form>
</div>

<!-- style="margin-top: -5%; margin-right: 10%; margin-left: -20%;" -->

