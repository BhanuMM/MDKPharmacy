<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>

            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">

                <!-- <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; "> -->
                    
                    <div class="card">
                        <div class="welcome">
                                <img src="https://randomuser.me/api/portraits/men/20.jpg" /></li>
                                <div class="welcome-names">
                                    Welcome , Mr.<?php echo $_SESSION['username'] ?> !
                                </div>
                        </div>
                    </div> 


                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Past Deliveries</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Deliveries"></li>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Address</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><button class="button button1">View</button></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><button class="button button1">View</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="button button1">View</button></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>