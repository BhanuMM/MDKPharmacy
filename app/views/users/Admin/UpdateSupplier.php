<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Supplier Details 
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewsupplier">Supplier Details</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
<div>


    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
        <div class="column">
            <!--Starting of the form fields-->
            <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/updatesupplier/<?php echo $data['supplierid']?>" method="POST">
                <div class="form-left">
<!--                    <h2>-->
<!--                        Update Supplier Details-->
<!--                    </h2>-->

                    <h5>
                        Name
                    </h5>
                    <input class="input1" id="supname" name="supname" type="text"  value="<?php echo $data['suppliername'] ?>" required>

                    <h5>
                        Address
                    </h5>
                    <input type="text" class="input2"  id="supadrs" name="supadrs" value="<?php echo $data['supplieraddress']?>" required>
                </div>

                <!--Right side of the form is starting form here-->
                <div class="form-right">
                    <h5>
                        Phone Number
                    </h5>
                    <input class="input1" id="suptelno" name="suptelno" type="text"  value="<?php echo $data['suppliertelno'] ?>" required>
                    <span class="invalidFeedback">
                        <?php echo $data['telError']; ?>
                    </span>

                    <h5>
                        Email
                    </h5>
                    <input class="input1" type="email" id="supemail" name="supemail" size=40 value="<?php echo $data['suppliermail'] ?>">

                    <br><br><br>

                    <div style="margin-left:200px;">
                        <input class="form-clear" type="reset" value=" Clear ">
                        <input type="Submit" class="form-submit" value="Submit">
                    </div>
                </div>
            </form>

            <br><br>
        </div>
