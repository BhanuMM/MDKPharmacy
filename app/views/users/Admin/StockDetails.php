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
                <a href="<?php echo URLROOT ?>/Admins/purchstock"><button class="button button1" style="width: 150px; height: 60px;">Purchased Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/returnstock"><button class="button button1" style="width: 150px; height: 60px;">Add Return Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/viewreturns"><button class="button button1" style="width: 150px; height: 60px;">Return Stocks</button></a>
                <a href="<?php echo URLROOT ?>/Admins/checkexpiry"><button class="button button1" style="width: 150px; height: 60px;">Check Expiry</button></a>
                <a href="<?php echo URLROOT ?>/Admins/stockreorder"><button class="button button1" style="width: 150px; height: 60px;">Stock Reorder</button></a>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Full Stock Details</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/viewstock">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Medicine Name"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
                </ul>

                <table id="customers">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Supplier Agency Name</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Remaining Quantity</th>
                    </tr>
                    
                     <?php foreach($data['stocks'] as $allstocks): ?>
                        <tr>
                            <td><?php echo $allstocks->medid; ?></td>
                            <td><?php echo $allstocks->medimporter; ?></td>
                            <td><?php echo $allstocks->medbrand; ?></td>
                            <td><?php echo $allstocks->medgenname; ?></td>
                            <td><?php echo $allstocks->quantity; ?></td>
                        </tr>
                        <?php endforeach; ?>

                  </table>

            </div>

           
        </div>

    </body>
</html>