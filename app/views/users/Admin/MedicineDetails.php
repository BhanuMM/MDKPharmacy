<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/Admins/addmed"><button class="button button1">Add New Medicine +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Medicine Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Generic Name"></li></form>
                </ul>
             <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET); //remember to add semicolon
                 }
                 ?>
                </span>
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
                        <th>Access Level</th>
<!--                      <th>Update</th>-->
<!--                      <th>Delete</th>-->
                    </tr>
                    <?php foreach($data['medicines'] as $allmedicines): ?>

                        <tr>
                            <td>M<?php echo $allmedicines->medid; ?></td>
                            <td><?php echo $allmedicines->medgenname; ?></td>
                            <td><?php echo $allmedicines->medbrand; ?></td>
                            <td><?php echo $allmedicines->medimporter; ?></td>
                            <td><?php echo $allmedicines->meddealer; ?></td>
                            <td><?php echo $allmedicines->medpurchprice; ?></td>
                            <td><?php echo $allmedicines->medsellprice; ?></td>
                            <td><?php echo $allmedicines->medprofit; ?></td>
                            <td><?php echo $allmedicines->medacslvl; ?></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>