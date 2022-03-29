<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>
<br>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card" style="height:100%;">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Online Prescriptions                   <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li><a href="<?php echo URLROOT?>/pharmacists/viewonlineorders">Online Prescriptions</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<span style="margin-left:22%;" class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
</span>

</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">



<ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 75.5%;" action="<?php echo URLROOT; ?>/pharmacists/viewonlineorders">
                <table>
                    <tr>
                        <th>
                            <li>
                                <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Telephone Number"> 
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


<!-- <div class="w3-container" > -->
<div class="w3-bar" style="background-color:#0a0a2e; color:white; width: 103%; ">
  <button class="w3-bar-item w3-button" onclick="openSection('all')">Pending Orders</button>
  <button class="w3-bar-item w3-button" onclick="openSection('accepted')">Accepted Orders</button>
  <button class="w3-bar-item w3-button" onclick="openSection('rejected')">Rejected Orders</button>
</div>

<div id="all" class="w3-container Section">

                <table  id="customers" style="width: 103%;">
                    <tr>
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['pendingorders'] as $allorders): ?>
                        <tr>
                            <td><?php echo $allorders->onlineoid ?></td>
                            <td><?php echo $allorders->onlinefname ?></td>
                            <td><?php echo $allorders->onlinetelno ?></td>
                            <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/viewforconfirm/".$allorders->onlineoid ?>">View</a></button></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
            
</div>
<div id="accepted" class="w3-container Section" style="display:none">

<table id="customers" style="width: 103%;">
                    <tr>
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['confirmedorders'] as $allconorders): ?>
                        <tr>
                            <td><?php echo $allconorders->onlineoid ?></td>
                            <td><?php echo $allconorders->onlinefname ?></td>
                            <td><?php echo $allconorders->onlinetelno ?></td>
                            <td><div style="margin-top: 10%; margin-bottom: 10%;"><a class="updateBtn" href="<?php echo URLROOT. "/pharmacists/pastsingleprescription/".$allconorders->onlineoid ?>">View</a></div></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
            
</div>

<div id="rejected" class="w3-container Section" style="display:none">


<table id="customers" style="width: 103%;">
                    <tr>
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>Reason</th>
                    </tr>
                    <?php foreach($data['rejectedorders'] as $allrejorders): ?>
                        <tr>
                            <td><?php echo $allrejorders->onlineoid ?></td>
                            <td><?php echo $allrejorders->onlinefname ?></td>
                            <td><?php echo $allrejorders->onlinetelno ?></td>
                            <td><?php echo $allrejorders->reason?></td>

                            <!-- <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/pastsingleprescription/".$allrejorders->onlineoid ?>">View</a></button></td> -->
                        </tr>
                    <?php endforeach; ?>
                  </table>
            </div>
        </div>
</div>
</div>
</div>
        </div>


<script>
function openSection(SectionName) {
  var i;
  var x = document.getElementsByClassName("Section");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(SectionName).style.display = "block";  
}
</script>