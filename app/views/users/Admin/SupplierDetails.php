<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<!--Back Button-->
    <div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a>
            </span>
        </button>
    </div>


    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
                 <?php if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
        </span>
        <br>
<!--        Link to the supplier adding webpage-->
        <a href="<?php echo URLROOT ?>/Admins/addsupplier">
            <button class="button button1">Add New Supplier +</button>
        </a>

<!--        Page Heading-->
        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h3 style="margin: 0px;"> Supplier Details</h3>
            </li>

<!--Search Bar-->
            <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewsupplier">
                <table>
                    <tr>
                        <th style="padding: 0px;">
                            <li Style="float: right; vertical-align: middle; display: inline;">
                                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 690px; height: 35px; width: 200px;" placeholder="Supplier Agency Name">
                            </li>
                        </th>
                        <th>
                            <button style="margin-left: 10px;" class="form-submit">SEARCH</button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>

<!--        Table Headings-->
        <table id="customers">
            <tr>
                <th>Supplier Agency ID</th>
                <th>Supplier Agency Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

<!--            Load table data-->
            <?php foreach($data['suppliers'] as $allsuppliers): ?>
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

    <script>
        function ConfirmDelete()
        {
            return confirm("Are you sure you want to delete the selected medicine ?");
        }
    </script>