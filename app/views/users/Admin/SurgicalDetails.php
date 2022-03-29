<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back button-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Surgical Items
                    <p>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                        <li>Surgical Items </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
</div>

    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">

<!--        <span class="successadded" style="color: red">-->
<!--                 --><?php
//                 if(isset($data['norecord'])){
//                     echo ('No Record Found'); // print_r($_GET);
//                 }
//                 ?>
<!--                </span>-->

<!--        <span class="successadded">-->
<!--            --><?php //if(isset($_GET['msg'])){
//                echo $_GET['msg']; // print_r($_GET);
//            }
//            ?>
<!--        </span>-->
        <br>

        
<div style="margin-left: -45px; font-size: 13px;">
<div style="margin-right: 5%;">
        <a href="<?php echo URLROOT ?>/Admins/addsurg" >
<br>
            <button style="float: left; display: inline;" class="button button1">New Surgical +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 75.5%;" action="<?php echo URLROOT; ?>/admins/viewsurgicals">
                <table>
                    <tr>
                        <th>
                            <li>
                                <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Medicine Name"> 
                            </li>
                        </th>
                        <th>
                            <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>
        </div>
    <br><br>
    <span class="successadded" style="color: red;">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span>
    <br><br>
        

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
                        <a class="updateBtn" href="<?php echo URLROOT . "/admins/updatesurg/".  $allsurg->surgid ?>"> Update</a>
                    </td>
                    <td>
                        <form action="<?php echo URLROOT . "/admins/deletesurg/" . $allsurg->surgid?>" method="POST">
                            <input class="dltBtn" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
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