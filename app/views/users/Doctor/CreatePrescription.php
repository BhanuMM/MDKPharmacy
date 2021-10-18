<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="../Images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline; "><input class="input1" type="text" placeholder="Search Patients"></li>
                    <li Style="float: middle; vertical-align: middle; display: inline;"><h3>Select Patient</h3></li>
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
                  </table><br /><br /><br /><br />
                  <a href="<?php echo URLROOT ?>/doctors/addprescription"><button class="button button1" style="margin-left: 81%;">Create Prescription</button></a>
            </div>

           
        </div>

    </body>
</html>