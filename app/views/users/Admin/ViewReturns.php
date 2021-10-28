<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>View Returns</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Date"></li></form>
                </ul>
                
                <table id="customers">
                    <tr>
                        <th>Date</th>
                      <th>Supplier Agency</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Return Quantity</th>
                      <th>Reason to return the stock</th>
                    </tr>
                    <tr>
                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td></td>
                      <td></td>
                      <td> </td>
                    </tr>
                    <tr>
                    <td> </td>
                      <td> </td>
                      <td> </td>
                      <td></td>
                      <td></td>
                      <td> </td>
                    </tr>
                    <tr>
                    <td> </td>
                      <td> </td>
                      <td> </td>
                      <td></td>
                      <td></td>
                      <td> </td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>