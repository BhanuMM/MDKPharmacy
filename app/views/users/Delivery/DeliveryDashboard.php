<?php
require APPROOT . '/views/includes/Deliveryhead.php';
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

                <!-- View Assigned Deliveries -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class="fn-names">
                                    Assigned Deliveries         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewuser"><button class="button button1">View</button></a>
                        </div>
                    </div> 

              
                <!-- View Previous Deliveries -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/supplier-icon.png" />
                          <div class="fn-names">
                               Previous Deliveries  
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/admins/viewsupplier"><button class="button button1">View</button></a>
                      </div>
                    </div>

               


<!-- Old Delivery Dashboard -->
<!--         
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; ">
                        <div class="card">
                            <div class="welcome">
                                <img src="https://randomuser.me/api/portraits/men/20.jpg" />
                                <div class="welcome-names">
                                    Welcome <br> Mr.<?php echo $_SESSION['username'] ?>
                                </div>
                            </div>
                        </div>
                   
     <!-- --------------------------------------------------------------------------------------------- -->             
                 
     <!-- <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Assigned Deliveries</h3></li>
    </ul>
   
    <table id="customers">
        <tr>
          <th>Prescription Number</th>
          <th>Date</th>
          <th></th> 
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button class="button button1">View</button></td>
        </tr>
      </table> --> 

     
    </body>
</html> 