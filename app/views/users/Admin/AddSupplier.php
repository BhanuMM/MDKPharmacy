<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <form  method="post" class="data" action="<?php echo URLROOT; ?>/admins/addsupplier">

        <h2 style="margin-top: 3%;">
            Supplier Details
        </h2>

        <h5>
            Agency Name
        </h5>
        <input class="input1"  id="supname" name="supname" type="text" placeholder="A. K. Perera" value="<?php echo $data['suppliername']; ?>" required >
        <h5>
            Address
        </h5>
        <input class="input1" id="supadrs" name="supadrs" type="text" placeholder="222/B, Bakers' Street, Colombo 07." value="<?php echo $data['supplieraddress']; ?>" required>
        <h5>
            Phone Number
        </h5>
        <input class="input1" id="suptelno" name="suptelno" type="text" placeholder="075 222 3576" value="<?php echo $data['suppliertelno']; ?>" required>
        <span class="invalidFeedback">
                <?php echo $data['telError']; ?>
                </span>
        <h5>
            Email
        </h5>
        <input type="email" id="supmail" name="supmail"  class="input1"  placeholder="abc@gmail.com" value="<?php echo $data['suppliermail']; ?>" >
                
        <br><br>
        <button class="form-submit">Submit</button>
    </form>
</div>

    </body>
</html>

