<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a> </span></button>
</div>   

<div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
             <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <a href="<?php echo URLROOT ?>/Admins/addsupplier"><button class="button button1">Add New Supplier +</button></a>

                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Supplier Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewsupplier">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 550px; height: 35px; width: 200px;" placeholder="Supplier Agency Name"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
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