<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
            <div class="welcome-names">
                Welcome ,Dr.<?php echo $_SESSION['username'] ?> !
                <p style="font-size: 14px;">Doctor</p>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">

                <!-- Add Prescription     -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/report-icon.png" /><br><br>
                                <div class="fn-names">
                                    Add Prescription         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/doctors/createprescription"><button class="button button1">View</button></a>
                        </div>
                    </div> 

                <!-- Patient Details-->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/user-icon.png" />
                          <div class="fn-names">
                             Patient History
                          </div>
                        </div>
                            <a href="<?php echo URLROOT ?>/doctors/viewpatientdetails"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- Check Medicine Availability -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/medicine-icon.png" />
                          <div class="fn-names">
                                Medicine Availability
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/doctors/viewmedicineavailability"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- Prescription Details

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/stock-icon.png" /><br>
                                <div class="fn-names">
                                    Prescription Details
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/doctors/allprescriptions">  <button class="button button1">View</button></a>
                        </div>
                    </div>
               
            </div> -->
            <div class="row">

              <!-- Medicine Management Card
                <div class="column">
                    <div class="fn-card">

                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/medicine-icon.png" />
                                <div class="fn-names">
                                    Medicine Management
                                </div>
                            </div>
                        <a href="<?php echo URLROOT ?>/admins/viewmed"> <button class="button button1">View</button></a>
                    </div>
                </div>
            </div> -->

     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


