<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back button-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; box-sizing:initial; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Medicine Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Medicine Details</li>
                    

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
    <div style="margin-left: 23%; margin-top:5px; padding:1px 16px; width: 70%; ">
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
<!-- 
        <a href="<?php echo URLROOT ?>/Admins/addmed">
            <button class="button button1">Add New Medicine +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h3> Medicine Details</h3>
            </li>

            <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewmed">
                <table>
                    <tr>
                        <th>
                            <li Style="float: right; vertical-align: middle; display: inline;">
                                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 530px; height: 35px; width: 200px;" placeholder="Medicine Name">
                            </li>
                        </th>
                        <th>
                            <button style="margin-left: 10px;" class="form-submit">SEARCH</button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul> -->

<div style="margin-left: -45px; font-size: 13px;">
<div style="margin-right: 5%;">
        <a href="<?php echo URLROOT ?>/Admins/addmed" >
<br>
            <button style="float: left; display: inline;" class="button button1">Add New Medicine +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71.5%;" action="<?php echo URLROOT; ?>/admins/viewmed">
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

<br><br><br>
    <span class="successadded" style="color: red; margin-left: -96%; margin-top:12px;">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
    <br>
<!--    <br>-->

        <table id="customers" style="width: 30%;">
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
                <th>Low Stock Quantity</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php foreach($data['med'] as $allmed): ?>
                <tr>
                    <td><?php echo $allmed->medid;  ?></td>
                    <td><?php echo $allmed->medgenname; ?></td>
                    <td><?php echo $allmed->medbrand;  ?></td>
                    <td><?php echo $allmed->medimporter; ?></td>
                    <td><?php echo $allmed->meddealer; ?></td>
                    <td><?php echo $allmed->medpurchprice;  ?></td>
                    <td><?php echo  $allmed->medsellprice ?></td>
                    <td><?php echo  $allmed->medprofit ?></td>
                    <td><?php echo  $allmed->medacslvl?></td>
                    <td><?php echo  $allmed->lowstockqty?></td>
                    <td>
                        <a class="updateBtn" href="<?php echo URLROOT . "/admins/updatemed/" .  $allmed->medid ?>">Update</a>
                    </td>
                    <td>
                        <form action="<?php echo URLROOT . "/admins/deletemed/" . $allmed->medid?>" method="POST">
                            <input class="dltBtn"  Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
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