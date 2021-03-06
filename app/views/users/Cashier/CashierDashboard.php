<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
            <div class="welcome-names">
                Welcome , Mr.<?php echo ucwords($_SESSION['username'])  ?> !
                <p style="font-size: 14px;">Cashier</p>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 110%; ">

                <div class="row">

                <!-- MDK Patient Prescriptions -->
    
                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class= "fn-names">
                                    Inpatient Bills
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/cashiers/inpatientbills"><button class="button button1">View</button></a>
                        </div>
                    </div> 

                <!-- New Outpatient Bill -->

                <div class="column">
                    <div class="fn-card">

                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/order.png" />
                                <div class="fn-names">
                                    Outpatient Bills
                                </div>
                            </div>
                        <a href="<?php echo URLROOT ?>/cashiers/outpatientbills"> <button class="button button1">View</button></a>
                    </div>
                </div>
                <!-- Online Order Bills -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/stock-icon.png" /><br>
                                <div class="fn-names">
                                   Online Order Bills        
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/cashiers/onlineorderbills">  <button class="button button1">View</button></a>
                        </div>
                    </div>
               
            </div>
            <div class="row">

                <!-- View Previous Bills -->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/report-icon.png" />
                          <div class="fn-names">
                             Previous Bills
                          </div>
                        </div>
                            <a href="<?php echo URLROOT ?>/cashiers/pastbills"><button class="button button1">View</button></a>
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
                          <a href="<?php echo URLROOT ?>/cashiers/medicineavailability"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- Online Deliveries -->


<!--                <div class="column">-->
<!--                    <div class="fn-card">-->
<!---->
<!--                            <div class="welcome">-->
<!--                                <img src="--><?php //echo URLROOT ?><!--/public/images/medicine-icon.png" />-->
<!--                                <div class="fn-names">-->
<!--                                    Online Deliveries-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        <a href="--><?php //echo URLROOT ?><!--/cashiers/"> <button class="button button1">View</button></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div> -->

     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


