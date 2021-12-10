<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/doctors/createprescription"><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
<!--                            <a style="border-left: 0px solid !important" href="#"><img src="--><?php //echo URLROOT ?><!--/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>-->
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Enter Patient NIC"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
                    <li Style="float: middle; vertical-align: middle; display: inline;"><h3>Select Patient</h3></li>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Patient ID</th>
                      <th>Patient NIC</th>
                      <th>Patient Name</th>
                      <th>Patient Age</th>
                      <th>Create Prescription</th>
                    </tr>
                    <tr>
                      <td><?php echo $data['id'] ?></td>
                      <td><?php echo $data['nic'] ?></td>
                      <td><?php echo $data['name'] ?></td>
                      <td><?php echo $data['dob'] ?></td>
                      <td><a href="<?php echo URLROOT. "/doctors/addprescription/". $data['id'] ?>"><button class="button button1" >Create Prescription</button></a></td>
                    </tr>

                  </table><br /><br /><br /><br />
                  
            </div>

           
        </div>

    </body>
</html>