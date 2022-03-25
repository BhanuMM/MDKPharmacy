<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>



<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;"href="<?php echo URLROOT ?>/receptionists/viewpatients"> << </a> </span></button>


<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
            <div class="column">
                <form method="post" class="data" action="<?php echo URLROOT; ?>/receptionists/updatepatient/<?php echo $data['patientid']?>" method="POST">
                <div class="form-left">
                    <h2 style="margin-top: 3%;">
                        Update Patient Details
                    </h2>
                    <h5>
                        Name
                    </h5>
                    <input class="input1" id="patname" name="patname" type="text"  value="<?php echo $data['patientname'] ?>" required>
                    <h5>
                        NIC
                    </h5>
                    <input class="input1" id="patnic" name="patnic" type="text" value="<?php echo $data['patientnic'] ?>" required>
                    <span class="invalidFeedback">
                 <?php echo $data['nicError']; ?>
                </span>
                    <h5>
                        Address
                    </h5>
                    <input type="text" class="input2"  id="patadrs" name="patadrs" value="<?php echo $data['patientadrs']?>" required>
                </div>
                <div class="form-right">
                     <h5>
                        Phone Number
                    </h5>
                    <input class="input1" id="pattelno" name="pattelno" type="text"  value="<?php echo $data['patienttelno'] ?>" required>
                    <span class="invalidFeedback">
                <?php echo $data['telError']; ?>
                </span>
                    <h5>
                        Email
                    </h5>
                    <input class="input1" type="email" id="patemail" name="patemail" size=40 value="<?php echo $data['patientemail'] ?>">
                    <h5>
                        Gender
                    </h5>
                    <select name="patgen" required class="input1" value="<?php echo $data['patientgen'] ?>">
                        <option value="" disabled selected>Choose option</option>
                        <option value="male" <?php if ($data['patientgen'] == 'male') echo ' selected="selected"'; ?>>Male</option>
                        <option value="female" <?php if ($data['patientgen'] == 'female') echo ' selected="selected"'; ?>>Female</option>

                    </select>
                    <h5>
                       Date of Birth
                    </h5>
                    <input class="input1" type="date" id="patdob" name="patdob" size=15 value="<?php echo $data['patientdob'] ?>>

                    <br><br><br>
                    <div style="margin-left:200px;">
                        <input class="form-clear" type="reset" value=" Clear ">
                    <input type="Submit" class="form-submit" value="Submit">
                </div>
                </div>
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
