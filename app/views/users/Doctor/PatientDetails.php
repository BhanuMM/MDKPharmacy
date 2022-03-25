<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/doctordashboard"> << </a> </span></button>
</div> 

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
<span class="successadded">
     <?php
      if(isset($_GET['msg'])){
      echo $_GET['msg']; // print_r($_GET);
      }
     ?>
</span> <br>

<ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
  <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/viewpatientdetails">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 550px; height: 35px; width: 200px;" placeholder="Patient NIC"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
       </tr>
     </table>
     </form>
 </ul>
    
               
                <table id="customers">
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
                            <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/doctors/allprescriptions/".$allpat->patid ?>" >view</a>
                        </td>


                    </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>

    </body>
</html>