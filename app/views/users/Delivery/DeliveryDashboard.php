<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>



<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome"> 
            <div class="welcome-names">
                Welcome , Mr.<?php echo ucwords($_SESSION['username'])  ?> !
                <p style="font-size: 14px;">Delivery Person</p>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">

                <!-- View Assigned Deliveries -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/fast-delivery.png" /><br><br>
                                <div class="fn-names" >
                                    Assigned Deliveries         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/deliverys/viewcurrentdeliveries"><button class="button button1">View</button></a>
                        </div>
                    </div> 

              
                <!-- View Previous Deliveries -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/package-box.png" />
                          <div class="fn-names">
                               Previous Deliveries  
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/deliverys/viewpastdeliveries"><button  class="button button1">View</button></a>
                      </div>
                    </div> 
    </body>
</html> 