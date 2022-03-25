<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> << </a> </span></button>
                </div>  

<div style="margin-left: 340px; margin-top:1px; padding:1px 16px; width: 70%; ">
    <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>

                <ul style="padding-left: 0px; list-style-type: none; margin-top:25px; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Stock Purchasing Details</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/purchstock">
                    <table>
                        <tr>
                        <th><li Style="float: right; vertical-align: middle; display: inline;">
                        <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 430px; height: 35px; width: 200px;" placeholder="Medicine Name"></li>
                        </th>
                        <th>
                        <button style="margin-left: 10px" class="form-submit">SEARCH</button>
                        </th>
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
                      <th>Quantity</th>
                      <th>Purchase unit price</th>
                      <th>Selling unit price</th>
                      <th>Purchase Date</th>
                      <th>Expiry Date</th>
                    </tr>
                   

                     <?php foreach($data['purchstock'] as $allstocks): ?>
                        <tr>
                            <td><?php echo $allstocks->medid; ?></td>
                            <td><?php echo $allstocks->medimporter; ?></td>
                            <td><?php echo $allstocks->medbrand; ?></td>
                            <td><?php echo $allstocks->medgenname; ?></td>
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