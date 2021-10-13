<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>

        <div class="row">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->

            <div class="column" style="margin-left:17%; padding:1px 16px;">
                <form>
                    <h2 style="margin-top: 3%;">
                        Patient Details
                    </h2>
                    <h5>
                        Name
                    </h5>
                    <input class="input1" type="text" placeholder="John Doe">
                    <h5>
                        NIC
                    </h5>
                    <input class="input1" type="text" placeholder="123456789 V">
                    <h5>
                        Phone Number
                    </h5>
                    <input class="input1" type="text" placeholder="+94761234567">
                    <h5>
                        Address
                    </h5>
                    <input type="text" class="input2" placeholder="222/B, Bakers' Street, Colombo 07.">

                    <br><br>

                    <input type="Submit" class="button button1" value="Submit">
                </form>

                <input type="Submit" class="button" value="Add Child Account +">
                <br><br>
            </div>



            <div class="column" style="margin-left:10%;padding:1px 16px;">
                <form>
                    <h3>
                        Child Details
                    </h3>
                    <h5>
                        Name
                    </h5>
                    <input class="input1" type="text" placeholder="John Doe">
                    <h5>
                        NIC
                    </h5>
                    <input class="input1" type="text" placeholder="123456789 V">
                    <h5>
                        Phone Number
                    </h5>
                    <input class="input1" type="text" placeholder="+94761234567">
                    <h5>
                        Address
                    </h5>
                    <input type="text" class="input2" placeholder="222/B, Bakers' Street, Colombo 07.">
                    <br><br><br>
                    <input type="Submit" class="button button1" value="Save">
                </form>
            </div>
        </div>

    </body>
</html>