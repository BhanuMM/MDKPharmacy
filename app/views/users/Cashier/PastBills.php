<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Previous Bill Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" class="input1" placeholder="Bill Number"></li>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr001</td>
                      <td>D.S.Kulathunga</td>
                      <td>785236954V</td>
                      <td>2021-10-12</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr002</td>
                      <td>R.S.Perera</td>
                      <td>697854124V</td>
                      <td>2021-10-23</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr003</td>
                      <td>D.N.Silva</td>
                      <td>854565751V</td>
                      <td>2021-10-14</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>