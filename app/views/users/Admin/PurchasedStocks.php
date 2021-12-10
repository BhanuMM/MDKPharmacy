<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Stock Purchasing Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Medicine ID"></li></form>
                </ul>

                <table id="customers">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Supplier Agency Name</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Quantity</th>
                      <th>Purchase unit price</th>
                      <th>Selling unit price</th>
                      <th>Purchase Date</th>
                      <th>Expiry Date</th>
                    </tr>
                    <tr>
                      <td>M1</td>
                      <td>Hayleys Lifesciences Pvt(Ltd)</td>
                      <td>Omez</td>
                      <td>Omeprazole</td>
                      <td>500</td>
                      <td>10.00</td>
                      <td>15.00</td>
                      <td>2021-10-06</td>
                      <td>2022-10-06</td>
                    </tr>
                    <tr>
                      <td>M2</td>
                      <td>IJ Medicals</td>
                      <td>panadol</td>
                      <td>Paracetamol</td>
                      <td>1000</td>
                      <td>3.00</td>
                      <td>5.00</td>
                      <td>2021-11-06</td>
                      <td>2023-10-06</td>
                    </tr>

                     <!-- <?php foreach($data['stocks'] as $allstocks): ?>
                        <tr>
                            <td><?php echo $allstocks->itemcode; ?></td>
                            <td><?php echo $allstocks->quantity; ?></td>
                            <td><?php echo $allstocks->purchprice; ?></td>
                            <td><?php echo $allstocks->sellprice; ?></td>
                            <td><?php echo $allstocks->purchdate; ?></td>
                            <td><?php echo $allstocks->expdate; ?></td>
                        </tr>
                        <?php endforeach; ?> -->

                  </table>

            </div>

           
        </div>

    </body>
</html>