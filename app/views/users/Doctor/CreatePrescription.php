<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/doctordashboard"> << </a> </span></button>
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
<!--                      <th>Patient ID</th>-->
                      <th>Patient NIC</th>
                      <th>Patient Name</th>
                      <th>Patient Age</th>
                      <th>Create Prescription</th>
                    </tr>

                    <?php foreach($data['pat'] as $allpat): ?>
                    <tr>
<!--                      <td>--><?php //echo $allpat->patid; ?><!--</td>-->
                      <td><?php echo $allpat->patnic;?></td>
                      <td><?php echo $allpat->patname; ?></td>
                        <td><?php $dob =$allpat->patdob;
                            $today = date("Y-m-d");
                            $diff = date_diff(date_create($dob), date_create($today)); echo $diff->format('%y '); ?></td>
                      <td><a href="<?php echo URLROOT. "/doctors/addprescription/". $allpat->patid; ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <?php endforeach; ?>

                  </table><br /><br /><br />

                  <hr class="rounded">


                  <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
  <li Style="float: left; vertical-align: middle; display: inline;"><h3>Select Patient(Children)</h3></li>
  

    
 </ul>


               
                <table id="customers" >
                    <tr>
<!--                      <th>Child ID</th>-->
                      <th>Guardian's NIC</th>
                      <th>Child Name</th>
                      <th>Child Age</th>
                      <th>Create Prescription</th>
                    </tr>

                    <?php foreach($data['child'] as $allchild): ?>
                    <tr>
<!--                      <td>--><?php //echo $allchild->childelderid; ?><!--</td>-->
                      <td><?php echo $allchild->patnic; ?></td>
                      <td><?php echo $allchild->fullname; ?></td>
                      <td><?php $dob =$allchild->childelderdob;
                      $today = date("Y-m-d");
                          $diff = date_diff(date_create($dob), date_create($today)); echo $diff->format('%y '); ?></td>

                      <td><a href="<?php echo URLROOT. "/doctors/addchildprescription/".$allchild->childelderid ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>
                    <?php endforeach; ?>

                  </table><br />
                  
            </div>

           
        </div>

    </body>
</html>