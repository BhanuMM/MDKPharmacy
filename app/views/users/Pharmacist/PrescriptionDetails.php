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


    <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Prescriptions</h3></li>
        <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
        <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" class="input1" placeholder="Search Prescriptions"></li>
    </ul>
                
                <table id="customers">
                    <tr>
                      <th>Patient ID</th>
                      <th>Views</th>
                      <th>Views</th>
                      <th>Views</th>
                      <th>Views</th>
                      <th>Views</th>
                      <th>Country</th>
                      <th>Update</th>
                    </tr>
                    <tr>
                      <td>Data</td>
                      <td>Data</td>
                      <td>Data</td>
                      <td>Data</td>
                      <td>Data</td>
                      <td>Data</td>
                      <td>Data</td>
                      <td><a href="<?php echo URLROOT?>/pharmacists/viewprescription">view</a></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>