<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>
<?php
if(isset($_GET['msg'])){
    echo ('<script>alert("User Details Updated")</script>'); // print_r($_GET);
}
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
            <div class="welcome-names">
                Welcome ,<?php echo $_SESSION['username'] ?> !
                <p style="font-size: 14px;">Reciptionist</p>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">

                <!-- Add Patient     -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class="fn-names">
                                    Add Patient         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/receptionists/registerpatient"><button class="button button1">View</button></a>
                        </div>
                    </div> 

                 <!-- View Patient  -->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/report-icon.png" />
                          <div class="fn-names">
                             View Patients  
                          </div>
                        </div>
                            <a href="<?php echo URLROOT ?>/receptionists/viewpatients"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- View Doctors -->

                    <!-- <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/supplier-icon.png" />
                          <div class="fn-names">
                                View Doctors      
                          </div>
                        </div>
                          <a href="#"><button class="button button1">View</button></a>
                      </div>
                    </div> -->

               
     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        



