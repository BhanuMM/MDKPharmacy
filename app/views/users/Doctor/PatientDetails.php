<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                 Patient Details
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Patient Details</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>


<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">

    <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>

<!--<span class="successadded">-->
<!--     --><?php
//      if(isset($_GET['msg'])){
//      echo $_GET['msg']; // print_r($_GET);
//      }
//     ?>
<!--</span> <br>-->

<br>
 
 <div style="margin-left: -4.5%; margin-right: 2%;"> 

      
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

    
               
                <table id="customers" style="margin-left: 1%;">
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>NIC</th>
                        <th>Tel.No</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>View Prescriptions</th>

                    </tr>
                    <?php foreach($data['pat'] as $allpat): ?>
                    <tr>
                        <td><?php echo $allpat->patid ?></td>
                        <td><?php echo $allpat->patname ?></td>
                        <td><?php echo $allpat->patnic ?></td>
                        <td><?php echo $allpat->pattelno ?></td>
                        <td><?php echo $allpat->patadrs ?></td>
                        <td><?php echo $allpat->patemail ?></td>
                        <td><?php echo $allpat->patdob ?></td>
                        <td><?php echo $allpat->patgen ?></td>
                        <td align="center">
                            <a class="updateBtn" href="<?php echo URLROOT ."/doctors/allprescriptions/".$allpat->patid ?>" >view</a>
                        </td>


                    </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>
<br><br>
    </body>
</html>