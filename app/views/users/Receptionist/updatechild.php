<?php
require APPROOT . '/views/includes/Reciptionisthead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/receptionists/receptionistdashboard"> << </a> </span></button>
</div>

<div style="margin-left: 300px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
            <div class="column">

                <div class="form-left">
                    <h2 style="margin-top: 3%;">
                        Patient Details (Child /Elder)
                    </h2>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/receptionists/updatechild/<?php echo $data['childid'] ?>">
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php
                        if( isset($data['noguardian'])  ){
                            if($data['noguardian']=="nofound"){

                                echo "Please Select Guardian to Proceed"; // print_r($_GET);
                            }
                        }
                        ?>
                        <input class="input1" id="guardianid" name="guardianid" type="text"  value="<?php
                        if(isset($data['patientid'])){
                            echo $data['patientid']; // print_r($_GET);
                        }
                        ?>" hidden>
                    <h5>
                        Name
                    </h5>
                    <input class="input1" id="childname" name="childname" type="text" placeholder="A.D.N.Kulathunga" value="<?php echo $data['childname'] ?>" required >
                    <h5>
                        Gender
                    </h5>
                    <select name="childgen" required class="input1" value="<?php echo $data['gen'] ?>" required>
                        <option value="" disabled selected>Choose option</option>
                        <option value="male"> Male</option>
                        <option value="female"> Female</option>

                    </select>
                    <h5>
                        Date of Birth
                    </h5>
                    <input class="input1" type="date" id="childdob" name="childdob" value="<?php echo $data['dob'] ?>" size=15 required>

                        <br><br><br>
                        <div style="margin-left:200px;">
                            <input class="form-clear" type="reset" value=" Clear ">
                            <input type="Submit" class="form-submit" value="Submit">
                        </div>
                    </form>
                  </div>
                <div class="form-right">
                     <h4>
                        Guardian Details
                    </h4>
                    <span class="successadded">
                 <?php
                 if( isset($data['norecord'])  ){
                     if($data['norecord']=="nofound"){

                         echo "No Guardian Data Found"; // print_r($_GET);
                     }
                 }
                 ?>
                </span>
                    <h5>
                        Name : <?php echo $data['guardianname']
                        ?>
                    </h5>
                    <h5>
                        NIC : <?php echo $data['guardiannic']
                        ?>
                    </h5>
                    <h5>
                        Address : <?php echo $data['guardianaddrs']
                        ?>
                    </h5>
                    <h5>
                        Tel. No : <?php echo $data['telno']
                        ?>
                    </h5>


                </div>

            
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
