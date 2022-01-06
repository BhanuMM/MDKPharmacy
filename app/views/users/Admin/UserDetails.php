<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
                <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a> </span></button>
                </div>   

<div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
<span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <a href="<?php echo URLROOT ?>/users/register"><button  class="button button1">Add New User +</button></a>

                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> User Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewuser">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 575px; height: 35px; width: 200px;" placeholder="User NIC"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
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
                    
                    <?php foreach($data['users'] as $allusers): ?>
                        <tr>
                        
                            <td><?php echo $allusers->staffid; ?></td>
                            <td><?php echo $allusers->sname; ?></td>
                            <td><?php echo $allusers->snic; ?></td>
                            <td><?php echo $allusers->semail; ?></td>
                            <td><?php echo $allusers->stelno; ?></td>
                            <td><?php echo $allusers->uname; ?></td>
                            <td><?php echo $allusers->urole; ?></td>

                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/admins/updateuser/".$allusers->staffid?>" >Update</a>
                            </td>

                            <td>
                            <form action="<?php echo URLROOT . "/admins/deleteuser/"  .$allusers->staffid?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>

                        </tr>

                        <?php endforeach; ?>
                  </table>

            </div>
        
            <script>
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected User ?");
            }
            </script> 

           

