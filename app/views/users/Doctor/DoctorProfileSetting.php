<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 320px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <form method="post" class="data" action="<?php echo URLROOT; ?>/users/register" style="background-color: white; ">
        <h2 style="margin-top: 3%;">
            User Details
        </h2>
        <h5>
            Name
        </h5>

        <input class="input-ps" type="text" id="Rfname" name="Rfname" size=15 placeholder="A.D.N.Kulathunga" readonly>

        
        <h5>
            NIC
        </h5>

        <input class="input-ps" type="text" id="Rnic" name="Rnic" size=12 placeholder="784596212V" readonly>


        <h5>
            Email
        </h5>

        <input class="input-ps" type="text" id="Remail" name="Remail" size=40 placeholder="abc@gmail.com" readonly>


        <h5>
            Username
        </h5>

        <input class="input-ps" type="text" id="Runame" name="Runame" size=40 placeholder="abc_78" readonly>
        </div>
<div class="change-pwd-class">
        <div class="close">+</div>
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
</div>
<div class="ps-btn" style="margin-left: 340px; margin-top:7%">
        
        
        <button id="change-pwd" style="font-family: 'Poppins', sans-serif;">Update Password</button><br>
        <input class="button button1" style="font-family: 'Poppins', sans-serif;" type="reset" value="Refresh">
        <input class="form-submit" style="font-family: 'Poppins', sans-serif;" type="submit" name="submitbutton1" Value="Save Settings">
        <br><br><br><br>
    </form>
</div>
</div>

<script>
  document.getElementById('change-pwd').addEventListener('click',function(){
        document.querySelector('.change-pwd-class').style.display = 'block';
        
  });
  document.querySelector('.close').addEventListener('click',function(){
      document.querySelector('.change-pwd-class').style.display = 'none';
  })
</script>


</div>


