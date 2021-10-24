<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/users/register"><button  class="button button1">Add New User +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> User Details</h3></li>

                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline;">
                        <input type="text" id="UISearchbar" style="height: 35px;" placeholder="NIC"></li></form>
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
                        </tr>

                    <?php endforeach; ?>


                  </table>

            </div>

           

