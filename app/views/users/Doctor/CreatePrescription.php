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
  <li Style="float: left; vertical-align: middle; display: inline;"><h3>Select Patient</h3></li>
  <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="UISearchbar1" name="UISearchbar1" style="margin-left: 100px; height: 35px; width: 200px;" placeholder="Patient Name"></li>
         </th>
      <th><button style="margin-left: 10px;" class="form-submit" name="btnname">SEARCH</button></th>
       </tr>
     </table>
     </form>
   <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/createprescription">
      <table>
       <tr>
        <th><li Style="float: right; vertical-align: middle; display: inline;">
        <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 100px; height: 35px; width: 200px;" placeholder="Patient NIC"></li>
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
                    <tr>
                      <td><?php echo $data['id'] ?></td>
                      <td><?php echo $data['nic'] ?></td>
                      <td><?php echo $data['name'] ?></td>
                      <td><?php echo $data['dob'] ?></td>
                      <td><a href="<?php echo URLROOT. "/doctors/addprescription/". $data['id'] ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>

                  </table><br /><br /><br /><br />
                  
            </div>

           
        </div>

    </body>
</html>