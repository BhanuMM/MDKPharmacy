<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <a href="<?php echo URLROOT ?>/users/register"><button style="margin-top: 10%;" class="button button1">Add New User +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> User Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Users"></li>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Staff ID</th>
                      <th>Name</th>
                      <th>NIC</th>
                      <th>Email</th>
                      <th>Tel.No</th>
                      <th>UserName</th>
                    </tr>
                    <?php foreach($data['users'] as $allusers): ?>

                        <tr>
                            <td><?php echo $allusers->staffid; ?></td>
                            <td><?php echo $allusers->sname; ?></td>
                            <td><?php echo $allusers->snic; ?></td>
                            <td><?php echo $allusers->semail; ?></td>
                            <td><?php echo $allusers->stelno; ?></td>
                            <td><?php echo $allusers->uname; ?></td>
                        </tr>

                    <?php endforeach; ?>


                  </table>

            </div>

           

