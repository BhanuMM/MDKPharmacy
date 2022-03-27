<?php
    require APPROOT . '/views/includes/Reciptionisthead.php';
?>

    <!--Previous button-->
    <div style="margin-left:20%;  padding:20px 26px; padding-bottom: 0px;">
        <button class="prebtn" style="margin-right:30%;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/receptionists/receptionistdashboard"> << </a>
            </span>
<!--            <span>-->
<!--                <a href="--><?php //echo URLROOT ?><!--/receptionists/registerpatient"><button class="button button1" style="margin-left: 0px;">Add New Patient +</button></a>-->
<!--            </span>-->
        </button>
    </div>


<div style="margin-left: 22%; margin-right:0%; padding:1px 16px; padding-left: 0px; width: 70%; ">
<li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin-bottom: 0px;">Patient Details</h3></li> <p></p>

<!--<span class="successadded">-->
<!--                 --><?php
//                 if(isset($_GET['msg'])){
//                     echo $_GET['msg']; // print_r($_GET);
//                 }
//                 ?>
<!--                </span>
<br><br>-->
    <span class="successadded" style="color: red">
                 <?php
                 if( isset($data['norecord'])  ){
                 if($data['norecord']=="nofound"){
                     echo ('No Record Found'); // print_r($_GET);
                 }}
                 ?>
                </span> <br>
    <br>
    <a href="<?php echo URLROOT ?>/receptionists/registerpatient"><button class="button button1" style="margin-left: 0px;">Add New Patient +</button></a>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                
                <p></p>

<!--                <div class="w3-bar w3-black">-->
<!--                <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Elders(18+)</button>-->
<!--                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Children</button>-->
<!--                </div>-->

                <div id="already" class="w3-container w3-display-container city" id="defaultOpen">
                <script> document.getElementById("defaultOpen").click(); </script>
                    <p>
                    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/receptionists/viewpatients">
                    <table>
                    <tr>

                      <th style="padding: 0px;">
                          <li Style="float: right; vertical-align: middle; display: inline;">
<!--                              Search patient by NIC-->
                            <input type="text" id="UISearchbarnic" name="UISearchbarnic" style="margin-left: 707px; height: 35px; width: 200px;" placeholder="Patient NIC or Name">
                          </li>
                      </th>
                      <th>
                          <button style="margin-left: 10px;" class="form-submit"  name="btnnic">SEARCH</button>
                      </th>

                    </tr>
                    </table>
                    </form>
                </ul>


<!--                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">-->
<!--                    <form method="post" class="data" Style="float: left;" action="--><?php //echo URLROOT; ?><!--/receptionists/viewpatients">-->
<!--                    <table>-->
<!--                    <tr>-->
<!--                      <th style="padding: 0px;">-->
<!--                          <li Style="float: right; vertical-align: middle; display: inline;">-->
<!--                             Search patient by Patient name-->
<!--                            <input type="text" id="UISearchbarname" name="UISearchbarname" style="margin-left: 707px; height: 35px; width: 200px;" placeholder="Patient Name">-->
<!--                          </li>-->
<!--                      </th>-->
<!--                      <th>-->
<!--                          <button style="margin-left: 10px;" class="form-submit"  name="btnname">SEARCH</button>-->
<!--                      </th>-->
<!--                    </tr>-->
<!--                    </table>-->
<!--                    </form>-->
<!--                </ul>-->

                    <div class="w3-bar w3-black" style="width: 500px">
                        <button class="w3-bar-item w3-button tablink w3-blue" id="defaultopen" onclick="openCity(event,'already')">Elders(18+)</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Children</button>
                    </div>

                <table id="customers">
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>NIC</th>
                        <th>Tel.No</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>
                   
                    <?php foreach($data['pat'] as $allpatients): ?>
                        <tr>
                            <td><?php echo $allpatients->patid; ?></td>
                            <td><?php echo $allpatients->patname; ?></td>
                            <td><?php echo $allpatients->patnic; ?></td>
                            <td><?php echo $allpatients->pattelno; ?></td>
                            <td><?php echo $allpatients->patadrs;?></td>
                            <td><?php echo $allpatients->patemail; ?></td>
                            <td><?php echo $allpatients->patdob; ?></td>
                            <td><?php echo $allpatients->patgen; ?></td>


                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/receptionists/updatepatient/".$allpatients->patid?>" >Update</a>
                            </td>

                            <td>
                            <form action="<?php echo URLROOT . "/Receptionists/deletepatient/" . $allpatients->patid?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                   
                  </table>
                    </p>
                </div>

            
                    <div id="one" class="w3-container w3-display-container city">
                    <p>
                    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/receptionists/viewpatients">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">

                      <input type="text" id="UISearchbargnic" name="UISearchbargnic" style="margin-left: 575px; height: 35px; width: 250px;" placeholder="Guardian's NIC or Child Name"></li>

                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit" name="btngnic" >SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
                </ul>


<!--                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">-->
<!--                    <form method="post" class="data" Style="float: left;" action="--><?php //echo URLROOT; ?><!--/receptionists/viewpatients">-->
<!--                    <table>-->
<!--                    <tr>-->
<!--                      <th><li Style="float: right; vertical-align: middle; display: inline;">-->
<!--                              Search patient by Child name-->
<!--                      <input type="text" id="UISearchbarcname" name="UISearchbarcname" style="margin-left: 707px; height: 35px; width: 200px;" placeholder="Child Name"></li>-->
<!--                      </th>-->
<!--                      <th><button style="margin-left: 10px;" class="form-submit" name="btnchildname">SEARCH</button></th>-->
<!--                    </tr>-->
<!--                    </table>-->
<!--                    </form>-->
<!--                </ul>-->

                        <div class="w3-bar w3-black" style="width:500px;">
                            <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Elders(18+)</button>
                            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Children</button>
                        </div>

                <table id="customers">
                    <tr>
                        <th>Child ID</th>
                        <th>Child Name</th>
                        <th>Guardian NIC</th>
                        <th>Tel.No</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>
                   
                    <?php foreach($data['child'] as $allchildren): ?>
                        <tr>
                            <td><?php echo $allchildren->childelderid; ?></td>
                            <td><?php echo $allchildren->fullname; ?></td>
                            <td><?php echo $allchildren->patnic; ?></td>
                            <td><?php echo $allchildren->pattelno; ?></td>
                            <td><?php echo $allchildren->patadrs;?></td>
                            <td><?php echo $allchildren->patemail; ?></td>
                            <td><?php echo $allchildren->childelderdob; ?></td>
                            <td><?php echo $allchildren->childeldergen; ?></td>


                            <td align="center">                   
                                <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/receptionists/updatechild/".$allchildren->childelderid?>" >Update</a>
                            </td>

                            <td>
                            <form action="<?php echo URLROOT . "/Receptionists/deletechild/" . $allchildren->childelderid?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                   
                  </table>
                    </p>
                </div>

                    <script>
                    function openCity(evt, cityName) {
                        var i, x, tablinks;
                        x = document.getElementsByClassName("city");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < x.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " w3-blue";
                    }
                    </script>
                
            </div>

            <script>
                document.getElementById("defaultopen").click();
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected User ?");
            }
            </script> 