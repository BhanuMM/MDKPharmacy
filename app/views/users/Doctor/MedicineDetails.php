<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                 Medicine Details
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/doctors/doctordashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/doctors/ viewmedicineavailability">Medicine Details</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

            <div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%;">
<!--            <span class="successadded">-->
<!--            --><?php
//                if(isset($_GET['msg'])){
//                echo $_GET['msg']; // print_r($_GET);
//                }
//                ?>
<!--            </span> <br><br><br>-->
<!-- 
            <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                <li Style="float: left; vertical-align: middle; display: inline;"><h3>Medicine Details</h3></li>
                <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/viewmedicineavailability">
                    <table>
                    <tr>
                        <th><li Style="float: right; vertical-align: middle; display: inline;">
                        <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Medicine Names"></li>
                        </th>
                    <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
             </ul> -->

             
 <div style="margin-left: -3.5%; margin-right: 2%;">

     <br><br>
<ul style="padding-left: 0px; list-style-type: none;  ">
    <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
    <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71.5%;" action="<?php echo URLROOT; ?>/doctors/viewpatientdetails">
        <table>
            <tr>
                <th>
                    <li>
                        <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Patient NIC or Name"> 
                    </li>
                </th>
                <th>
                    <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                </th>
            </tr>
        </table>
    </form>
</ul>
<!--     <br><br>-->

     <span class="successadded" style="color: red; margin-left: -100%; margin-top: 5%;">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br><br>
                <table id="customers">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Importer Name</th>
                      <th>Remaining Quantity</th>
                      <th>Selling Price</th>
                    </tr>
                    <?php foreach($data['med'] as $allmed): ?>

                        <tr>
                            <td><?php echo $allmed->medid;  ?></td>
                            <td><?php echo $allmed->medgenname; ?></td>
                            <td><?php echo $allmed->medbrand;  ?></td>
                            <td><?php echo $allmed->medimporter; ?></td>
                            <td><?php echo $allmed->quantity; ?></td>
                            <td><?php echo  $allmed->medsellprice ?></td>
                           
                        </tr>
                        
                        <?php endforeach; ?>

                  </table>
            </div>

           
        </div>

    </body>
</html>