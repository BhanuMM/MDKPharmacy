<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; "><span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <a href="<?php echo URLROOT ?>/users/register"><button  class="button button1">Add New User +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> User Details</h3></li>

                    <form method="post" class="data" action="<?php echo URLROOT. "/admins/viewuser/". $data['id'] ?>">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="User NIC"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
                </ul>

                <table id="customers">
                    <tr>
                      <th>Staff ID</th>
                      <th>Name</th>
                      <th>NIC</th>
                      <th>Email</th>
                      <th>Tel.No</th>
                      <th>UserName</th>
                      <th>User Role</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>

                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['nic'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['tel'] ?></td>
                            <td><?php echo $data['uname'] ?></td>
                            <td><?php echo $data['urole'] ?></td>

                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/admins/updateuser/".$data['id']?>" >Update</a>
                            </td>
                            
                            
                            <td align="center"><button class="button button1" style="background-color: #ff9797;">
                            <form action="<?php echo URLROOT . "/admins/deleteuser/" . $data['id'] ?>" method="POST">
                                <input Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">Delete</form></button>
                            </td>

                        </tr>


                  </table>

            </div>

           

