<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>

            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Previous Bill Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Bill ID"></li></form>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Bill ID</th>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>B001</td>
                      <td>Pr001</td>
                      <td>B.N.Perera</td>
                      <td>785263951V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>B002</td>
                      <td>Pr002</td>
                      <td>S.N.Silva</td>
                      <td>765266781V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>B003</td>
                      <td>Pr003</td>
                      <td>P.B.Peiris</td>
                      <td>985263951V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>