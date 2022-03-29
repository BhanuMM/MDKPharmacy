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
                    <li><a href="<?php echo URLROOT ?>/doctors/doctordashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/doctors/viewpatientdetails">Patient Details</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">

    <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>

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

        <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Elders</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Children</button>
        </div>

        <div id="already" class="w3-container w3-display-container city">
                <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <p>

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
                  </p>
                </div>

                <div id="one" class="w3-container w3-display-container city" style="display:none">
                <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <p>
                <table id="customers" style="margin-left: 1%;">
                    <tr>
                        <th>Child ID</th>
                        <th>Patient Name</th>
                        <th>Guardian NIC</th>
                        <th>Tel.No</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>View Prescriptions</th>

                    </tr>
                    <?php foreach($data['child'] as $allchild): ?>
                    <tr>
                        <td><?php echo $allchild->childelderid ?></td>
                        <td><?php echo $allchild->fullname ?></td>
                        <td><?php echo $allchild->patnic ?></td>
                        <td><?php echo $allchild->pattelno ?></td>
                        <td><?php echo $allchild->patadrs ?></td>
                        <td><?php echo $allchild->patemail ?></td>
                        <td><?php echo $allchild->childelderdob ?></td>
                        <td><?php echo $allchild->childeldergen ?></td>
                        <td align="center">
                            <a class="updateBtn" href="<?php echo URLROOT ."/doctors/allchildprescriptions/".$allchild->childelderid ?>" >view</a>
                        </td>


                    </tr>
                    <?php endforeach; ?>
                  </table>
                  </p>
                </div>

                <script>
            function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-blue";
        }
        </script>
                

            