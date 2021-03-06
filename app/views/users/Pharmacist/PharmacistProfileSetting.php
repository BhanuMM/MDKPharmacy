<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Profile Settings                 <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li>Online Prescriptions</li>
                        <li>Profile Settings</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<div style="margin-left: 350px; margin-top:50px; margin-right:0%; font-family: 'Poppins', sans-serif;padding:1px 16px; width: 70%; ">
    <form method="post" class="data" action="<?php echo URLROOT; ?>/pharmacists/profilesettings/<?php echo $data['psid'] ?>" style="background-color: white; ">
          <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['wrongp'])){
                     echo $data['wrongp']; // print_r($_GET);
                 }
                 ?>
                </span>
        <h2 style="margin-top: 3%;">
            User Details
        </h2>
        <h5>
            Username
        </h5>

        <input class="input-ps" type="text" id="Runame" name="Runame"  value="<?php echo $data['psusername']?>" size=40  readonly >
        <h5>
            Name
        </h5>

        <input class="input-ps" type="text" id="Rfname" name="Rfname"  value="<?php echo $data['psname']?>" size=15  >


        <h5>
            NIC
        </h5>

        <input class="input-ps" type="text" id="Rnic" name="Rnic"  value="<?php echo $data['psnic']?>" size=12 >


        <h5>
            Email
        </h5>

        <input class="input-ps" type="text" id="Remail" name="Remail" size=40 value="<?php echo $data['psemail']?>" >
        <h5>
            Current Password
        </h5>
        <input class="input-ps" type="password" id="Rpass" name="Rpass" minlength="4" placeholder="Enter Current Password" >

        <div class="ps-btn" style="margin-top:1%">

            <br>
            <input class="form-submit" type="submit" name="submitbutton1" Value="Save Settings" >
            <input class="button button1"  id="changepwd" value="Update Password >>">


        </div>



        <div class="change-pwd-class" style="margin-left: 47%; margin-top:-33% " >
            <div class="close" style="margin-right:25%;">+</div>


            <h5>
                New Password
            </h5>
            <input class="input-ps" type="password" id="Rpass" name="Rnewpass" minlength="4" placeholder="Enter New Password">

            <h5>
                Re-enter Password
            </h5>
            <input class="input-ps" type="password" id="Repass" name="Repass" minlength="4" placeholder="Re-Enter New Password" >
        </div>

    </form>
<br><br>
<br>


    <!--<button style="margin-top: 10%;" >Update Password</button><br>-->
    <script>
        document.getElementById('changepwd').addEventListener('click',function(){
            document.querySelector('.change-pwd-class').style.display = 'block';
            document.getElementById("#Rnewpass").required = true;

        });
        document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.change-pwd-class').style.display = 'none';
            document.getElementById("Rpass").required = false;
        })
    </script>


</div>

