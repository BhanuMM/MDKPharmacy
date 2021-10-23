<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Past Deliveries</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Search Deliveries"></li></form>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Address</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr005</td>
                      <td>B.K.B.Kulathunga</td>
                      <td>14, Colombo Rd, Horana.</td>
                      <td><a href="<?php echo URLROOT ?>/deliverys/viewpastsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr006</td>
                      <td>G.L.Peiris</td>
                      <td>13, Ingiriya Rd, Horana.</td>
                      <td><a href="<?php echo URLROOT ?>/deliverys/viewpastsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr007</td>
                      <td>G.H.S.Perera</td>
                      <td>12, Kalutara Rd, Horana.</td>
                        <td><a href="<?php echo URLROOT ?>/deliverys/viewpastsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>
</div>
    </body>
</html>