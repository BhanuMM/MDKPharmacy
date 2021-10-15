<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addsupplier">

        <h2 style="margin-top: 3%;">
            Supplier Details
        </h2>
        <h5>
            Agency Name
        </h5>
        <input class="input1"  id="supname" name="supname" type="text" placeholder="A. K. Perera">
        <h5>
            Address
        </h5>
        <input class="input1" id="supadrs" name="supadrs" type="text" placeholder="222/B, Bakers' Street, Colombo 07.">
        <h5>
            Phone Number
        </h5>
        <input class="input1" id="suptelno" name="suptelno" type="text" placeholder="+94 75 222 3576">
        <h5>
            Email
        </h5>
        <input type="text" id="supmail" name="supmail"  class="input1"  placeholder="abc@gmail.com">
                
        <br><br>
        <button class="button button1">Submit</button>
    </form>
</div>

    </body>
</html>