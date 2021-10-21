<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/Admins/addstock"><button class="button button1">Add New Stock +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Stock Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Stock"></li>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Item Code</th>
                      <th>Quantity</th>
                      <th>Purchase unit price</th>
                      <th>Selling unit price</th>
                      <th>Purchase Date</th>
                      <th>Expiry Date</th>
<!--                      <th>Update</th>-->
<!--                      <th>Delete</th>-->
                    </tr>
                    <?php foreach($data['stocks'] as $allstocks): ?>

                        <tr>
                            <td><?php echo $allstocks->itemcode; ?></td>
                            <td><?php echo $allstocks->quantity; ?></td>
                            <td><?php echo $allstocks->purchprice; ?></td>
                            <td><?php echo $allstocks->sellprice; ?></td>
                            <td><?php echo $allstocks->purchdate; ?></td>
                            <td><?php echo $allstocks->expdate; ?></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>

    </body>
</html>