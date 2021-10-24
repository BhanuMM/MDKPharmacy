<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="NIC"></li></form>
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
                        <th>View Prescriptions</th>

                    </tr>
                    <tr>
                      <td>P004</td>
                      <td>H.J.K.Gunasena</td>
                      <td>547896321V</td>
                      <td>0756547485</td>
                      <td>145,Kandy Rd, Colombo.</td>
                      <td>gunasena@gmail.com</td>
                      <td>1954-10-23</td>
                      <td>Male</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/patientprofile"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>P012</td>
                      <td>K.L.Chandradasa</td>
                      <td>647346321V</td>
                      <td>0777747485</td>
                      <td>14,Horana Rd, Colombo.</td>
                      <td>chandradasa@gmail.com</td>
                      <td>1964-10-23</td>
                      <td>Male</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/patientprofile"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>P045</td>
                      <td>G.N.S.Silva</td>
                      <td>847896321V</td>
                      <td>0716547485</td>
                      <td>145,Kandy Rd, Colombo.</td>
                      <td>nilanthi@gmail.com</td>
                      <td>1984-11-23</td>
                      <td>Female</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/patientprofile"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>