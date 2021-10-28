<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>View Return Stocks</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Purchased Date"></li></form>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Purchased Date</th>
                      <th>Medicine ID</th>
                      <th>Supplier Agency Name</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Return Quantity</th>
                      <th>Reason to return the stock</th>
                    </tr>
                    <tr>
                    <td>2020-10-06</td>
                    <td>M1</td>
                    <td>Hayleys Lifesciences Pvt(Ltd)</td>
                    <td>Omez</td>
                    <td>Omeprazole</td>
                    <td>500</td>
                    <td>Expired</td>
                    </tr>
                    <tr>
                    <td>2020-10-07</td>
                    <td>M4</td>
                    <td>Hayleys Lifesciences Pvt(Ltd)</td>
                    <td>Panadol</td>
                    <td>Paracetamol</td>
                    <td>100</td>
                    <td>Damaged</td>
                    </tr>
                    <tr>
                    <td>2020-09-07</td>
                    <td>M4</td>
                    <td>IJ Medicals</td>
                    <td>Amoxil</td>
                    <td>Amoxicillin</td>
                    <td>200</td>
                    <td>Expired</td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>