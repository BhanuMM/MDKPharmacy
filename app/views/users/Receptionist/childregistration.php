<?php
    require APPROOT . '/views/includes/Reciptionisthead.php';
?>

<!--Previous button-->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                    Child Registration 
                    <p>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo URLROOT ?>/receptionists/receptionistdashboard">Dashboard</a></li>
                        <li>Child Registration</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>
<div style="margin-left: 300px;  margin-right:0%; padding:1px 16px; width: 70%; ">
<!--            <div class="column">-->

                <div class="form-left">
                    <br><br>
                   
                   


                    

            <ul style="padding-left: 0px; list-style-type: none;  ">
            <form method="post" class="data" style="float: left; display: inline; margin-top: -5%; margin-left: -8.5%; " action="<?php echo URLROOT; ?>/receptionists/viewguardian">
                <table>
                    <tr>
                        <th>
                            <li>
                                <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Guardian NIC"> 
                            </li>
                        </th>
                        <th>
                            <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                        </th>
                    </tr>
                </table>
                <a href="<?php echo URLROOT; ?>/receptionists/registerpatient" style="font-size: 14px; margin-left: 12%;">Register Guardian Details </a>
            </form>
        </ul>



                    <form method="post" class="data" action="<?php echo URLROOT; ?>/receptionists/registerchildelder">
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
                    <input class="input1" id="childname" name="childname" type="text" placeholder="A.D.N.Kulathunga" value="" required >
                    <h5>
                        Gender
                    </h5>
                    <select name="childgen" required class="input1" required>
                        <option value="" disabled selected>Choose option</option>
                        <option value="male"> Male</option>
                        <option value="female"> Female</option>

                    </select>
                    <h5>
                        Date of Birth
                    </h5>
                    <input class="input1" type="date" id="childdob" name="childdob" size=15 required>

                        <br><br>
                        <div style="margin-left:200px;">
                            <input class="form-clear" type="reset" value=" Clear ">
                            <input type="Submit" class="form-submit" value="Submit">
                        </div>
                    </form>
                  </div>
                <div styles="margin-top: -10%;">
                <div class="form-right" ><br>
                     <h4>
                        Guardian Details
                    </h4>
                    <span class="successadded" style="color: red">
                 <?php
                 if( isset($data['norecord'])  ){
                     if($data['norecord']=="nofound"){

                         echo "No Guardian Data Found"; // print_r($_GET);
                     }
                 }
                 ?>
                </span>
                    <br>
                    <div class="card" style="height: 200px;">

                        <br>
                    <h5>
                        Name : <?php
                        if(isset($data['patientname'])){
                            echo $data['patientname']; // print_r($_GET);
                        }
                        ?>
                    </h5>
                    <h5>
                        NIC : <?php
                        if(isset($data['patientnic'])){
                            echo $data['patientnic']; // print_r($_GET);
                        }
                        ?>
                    </h5>
                    <h5>
                        Address : <?php
                        if(isset($data['patientadrs'])){
                            echo $data['patientadrs']; // print_r($_GET);
                        }
                        ?>
                    </h5>
                    <h5>
                        Tel. No : <?php
                        if(isset($data['patienttel'])){
                            echo $data['patienttel']; // print_r($_GET);
                        }
                        ?>
                    </h5>
                    </div>

                    </div></div>
                    
            
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
