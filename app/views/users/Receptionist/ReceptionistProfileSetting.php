<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; ">
        <h2 style="margin-top: 3%;">
            User Details
        </h2>
        <h5>
            Name
        </h5>
        <input class="input-ps" type="text" id="Rfname" name="Rfname" size=15 placeholder="Name..." readonly>
        
        <h5>
            NIC
        </h5>
        <input class="input-ps" type="text" id="Rnic" name="Rnic" size=12 placeholder="NIC number..." readonly>

        <h5>
            Email
        </h5>
        <input class="input-ps" type="text" id="Remail" name="Remail" size=40 placeholder="Email address..." readonly>

        <h5>
            Username
        </h5>
        <input class="input-ps" type="text" id="Runame" name="Runame" size=40 placeholder="Username..." readonly>

        <h5>
           Current Password
        </h5>
        <input class="input-ps" type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required>

        <h5>
           New Password
        </h5>
        <input class="input-ps" type="password" id="Rpass" name="Rpass" minlength="4" placeholder="***********" required>

        <h5>
            Re-enter Password
        </h5>
        <input class="input-ps" type="password" id="Repass" name="Repass" minlength="4" placeholder="***********" required>

        <br><br><br><br>
        <input class="button button1" type="reset" value="Refresh">
        <input class="form-submit" type="submit" name="submitbutton1" Value="Save Settings">
        <br><br><br><br>
    </form>
</div>


</div>


