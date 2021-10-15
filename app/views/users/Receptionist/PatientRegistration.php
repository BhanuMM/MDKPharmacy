<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>

        <div class="row">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->

            <div class="column" style="margin-left:17%; padding:1px 16px;">
                <form method="post" class="data" action="<?php echo URLROOT; ?>/receptionists/registerpatient">
                    <h2 style="margin-top: 3%;">
                        Patient Details
                    </h2>
                    <h5>
                        Name
                    </h5>
                    <input class="input1" id="patname" name="patname" type="text" placeholder="John Doe" required>
                    <h5>
                        NIC
                    </h5>
                    <input class="input1" id="patnic" name="patnic" type="text" placeholder="123456789 V" required>
                    <h5>
                        Phone Number
                    </h5>
                    <input class="input1" id="pattelno" name="pattelno" type="text" placeholder="+94761234567" required>
                    <h5>
                        Address
                    </h5>
                    <input type="text" class="input2"  id="patadrs" name="patadrs" placeholder="222/B, Bakers' Street, Colombo 07." required>
                    <h5>
                        Email
                    </h5>
                    <input class="input1" type="text" id="patemail" name="patemail" size=40 placeholder="Email address..." >
                    <h5>
                        Gender
                    </h5>
                    <select name="patgen" required class="input1">
                        <option value="" disabled selected>Choose option</option>
                        <option value="male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                    <h5>
                       Date of Birth
                    </h5>
                    <input class="input1" type="date" id="patdob" name="patdob" size=15 required>

                    <br><br>

                    <input type="Submit" class="button button1" value="Submit">
                </form>

<!--                <input type="Submit" class="button" value="Add Child Account +">-->
                <br><br>
            </div>



<!--            <div class="column" style="margin-left:10%;padding:1px 16px;">-->
<!--                <form>-->
<!--                    <h3>-->
<!--                        Child Details-->
<!--                    </h3>-->
<!--                    <h5>-->
<!--                        Name-->
<!--                    </h5>-->
<!--                    <input class="input1" type="text" placeholder="John Doe">-->
<!--                    <h5>-->
<!--                        NIC-->
<!--                    </h5>-->
<!--                    <input class="input1" type="text" placeholder="123456789 V">-->
<!--                    <h5>-->
<!--                        Phone Number-->
<!--                    </h5>-->
<!--                    <input class="input1" type="text" placeholder="+94761234567">-->
<!--                    <h5>-->
<!--                        Address-->
<!--                    </h5>-->
<!--                    <input type="text" class="input2" placeholder="222/B, Bakers' Street, Colombo 07.">-->
<!--                    <br><br><br>-->
<!--                    <input type="Submit" class="button button1" value="Save">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
