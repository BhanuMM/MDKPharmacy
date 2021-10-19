<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <a href="<?php echo URLROOT ?>/Admins/addsupplier"><button class="button button1">Add New Supplier +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Supplier Details</h3></li>
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></li>
                    <li Style="float: right; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Supplier"></li>
                </ul>
                
                <table id="customers">
                    <tr>
                        <th>Agency ID</th>
                      <th>Agency Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Email</th>
<!--                      <th>Update</th>-->
<!--                      <th>Delete</th>-->
                    </tr> <?php foreach($data['suppliers'] as $allsuppliers): ?>

                        <tr>
                            <td><?php echo $allsuppliers->supplierid; ?></td>
                            <td><?php echo $allsuppliers->agencyname; ?></td>
                            <td><?php echo $allsuppliers->agencyadrs; ?></td>
                            <td><?php echo $allsuppliers->agencytel; ?></td>
                            <td><?php echo $allsuppliers->agencyemail; ?></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>

    </body>
</html>