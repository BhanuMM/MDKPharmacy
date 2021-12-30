<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="NIC"></li>

                    </form>
                </ul>
               
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
                        <th>View Prescriptions</th>

                    </tr>
                    <?php foreach($data['pat'] as $allpat): ?>
                    <tr>
                        <td><?php echo $allpat->patid ?></td>
                        <td><?php echo $allpat->patname ?></td>
                        <td><?php echo $allpat->patnic ?></td>
                        <td><?php echo $allpat->pattelno ?></td>
                        <td><?php echo $allpat->patadrs ?></td>
                        <td><?php echo $allpat->patemail ?></td>
                        <td><?php echo $allpat->patdob ?></td>
                        <td><?php echo $allpat->patgen ?></td>
                        <td align="center">
                            <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT ."/doctors/allprescriptions/".$allpat->patid ?>" >view</a>
                        </td>


                    </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>

    </body>
</html>