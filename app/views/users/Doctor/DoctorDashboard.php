<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

        <div style="margin-left:15%; margin-right:0%; padding:1px 16px; width: 80%; ">
            <div class="card">
                <div class="welcome">
                        <img src="https://randomuser.me/api/portraits/men/20.jpg" /></li>
                <div class="welcome-names">
                        Welcome <br> Mr.<?php echo $_SESSION['username'] ?>
                </div>
            </div>
        </div>
<!-- --------------------------------------------------------------------------------------------- -->
        
            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">
                <div class="row">
                    <div class="column">
                        <div class="card"><a href="<?php echo URLROOT ?>/doctors/createprescription">
                                <div class="welcome">
                                    <img src="<?php echo URLROOT ?>/public/images/patientdetailsicon.jpg" />
                                    <div class="welcome-names">
                                        + Add Prescription
                                    </div>
                                </div>
                                <button class="button button1">View</button></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card"><a href="<?php echo URLROOT ?>/doctors/viewpatientdetails">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/patientdetailsicon.jpg" />
                                <div class="welcome-names">
                                    Patient Deatils          
                                </div>
                            </div>
                                <button class="button button1">View</button></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card"><a href="<?php echo URLROOT ?>/doctors/viewmedicineavailability"">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/checkmedicineavailabilityicon.png" />
                          <div class="welcome-names">
                             Check Medicine Availability    
                          </div>
                        </div>
                        <button class="button button1">View</button></a>
                      </div>
                    </div>
                    <div class="column">
                      <div class="card"><a href="<?php echo URLROOT ?>/doctors/viewprescriptions">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/prescription.png" />
                          <div class="welcome-names">
                           Prescription Details
                          </div>
                        </div>
                        <button class="button button1">View</button></a>
                      </div>
                    </div>
                </div>
            </div>           

    
    </body>
</html>