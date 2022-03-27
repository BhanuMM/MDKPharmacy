<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<!--Back Button-->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top: 60px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Full Stock Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Full Stock Details</li>
                    <li>Purchased Stock</li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>


    <div style="margin-left: 340px; margin-top:1px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
            <?php if(isset($_GET['msg'])){
                echo $_GET['msg']; // print_r($_GET);
            }
            ?>
        </span> <br>

<!--        Page Heading-->
<ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: 5%; margin-left: 70%;" action="<?php echo URLROOT; ?>/admins/purchstock">
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

        <!-- <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/purchstock"> -->

<!--        Table Headings-->
        <table id="customers" style="margin-left: -4%; width: 103%;">
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
                   
<!--Table data-->
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
        <br><br>

    </div>