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
                <a href="<?php echo URLROOT ?>/Admins/addstock"><button class="button button1" style="width: 150px; height: 60px;">Add New Stock</button></a>
                <a href="<?php echo URLROOT ?>/Admins/purchasedstocks"><button class="button button1" style="width: 150px; height: 60px;">Purchased Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/returnstocks"><button class="button button1" style="width: 150px; height: 60px;">Add Return Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/viewreturns"><button class="button button1" style="width: 150px; height: 60px;">Return Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/checkexpiry"><button class="button button1" style="width: 150px; height: 60px;">Check Expiry</button></a>
                <a href="<?php echo URLROOT ?>/Admins/stockreorder"><button class="button button1" style="width: 150px; height: 60px;">Stock Reorder</button></a>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Full Stock Details</h3></li>
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
                      <th>Remaining Quantity</th>
                    </tr>
                    <tr>
                      <td>M1</td>
                      <td>Hayleys Lifesciences Pvt(Ltd)</td>
                      <td>Omez</td>
                      <td>Omeprazole</td>
                      <td>500</td>
                    </tr>
                    <tr>
                      <td>M2</td>
                      <td>IJ Medicals</td>
                      <td>panadol</td>
                      <td>Paracetamol</td>
                      <td>1000</td>
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