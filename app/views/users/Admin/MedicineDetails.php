<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/Admins/addmed"><button class="button button1">Add New Medicine +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Medicine Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Stock"></li>
                </ul>
                
                <table id="customers">
                    <tr>
                        <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Importer Name</th>
                      <th>Dealer</th>
                      <th>Purchase Price</th>
                      <th>Selling Price</th>
                      <th>Profit Margin</th>
<!--                      <th>Update</th>-->
<!--                      <th>Delete</th>-->
                    </tr>
                    <?php foreach($data['medicines'] as $allmedicines): ?>

                        <tr>
                            <td><?php echo $allmedicines->medid; ?></td>
                            <td><?php echo $allmedicines->medgenname; ?></td>
                            <td><?php echo $allmedicines->medbrand; ?></td>
                            <td><?php echo $allmedicines->medimporter; ?></td>
                            <td><?php echo $allmedicines->meddealer; ?></td>
                            <td><?php echo $allmedicines->medpurchprice; ?></td>
                            <td><?php echo $allmedicines->medsellprice; ?></td>
                            <td><?php echo $allmedicines->medprofit; ?></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>