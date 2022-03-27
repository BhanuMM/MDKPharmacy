<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back Button-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                    Supplier Management 
                    <p>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                        <li>Supplier Management</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>
    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
                 <?php if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
        </span>
        <br>

 <div style="margin-left: -4.5%; margin-right: 2%;"> 

        <a href="<?php echo URLROOT ?>Admins/addsupplier">
<br>
            <button style="float: left; display: inline;" class="button button1" >Add New Supplier +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71.5%;" action="<?php echo URLROOT; ?>/admins/viewsupplier">
                <table>
                    <tr>
                        <th>
                            <li>
                                <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Agency Name"> 
                            </li>
                        </th>
                        <th>
                            <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>
<br><br><br>
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
                    <td><a class="updateBtn" href="<?php echo URLROOT ."/admins/updatesupplier/".$allsuppliers->supplierid ?>" >Update</a></td>
                    <td>
                        <form action="<?php echo URLROOT . "/Admins/deletesupplier/" . $allsuppliers->supplierid ?>" method="POST">
                            <input class="dltBtn"  Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    </div>
<br><br><br>
    <script>
        function ConfirmDelete()
        {
            return confirm("Are you sure you want to delete the selected medicine ?");
        }
    </script>