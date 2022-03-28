<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back button-->
<div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a>
            </span>
        </button>
    </div>

    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">

        <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span>

<!--        <span class="successadded">-->
<!--            --><?php //if(isset($_GET['msg'])){
//                echo $_GET['msg']; // print_r($_GET);
//            }
//            ?>
<!--        </span>-->
        <br>

        <a href="<?php echo URLROOT ?>/Admins/addsurg">
            <button class="button button1">New Surgical +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h3> Surgical Details</h3>
            </li>

            <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewsurgicals">
                <table>
                    <tr>
                        <th>
                            <li Style="float: right; vertical-align: middle; display: inline;">
                                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 530px; height: 35px; width: 200px;" placeholder="Item Name">
                            </li>
                        </th>
                        <th>
                            <button style="margin-left: 10px;" class="form-submit">SEARCH</button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>

        <table id="customers">
            <tr>
                <th>Surgical ID</th>
                <th>Surgical Name</th>
                <th>Brand Name</th>
                <th>Importer Name</th>
                <th>Dealer</th>
                <th>Purchase Price</th>
                <th>Selling Price</th>
                <th>Profit Margin</th>
<!--                <th>Access Level</th>-->
                <th>Low Stock Quantity</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php foreach($data['surg'] as $allsurg): ?>
                <tr>
                    <td><?php echo $allsurg->surgid;  ?></td>
                    <td><?php echo $allsurg->surgname; ?></td>
                    <td><?php echo $allsurg->surgbrand;  ?></td>
                    <td><?php echo $allsurg->surgimporter; ?></td>
                    <td><?php echo $allsurg->surgdealer; ?></td>
                    <td><?php echo $allsurg->surgpurchprice;  ?></td>
                    <td><?php echo  $allsurg->surgsellprice ?></td>
                    <td><?php echo  $allsurg->surgprofit ?></td>
<!--                    <td>--><?php //echo  $allsurg->medacslvl?><!--</td>-->
                    <td><?php echo  $allsurg->lowstockqty?></td>
                    <td>
                        <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT . "/admins/updatesurg/" .  $allsurg->surgid ?>">Update</a>
                    </td>
                    <td>
                        <form action="<?php echo URLROOT . "/admins/deletesurg/" . $allsurg->surgid?>" method="POST">
                            <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>

            <script>
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected medicine ?");
            }
            </script>