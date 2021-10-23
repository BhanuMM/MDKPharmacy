<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/Admins/addreport"><button class="button button1">Create New Report +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Generated Reports</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Search Reports"></li></form>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Report ID</th>
                      <th>Date</th>
                      <th>Type</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>R001</td>
                      <td>2021-09-25</td>
                      <td>Daily Summary</td>
                      <td><button class="button button1">View</button></td>
                    </tr>
                    <tr>
                      <td>R003</td>
                      <td>2021-08-25</td>
                      <td>Monthly Summary</td>
                      <td><button class="button button1">View</button></td>
                    </tr>
                    <tr>
                      <td>R005</td>
                      <td>2021-07-25</td>
                      <td>Daily Summary</td>
                      <td><button class="button button1">View</button></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>