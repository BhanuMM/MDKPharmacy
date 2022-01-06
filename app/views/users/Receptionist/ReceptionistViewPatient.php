<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/receptionists/receptionistdashboard"> << </a> </span></button>
</div>   

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
<span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br> <a href="<?php echo URLROOT ?>/receptionists/registerpatient"><button class="button button1">Add New Patient +</button></a>

                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/receptionists/viewpatients">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 575px; height: 35px; width: 200px;" placeholder="Patient NIC"></li>
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
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>
                   
                    <?php foreach($data['patients'] as $allpatients): ?>
                        <tr>
                            <td><?php echo $allpatients->patid; ?></td>
                            <td><?php echo $allpatients->patname; ?></td>
                            <td><?php echo $allpatients->patnic; ?></td>
                            <td><?php echo $allpatients->pattelno; ?></td>
                            <td><?php echo $allpatients->patadrs;?></td>
                            <td><?php echo $allpatients->patid; ?></td>
                            <td><?php echo $allpatients->patdob; ?></td>
                            <td><?php echo $allpatients->patgen; ?></td>


                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/receptionists/updatepatient/".$allpatients->patid?>" >Update</a>
                            </td>

                            <td>
                            <form action="<?php echo URLROOT . "/Receptionists/deletepatient/" . $allpatients->patid?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                   
                  </table>
                
            </div>
            </div>

            <script>
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected User ?");
            }
            </script> 