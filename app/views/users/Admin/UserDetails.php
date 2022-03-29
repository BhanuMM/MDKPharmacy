<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back button-->
    <!-- <div style="margin-left: 21.5%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a>
            </span>
        </button>
    </div> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                User Details 
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewuser">View Users</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
<div>


<div style="margin-left: 21.5%; margin-top:5px; padding:1px 16px; width: 70%; ">
<!--        <span class="successadded">-->
<!--            --><?php //if(isset($_GET['msg'])){
//                echo $_GET['msg']; // print_r($_GET);
//            }
//            ?>
<!--        </span>-->

<!--    Say there is no such data-->
    <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>

    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
        </div>
        <br>
<!--        link to the add new user form-->
<a href="<?php echo URLROOT ?>/users/register">
<br>
            <button style="float: left; display: inline;" class="button button1" >Add New User +</button>
        </a>

        <ul style="padding-left: 0px; list-style-type: none;  ">
            <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: 71.5%;" action="<?php echo URLROOT; ?>/admins/viewuser">
                <table>
                    <tr>
                        <th>
                            <li>
                                <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="User NIC"> 
                            </li>
                        </th>
                        <th>
                            <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                        </th>
                    </tr>
                </table>
            </form>
        </ul>
<br><br>
<br>


<!--Table headers-->
        <table id="customers">
            <tr style="text-align:center;">
                <th>Staff ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Email</th>
                <th>Tel.No</th>
                <th>Username</th>
                <th>User Role</th>
                <th>Update</th>
                <!-- <th>Delete</th> -->
            </tr>

<!--            Table data-->
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
                        <a class="updateBtn" href="<?php echo URLROOT ."/admins/updateuser/".$allusers->staffid?>" >Update</a>
                    </td>
                    <!-- <td>
                        <form action="<?php echo URLROOT . "/admins/deleteuser/"  .$allusers->staffid?>" method="POST">
                            <input class="dltBtn"  Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                        </form>
                    </td> -->

                </tr>

            <?php endforeach; ?>
        </table>
        <br>
        <br>
        <br>


    </div>
    <script>
        function ConfirmDelete() {
            return confirm("Are you sure you want to delete the selected User ?");
        }
    </script>

           

