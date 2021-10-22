<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Create Online Order Bills</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Prescription ID"></li>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr067</td>
                      <td>T.N.H.Silva</td>
                      <td>0756545258</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr098</td>
                      <td>S.T.Amarasiri</td>
                      <td>0777348759</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr092</td>
                      <td>T.U.Fernando</td>
                      <td>0777982453</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                  </table>
            </div>

           
        </div>

    </body>
</html>
