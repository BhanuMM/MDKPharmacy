<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Search Patients"></li></form>
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