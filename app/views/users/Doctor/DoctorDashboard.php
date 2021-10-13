<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

        <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; ">
            <div class="card">
                <div class="welcome">
                        <img src="https://randomuser.me/api/portraits/men/20.jpg" /></li>
                <div class="welcome-names">
                        Welcome <br> Mr.Doctor         
                </div>
            </div>
        </div>
<!-- --------------------------------------------------------------------------------------------- -->
        
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1150px; ">
                <div class="row">
                    <div class="column">
                        <div class="card"><a href="./PatientDetails.html">
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
                        <div class="card"><a href="./MedicineDetails.html">
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
                      <div class="card"><a href="./Prescriptions.html">
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