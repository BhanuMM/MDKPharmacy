<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
             
            <div class="welcome-names">
                Welcome , Mr.<?php echo ucwords($_SESSION['username'])  ?> !
                <p style="font-size: 14px;">Admin</p>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">
                <!-- user management card     -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class="fn-names">
                                    User Management         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewuser"><button class="button button1">View</button></a>
                        </div>
                    </div> 

                <!-- Report Management Card -->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/report-icon.png" />
                          <div class="fn-names">
                             Report Management 
                          </div>
                        </div>
                            <a href="<?php echo URLROOT ?>/admins/viewReport"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- Supplier Management Card -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/supplier-icon.png" />
                          <div class="fn-names">
                                Supplier Management       
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/admins/viewsupplier"><button class="button button1">View</button></a>
                      </div>
                    </div>

                <!-- Stock Management Card -->

                    <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/stock-icon.png" /><br>
                                <div class="fn-names">
                                    Stock Management         
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewstock">  <button class="button button1">View</button></a>
                        </div>
                    </div>
               
            </div>
            <div class="row">
              <!-- Medicine Management Card -->
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

                <div class="row">
                    <!-- Medicine Management Card -->
                    <div class="column">
                        <div class="fn-card" style="margin-top: 150px">

                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/first-aid-kit.png" />
                                <div class="fn-names">
                                    Surgical Items
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewsurgicals"> <button class="button button1">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


