<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
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

                <!-- Add Patient     -->

                <div class="column">
                        <div class="fn-card">
                            <div class="welcome">
                                <img src="<?php echo URLROOT ?>/public/images/user-icon.png" /><br><br>
                                <div class="fn-names">
                                    Add Patient         
                                </div><br><br>
                            </div>
                            <a href="<?php echo URLROOT ?>/admins/viewuser"><button class="button button1">View</button></a>
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
                            <a href="<?php echo URLROOT ?>/admins/viewreport"><button class="button button1">View</button></a>
                      </div>
                    </div> -->

                <!-- View Doctors -->

                    <div class="column">
                      <div class="fn-card">
                        <div class="welcome">
                          <img src="<?php echo URLROOT ?>/public/images/supplier-icon.png" />
                          <div class="fn-names">
                                View Doctors      
                          </div>
                        </div>
                          <a href="<?php echo URLROOT ?>/admins/viewsupplier"><button class="button button1">View</button></a>
                      </div>
                    </div>

               
     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


    <!-- Old Dashboard  -->

            <!-- <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <a href="<?php echo URLROOT ?>/receptionists/addpatient"><button style="margin-top: 10%;" class="button button1">Add New Patient +</button></a>
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Patient"></li>
                </ul>
               
                <table id="customers">
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>NIC</th>
                        <th>Tel.No</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>

                    </tr>
                    <?php foreach($data['patients'] as $allpatients): ?>

                        <tr>
                            <td><?php echo $allpatients->patid; ?></td>
                            <td><?php echo $allpatients->patname; ?></td>
                            <td><?php echo $allpatients->patnic; ?></td>
                            <td><?php echo $allpatients->pattelno; ?></td>
                            <td><?php echo $allpatients->patadrs; ?></td>
                            <td><?php echo $allpatients->patemail; ?></td>
                            <td><?php echo $allpatients->patdob; ?></td>
                            <td><?php echo $allpatients->patgen; ?></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div> -->

    </body>
</html>