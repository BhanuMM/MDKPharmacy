<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                 Create Prescription
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/doctors/doctordashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/doctors/createprescription">Create Prescription</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%;">
<span style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>

<ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
  <li Style="float: left; vertical-align: middle; display: inline;"><h3>Select Patient(Elders)</h3></li>

   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="patnic" name="patnic" style="margin-left: 500px; height: 35px; width: 150px;" placeholder="Patient NIC Or Name"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit" name="btnid">SEARCH</button></th>
       </tr>
     </table>
     </form>
    
 </ul>


               
                <table id="customers" >
                    <tr>
                      <th>Patient ID</th>
                      <th>Patient NIC</th>
                      <th>Patient Name</th>
                      <th>Patient Age</th>
                      <th>Create Prescription</th>
                    </tr>

                    <?php foreach($data['pat'] as $allpat): ?>
                    <tr>
                      <td><?php echo $allpat->patid; ?></td>
                      <td><?php echo $allpat->patnic;?></td>
                      <td><?php echo $allpat->patname; ?></td>
                      <td><?php echo $allpat->patdob; ?></td>
                      <td><a href="<?php echo URLROOT. "/doctors/addprescription/". $allpat->patid; ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <?php endforeach; ?>

                  </table><br /><br /><br />

                  <hr class="rounded">


                  <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
  <li Style="float: left; vertical-align: middle; display: inline;"><h3>Select Patient(Children)</h3></li>
  
   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="guardiannic" name="guardiannic" style="margin-left: 480px; height: 35px; width: 150px;" placeholder="Guardian NIC Or Child Name"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit" name="btngnic">SEARCH</button></th>
       </tr>
     </table>
     </form>
    
 </ul>


               
                <table id="customers" >
                    <tr>
                      <th>Child ID</th>
                      <th>Guardian's NIC</th>
                      <th>Child Name</th>
                      <th>Child Age</th>
                      <th>Create Prescription</th>
                    </tr>

                    <?php foreach($data['child'] as $allchild): ?>
                    <tr>
                      <td><?php echo $allchild->childelderid; ?></td>
                      <td><?php echo $allchild->patnic; ?></td>
                      <td><?php echo $allchild->fullname; ?></td>
                      <td><?php echo $allchild->childelderdob; ?></td>
                      <td><a href="<?php echo URLROOT. "/doctors/addchildprescription/".$allchild->childelderid ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <?php endforeach; ?>

                  </table><br />
                  
            </div>

           
        </div>

    </body>
</html>