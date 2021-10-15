<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<div style="margin-left:15%; margin-right:0%; padding:1px 16px; width: 80%; ">
    <div class="card">
        <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" alt="">
            <div class="welcome-names">
                Welcome <br> Mr.<?php echo $_SESSION['username'] ?>
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        

            <div style="margin-left:0%; margin-right:0%; padding:1px 16px; width: 100%; ">

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/usermanagementicon.png" />
                                <div class="welcome-names">
                                    User Management         
                                </div>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewuser"><button class="button button1">View</button></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="welcome">
                            <img src="<?php echo URLROOT ?>/public/images/reportmanagementicon.png" />
                          <div class="welcome-names">
                             Report Management 
                          </div>
                        </div>
                            <a href="../Admin/ReportDetails.html"><button class="button button1">View</button></a>
                      </div>
                    </div>
                    <div class="column">
                      <div class="card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/suppliermanagementicon.png" />
                          <div class="welcome-names">
                                Supplier Management       
                          </div>
                        </div>
                          <a href="../Admin/SupplierDetails.html"><button class="button button1">View</button></a>
                      </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/stockmanagementicon.png" />
                                <div class="welcome-names">
                                    Stock Management         
                                </div>
                            </div>
                            <a href="../Admin/StockDetails.html">  <button class="button button1">View</button></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/suppliermanagementicon.png" />
                                <div class="welcome-names">
                                    Medicine Management
                                </div>
                            </div>
                        <a href="../Admin/SupplierDetails.html"> <button class="button button1">View</button></a>
                    </div>
                </div>
            </div>
     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


        
    
        
     
    </body>
</html>