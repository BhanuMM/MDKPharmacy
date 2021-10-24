<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Create Online Order Bills</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Telephone Number"></li></form>
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
