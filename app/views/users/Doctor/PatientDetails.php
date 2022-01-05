<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Patient Details</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/doctors/viewpatientdetails">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Patient NIC"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
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