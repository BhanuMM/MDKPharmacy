<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Current Deliveries</h3></li>
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
                      <td>Pr012</td>
                      <td>G.N.S.Perera</td>
                      <td>123, Colombo Rd, Horana.</td>
                      <td><a href="<?php echo URLROOT ?>/deliverys/viewcurrentsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr014</td>
                      <td>K.N.S.Silva</td>
                      <td>114, Ingiriya Rd, Horana.</td>
                      <td><a href="<?php echo URLROOT ?>/deliverys/viewcurrentsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr015</td>
                      <td>J.N.S.Peiris</td>
                      <td>89, Kalutara Rd, Horana.</td>
                        <td><a href="<?php echo URLROOT ?>/deliverys/viewcurrentsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>
</div>

    </body>
</html>