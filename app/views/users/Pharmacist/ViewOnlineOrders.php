<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>
<br>
<div style="margin-left:19.5%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard"> << </a> </span></button>
</div> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">

<ul style="padding-left: 0px; list-style-type: none;  margin-top: -2%; ">
    <li Style="float: left; vertical-align: middle; display: inline; "><h3 style="font-weight: 700;    ">Online Prescriptions</h3></li>
        <form method="post" class="data" Style="float: right; margin-top: -6%;" action="<?php echo URLROOT; ?>/pharmacists/viewonlineorders">
        <table>
          <tr>
            <th><li Style="float: right; vertical-align: middle; display: inline;">
            <input type="text" id="UISearchbar" name="UISearchbar" style="font-weight: 400; margin-left: 500px; height: 35px; width: 200px; " placeholder="Telephone Number"></li>
            </th>
            <th><button style="margin-left: 20px; font-weight: 500;" class="form-submit">SEARCH</button></th>
           </tr>
          </table>
         </form>
</ul> 

<!-- <div class="w3-container" > -->
<div class="w3-bar" style="background-color:#0a0a2e; color:white; ">
  <button class="w3-bar-item w3-button" onclick="openSection('all')">Pending Orders</button>
  <button class="w3-bar-item w3-button" onclick="openSection('accepted')">Accepted Orders</button>
  <button class="w3-bar-item w3-button" onclick="openSection('rejected')">Rejected Orders</button>
</div>

<div id="all" class="w3-container Section">

                <table  id="customers">
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

<table id="customers">
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
                            <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/viewforconfirm/".$allconorders->onlineoid ?>">View</a></button></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
            
</div>

<div id="rejected" class="w3-container Section" style="display:none">


<table id="customers">
                    <tr>
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['rejectedorders'] as $allrejorders): ?>
                        <tr>
                            <td><?php echo $allrejorders->onlineoid ?></td>
                            <td><?php echo $allrejorders->onlinefname ?></td>
                            <td><?php echo $allrejorders->onlinetelno ?></td>
                            <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/viewforconfirm/".$allrejorders->onlineoid ?>">View</a></button></td>
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