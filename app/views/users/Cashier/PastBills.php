<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Previous Bill Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" class="input1" placeholder="Bill Number"></li>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Patient ID</th>
                      <th>Views</th>
                      <th>Views</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>