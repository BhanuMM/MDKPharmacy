<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>

    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
        <div class="welcome-card">
            <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
                <div class="welcome-names">
                    Welcome , Mr.<?php echo $_SESSION['username'] ?> !
                </div>
            </div>
        </div>


    <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; ">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Prescriptions</h3></li>
        <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
            <li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Patient NIC"></li></form>
    </ul>

        <table id="customers">
            <tr>
                <th>Prescription ID</th>
                <th>Patient Name</th>
                <th>Patient NIC</th>
                <th>Time</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php foreach($data['pres'] as $allpres): ?>
                <tr>
                    <td><?php echo $allpres->presid ?></td>
                    <td><?php echo $allpres->patname ?></td>
                    <td><?php echo $allpres->patnic ?></td>
                    <td><?php echo $allpres->pretime ?></td>
                    <td><?php echo $allpres->presdate ?></td>
                    <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/viewprescription/".$allpres->presid ?>"> View</a></button></td>
                </tr>
            <?php endforeach; ?>
        </table>

            </div>

           
        </div>

    </body>
</html>