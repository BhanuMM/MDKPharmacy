<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="../Images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline; "><input class="input1" type="text" placeholder="Search Patients"></li>
                    <li Style="float: middle; vertical-align: middle; display: inline;"><h3>Select Patient</h3></li>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Patient ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>Patient Age</th>
                      <th>Create Prescription</th>
                    </tr>
                    <tr>
                      <td>P001</td>
                      <td>G.N.S.Silva</td>
                      <td>874596521V</td>
                      <td>31</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/addprescription"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <tr>
                      <td>P002</td>
                      <td>H.K.L.Fernando</td>
                      <td>985647125V</td>
                      <td>23</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/addprescription"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <tr>
                      <td>P003</td>
                      <td>D.G.Amarasena</td>
                      <td>751235412V</td>
                      <td>45</td>
                      <td><a href="<?php echo URLROOT ?>/doctors/addprescription"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                  </table><br /><br /><br /><br />
                  
            </div>

           
        </div>

    </body>
</html>