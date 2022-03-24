<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<!--Back Button-->
    <div style="margin-left: 24%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewsupplier"> <<</a>
            </span>
        </button>
    </div>

    <div style="margin-left:27%; padding:1px 16px; width: 40%">

<!--Starting of the form fields-->
        <form  method="post" class="data" action="<?php echo URLROOT; ?>/admins/addsupplier">

            <h2 style="margin-top: 3%;">
                Supplier Agency Details
            </h2>

            <h5>
                Supplier Agency Name
            </h5>
            <input class="input1"  id="supname" name="supname" type="text" placeholder="A. K. Perera" value="<?php echo $data['suppliername']; ?>" required >

            <h5>
                Address
            </h5>
            <input class="input1" id="supadrs" name="supadrs" type="text" placeholder="222/B, Bakers' Street, Colombo 07." value="<?php echo $data['supplieraddress']; ?>" required>

            <h5>
                Phone Number
            </h5>
            <input class="input1" id="suptelno" name="suptelno" type="text" placeholder="0752223576" value="<?php echo $data['suppliertelno']; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['telError']; ?>
            </span>

            <h5>
                Email
            </h5>
            <input type="email" id="supmail" name="supmail"  class="input1"  placeholder="abc@gmail.com" value="<?php echo $data['suppliermail']; ?>" >
            <br><br>

            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit</button>
        </form>
    </div>
