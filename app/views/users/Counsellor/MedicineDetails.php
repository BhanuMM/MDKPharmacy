<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>

            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Medicine Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Medicine"></li>
                </ul>
               
                <table id="customers">
                <tr>
                      <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Remaining Quantity</th>
                      <th>Unit Price</th>
                    </tr>
                    <tr>
                      <td>M001</td>
                      <td>Omeprazole</td>
                      <td>Omez</td>
                      <td>Heyleys</td>
                      <td>10.00</td>
                    </tr>
                    <tr>
                      <td>M002</td>
                      <td>Paracetamol</td>
                      <td>Panadol</td>
                      <td>Coniferr International</td>
                      <td>7.00</td>
                    </tr>
                    <tr>
                      <td>M003</td>
                      <td>Amoxicillin</td>
                      <td>Amoxil</td>
                      <td>Agvet Pharma</td>
                      <td>12.00</td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>