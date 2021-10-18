<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>


<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
            <div class="welcome-names">
                Welcome , Mr.<?php echo $_SESSION['username'] ?> !
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">

                <!-- View Bills    -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class="fn-names">
                                    View Bills         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewuser"><button class="button button1">View</button></a>
                        </div>
                    </div> 


                <!-- Check Medicine Availability -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/supplier-icon.png" />
                          <div class="fn-names">
                                Medicine 
                                Availability      
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/admins/viewsupplier"><button class="button button1">View</button></a>
                      </div>
                    </div>

                 <!-- Online Deliveries -->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/stock-icon.png" /><br>
                                <div class="fn-names">
                                    Online Deliveries      
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewstock">  <button class="button button1">View</button></a>
                        </div>
                    </div>
               
            </div> 
           