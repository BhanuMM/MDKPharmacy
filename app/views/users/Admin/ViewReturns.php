<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Return Stock Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Full Stock Details</li>
                    <li>Return Stock Details</li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<br><br>


        <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>



    <!--        <span class="successadded">-->
    <!--                 --><?php //if(isset($_GET['msg'])){
    //                     echo $_GET['msg']; // print_r($_GET);
    //                 }
    //                 ?>
    <!--        </span>-->
    <br>

    <div style="margin-left: 19.5%; margin-top:1%; padding:1px 0px 1px 16px; width: 70%; ">
         <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71%;" action="<?php echo URLROOT; ?>/admins/viewreturn">
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

        <table id="customers" >
            <tr>
                <th>Purchased Date</th>
                <th>Medicine ID</th>
                <th>Supplier Agency Name</th>
                <th>Brand Name</th>
                <th>Generic Name</th>
                <th>Return Quantity</th>
                <th>Reason to return the stock</th>
            </tr>


            <?php foreach($data['allreturnstock'] as $allmedicines): ?>
                <tr>
                    <td><?php echo $allmedicines->purchdate; ?></td>
                    <td><?php echo $allmedicines->medid; ?></td>
                    <td><?php echo $allmedicines->medimporter; ?></td>
                    <td><?php echo $allmedicines->medbrand; ?></td>
                    <td><?php echo $allmedicines->medgenname; ?></td>
                    <td><?php echo $allmedicines->rquantity; ?></td>
                    <td><?php echo $allmedicines->reason; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>