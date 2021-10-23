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


    <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Prescriptions</h3></li>
        <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
            <li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Prescription ID"></li></form>
    </ul>
                
                <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr009</td>
                      <td>G.H.K.Perera</td>
                      <td>7589456521V</td>
                      <td>2021-10-08</td>
                      <td align="center"><a href="<?php echo URLROOT?>/pharmacists/viewprescription"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                        <td>Pr007</td>
                      <td>G.H.K.Perera</td>
                      <td>7589456521V</td>
                      <td>2021-10-08</td>
                      <td align="center"><a href="<?php echo URLROOT?>/pharmacists/viewprescription"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                        <td>Pr005</td>
                        <td>R.Y.T.Silva</td>
                        <td>851263457V</td>
                        <td>2021-09-08</td>
                        <td align="center"><a href="<?php echo URLROOT?>/pharmacists/viewprescription"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>