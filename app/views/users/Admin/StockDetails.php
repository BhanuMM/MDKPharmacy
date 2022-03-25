<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>
<!--Back Button-->
    <div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a>
            </span>
        </button>
    </div>



    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
            <?php if(isset($_GET['msg'])){
                echo $_GET['msg']; // print_r($_GET);
            }
            ?>
        </span>
        <br>

<!--        Links to Add New Stock webpage-->
        <a href="<?php echo URLROOT ?>/Admins/addstock">
            <button class="button button1" style="width: 150px; height: 60px;">Add New Stock</button>
        </a>

        <!--        Links to Purchased Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/purchstock">
            <button class="button button1" style="width: 150px; height: 60px;">Purchased Stocks</button>
        </a>

        <!--        Links to Add Return Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/returnstock">
            <button class="button button1" style="width: 150px; height: 60px;">Add Return Stocks</button>
        </a>

        <!--        Links to Return Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/viewreturns">
            <button class="button button1" style="width: 150px; height: 60px;">Return Stocks</button>
        </a>

        <!--        Links to Check Expiry Details webpage-->
        <a href="<?php echo URLROOT ?>/Admins/checkexpiry">
            <button class="button button1" style="width: 150px; height: 60px;">Expiry Details</button>
        </a>

        <!--        Links to Stock Reorder webpage-->
        <a href="<?php echo URLROOT ?>/Admins/stockreorder">
            <button class="button button1" style="width: 150px; height: 60px;">Stock Reorder</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  margin-top:75px;  ">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h3> Full Stock Details</h3>
            </li>

            <!--Search box-->
            <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewstock">
                <table>
                    <tr>
                        <th>
                            <li Style="float: right; vertical-align: middle; display: inline;">
                                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 530px; height: 35px; width: 200px;" placeholder="Medicine Name"></li>
                        </th>
                        <th>
                            <button style="margin-left: 10px;" class="form-submit">SEARCH</button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>

<!--        Table Headings-->
        <table id="customers">
            <tr>
                <th>Medicine ID</th>
                <th>Supplier Agency Name</th>
                <th>Brand Name</th>
                <th>Generic Name</th>
                <th>Remaining Quantity</th>
            </tr>

<!--            Table data-->
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