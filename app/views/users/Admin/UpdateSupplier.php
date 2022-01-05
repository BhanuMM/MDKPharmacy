<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewsupplier"> << Previous </a> </span></button>
</div>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="column">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/updatesupplier/<?php echo $data['supplierid']?>" method="POST">
            <div class="form-left">
                <h2 style="margin-top: 3%;">
                    Update Supplier Details
                </h2>
                <h5>
                    Name
                </h5>
                <input class="input1" id="supname" name="supname" type="text"  value="<?php echo $data['suppliername'] ?>" required>
                <h5>
                    Address
                </h5>
                <input type="text" class="input2"  id="supadrs" name="supadrs" value="<?php echo $data['supplieraddress']?>" required>
            </div>
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
