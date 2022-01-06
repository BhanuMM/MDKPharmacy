<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a> </span></button>
</div>   

<div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
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
                <a href="<?php echo URLROOT ?>/Admins/checkexpiry"><button class="button button1" style="width: 150px; height: 60px;">Check Expiry Details</button></a>
                <a href="<?php echo URLROOT ?>/Admins/stockreorder"><button class="button button1" style="width: 150px; height: 60px;">Stock Reorder</button></a>
                <ul style="padding-left: 0px; list-style-type: none;  margin-top:75px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Full Stock Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewstock">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 530px; height: 35px; width: 200px;" placeholder="Medicine Name"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
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