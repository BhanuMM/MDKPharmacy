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
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/viewsupplier">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Supplier Name"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
                </ul>


                <table id="customers">
                    <tr>
                        <th>Supplier Agency ID</th>
                        <th>Supplier Agency Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr> <?php foreach($data['suppliers'] as $allsuppliers): ?>

                        <tr>
                            <td><?php echo $allsuppliers->supplierid; ?></td>
                            <td><?php echo $allsuppliers->agencyname; ?></td>
                            <td><?php echo $allsuppliers->agencyadrs; ?></td>
                            <td><?php echo $allsuppliers->agencytel; ?></td>
                            <td><?php echo $allsuppliers->agencyemail; ?></td>
                            <td><a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/admins/updatesupplier/".$allsuppliers->supplierid ?>" >Update</a></td>
                            <td>

                                <form action="<?php echo URLROOT . "/Admins/deletesupplier/" . $allsuppliers->supplierid ?>" method="POST">
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
        return confirm("Are you sure you want to delete the selected medicine ?");
    }
</script>

</body>
</html>