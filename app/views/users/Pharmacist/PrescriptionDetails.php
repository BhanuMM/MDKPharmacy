<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
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


    <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Prescriptions</h3></li>
        <form method="post" class="data" action="<?php echo URLROOT; ?>/pharmacists/prescriptiondetails">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Patient NIC"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
    </ul>
                
                <table id="customers">
                <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['prescription'] as $allprescriptions): ?>

                        <tr>
                            <td><?php echo $allprescriptions->presid;  ?></td>
                            <td><?php echo $allprescriptions->patname; ?></td>
                            <td><?php echo $allprescriptions->patnic;  ?></td>
                            <td><?php echo $allprescriptions->presdate; ?></td>
                            <td>
                               
                            
                                        
                               <a class="button button1" href="<?php echo URLROOT . "/pharmacists/viewprescriptions/" .  $allprescriptions->presid ?>">
                                   View 
                               </a> 
                               
                              
                               
                               </td>




                        </tr>
                        
                        <?php endforeach; ?>

                  </table>

            </div>

           
        </div>

    </body>
</html>