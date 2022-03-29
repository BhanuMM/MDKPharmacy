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
                    Add New Supplier 
                    <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Supplier Details</a></li>
                        <li>Add New Supplier</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

    <div style="margin-left: 24%; padding:1px 16px; width: 40%">

<!--Starting of the form fields--><br>
        <form  style="margin-bottom: 10%;"method="post" class="data" action="<?php echo URLROOT; ?>/admins/addsupplier">

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

            <div style="float: left; margin-left: 55%;">
                <br><br>
                <input class="clearBtn" type="reset" value="Refresh">

                <input class="submitBtn" style="margin-left: 05px;" type="submit" name="submitbutton1"  Value="Submit" >

            </div>


<!--            <div style="float: left; margin-left: 59%;">-->
<!--            <input class="button button1" type="reset" value="Refresh">-->
<!--            <button class="form-submit">Submit</button>-->
<!--        </div>-->
        </form>
    </div>
<br><br><br>
