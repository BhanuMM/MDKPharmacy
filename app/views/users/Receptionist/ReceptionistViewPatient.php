<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>

<!-- Old Dashboard  -->

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
<span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br> <a href="<?php echo URLROOT ?>/receptionists/registerpatient"><button class="button button1">Add New Patient +</button></a>
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT. "/receptionists/viewpatients/". $data['id'] ?>">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Patient NIC"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
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
                   

                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['nic'] ?></td>
                            <td><?php echo $data['tel'] ?></td>
                            <td><?php echo $data['adrs'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['dob'] ?></td>
                            <td><?php echo $data['gender'] ?></td>


                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/receptionists/updatepatient/".$data['id']?>" >Update</a>
                            </td>
                            
                            
                        <td align="center"><button class="button button1" style="background-color: #ff9797;">
                        <form action="<?php echo URLROOT . "/Receptionists/deletepatient/" . $data['id']?>" method="POST">
                                <input Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">Delete</form></button>
                        </td>
                        </tr>
 
                   
                  </table>

            </div>


        </div>