<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
             <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <a href="<?php echo URLROOT ?>/Admins/addsupplier"><button class="button button1">Add New Supplier +</button></a>
                <ul style="padding-left: 0px; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Supplier Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Supplier Agency ID"></li></form>
                </ul>


                <table id="customers">
                    <tr>
                        <th>Supplier Agency ID</th>
                        <th>Supplier Agency Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Update</th>
<!--                      <th>Delete</th>-->
                    </tr> <?php foreach($data['suppliers'] as $allsuppliers): ?>

                        <tr>
                            <td><?php echo $allsuppliers->supplierid; ?></td>
                            <td><?php echo $allsuppliers->agencyname; ?></td>
                            <td><?php echo $allsuppliers->agencyadrs; ?></td>
                            <td><?php echo $allsuppliers->agencytel; ?></td>
                            <td><?php echo $allsuppliers->agencyemail; ?></td>
                            <td><a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/admins/updatesupplier/".$allsuppliers->supplierid ?>" >Update</a></td>
                        </tr>

                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>

    </body>
</html>