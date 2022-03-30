<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Prescriptions                    <p>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li><a href="<?php echo URLROOT ?>/pharmacists/ prescriptiondetails">Prescriptions</a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
<!--    <span class="successadded">-->
<!--         --><?php
//         if(isset($_GET['msg'])){
//         echo $_GET['msg']; // print_r($_GET);
//        }
//         ?>
<!--        </span> <br>-->
<br><br>
         
 <div style="margin-left: -4.5%; margin-right: 2%;"> 

<ul style="padding-left: 0px; list-style-type: none;  ">
    <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
<!--    <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71.5%;" action="--><?php //echo URLROOT; ?><!--/pharmacists/prescriptiondetails">">-->
<!--        <table>-->
<!--            <tr>-->
<!--                <th>-->
<!--                    <li>-->
<!--                        <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Patient NIC""> -->
<!--                    </li>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>-->
<!--                </th>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </form>-->
</ul>

     <br><br>
     <span class="successadded" style="color: red; margin-left: -73.25%;">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span>
        <table id="customers">
            <tr>
                <th>Prescription ID</th>
                <th>Patient Name</th>
                <th>Patient NIC</th>
                <th>Time</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php foreach($data['pres'] as $allpres): ?>
                <tr>
                    <td><?php echo $allpres->presid ?></td>
                    <td><?php if (($allpres->pattype)=="adult") {echo $allpres->patname;} else {echo  $allpres->fullname. "(18-)";} ?></td>
                    <td><?php echo $allpres->patnic ?></td>
                    <td><?php echo $allpres->pretime ?></td>
                    <td><?php echo $allpres->presdate ?></td>
                    <td><div style="margin-top: 10%; margin-bottom: 10%;"> <a class="updateBtn" href="<?php echo URLROOT. "/pharmacists/viewprescription/".$allpres->presid ?>">View</a></div></td>
                </tr>
            <?php endforeach; ?>
        </table>


            </div>

           
        </div>

