<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/doctordashboard"> << </a> </span></button>
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
        <input type="text" id="patname" name="patname" style="margin-left: 100px; height: 35px; width: 150px;" placeholder="Patient Name"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit" name="btnname">SEARCH</button></th>
       </tr>
     </table>
     </form>
   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="patnic" name="patnic" style="margin-left: 100px; height: 35px; width: 150px;" placeholder="Patient NIC"></li>
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
        <input type="text" id="childname" name="childname" style="margin-left: 100px; height: 35px; width: 150px;" placeholder="Child Name"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit" name="btncname">SEARCH</button></th>
       </tr>
     </table>
     </form>
   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="guardiannic" name="guardiannic" style="margin-left: 100px; height: 35px; width: 150px;" placeholder="Guardian NIC"></li>
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