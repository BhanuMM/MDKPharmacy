<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>

<!--Online Orders Prescriptions --> 

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
        <div class="welcome-card">
            <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
                <div class="welcome-names">
                    Welcome , Mr.<?php echo $_SESSION['username'] ?> !
                </div>
            </div>
        </div>


    <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Online Prescriptions</h3></li>
        <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
            <li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Order ID"></li></form>
    </ul>
                
                <table id="customers">
                    <tr>
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Or001</td>
                      <td>G.K.W.Weerasinha</td>
                      <td>0112589632</td>
                      <td><a href="<?php echo URLROOT?>/pharmacists/onlineorderprepare"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                    <td>Or002</td>
                      <td>B.U.W.Gamage</td>
                      <td>0772589632</td>
                      <td><a href="<?php echo URLROOT?>/pharmacists/onlineorderprepare"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                    <td>Or003</td>
                      <td>R.K.W.Medagama</td>
                      <td>0712589632</td>
                      <td><a href="<?php echo URLROOT?>/pharmacists/onlineorderprepare"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>
