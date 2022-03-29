<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>
<!--Back Button-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Full Stock Details
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Full Stock Details</li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>




    <div style="margin-left: 300px; margin-top:5px; padding:1px 16px; width: 72%; ">
<!--        <span class="successadded">-->
<!--            --><?php //if(isset($_GET['msg'])){
//                echo $_GET['msg']; // print_r($_GET);
//            }
//            ?>
<!--        </span>-->

        <!--    Say there is no such data-->


<!--        Links to Add New Stock webpage-->
        <a href="<?php echo URLROOT ?>/Admins/addstock">
            <button class="button button1" style="width: 150px; height: 60px; margin-right:15.3px; margin-left:15.3px;">Add New Stock</button>
        </a>

        <!--        Links to Purchased Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/purchstock">
            <button class="button button1" style="width: 150px; height: 60px; margin-right:15.3px; margin-left:15.3px;">Purchased Stocks</button>
        </a>

        <!--        Links to Add Return Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/returnstock">
            <button class="button button1" style="width: 150px; height: 60px; margin-right:15.3px;margin-left:15.3px;">Add Return Stocks</button>
        </a>

        <!--        Links to Return Stocks webpage-->
        <a href="<?php echo URLROOT ?>/Admins/viewreturns">
            <button class="button button1" style="width: 150px; height: 60px; margin-right:15.3px;margin-left:15.3px;">Return Stocks</button>
        </a>

        <!--        Links to Check Expiry Details webpage-->
        <a href="<?php echo URLROOT ?>/Admins/checkexpiry">
            <button class="button button1" style="width: 150px; height: 60px; margin-right:15.3px;margin-left:15.3px;">Expiry Details</button>
        </a>

        <!--        Links to Stock Reorder webpage-->
        <a href="<?php echo URLROOT ?>/Admins/stockreorder">
            <button class="button button1" style="width: 150px; height: 60px; margin-left:15.3px;">Stock Reorder</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: 5%; margin-left: 71.5%;" action="<?php echo URLROOT; ?>/admins/viewstock">
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
<br>
        <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br><br>
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