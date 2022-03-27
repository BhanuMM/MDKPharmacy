<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;">
        <span>
            <a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a>
        </span>
    </button>
</div>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
            <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Previous Bill Details</h3></li>
</ul>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Inpatients(Patients from OPD)</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Outpatients(Pharmacy Customers)</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Online Customers</button>
</div>

<div id="already" class="w3-container w3-display-container city">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
  <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/pastbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit" name="btnin">SEARCH</button></th>
                </tr>
            </table>
        </form>
    <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
  <table id="customers">
        <tr>
            <th>Bill ID</th>
            <!--                <th>Prescription ID</th>-->
            <!--                <th>Patient Name</th>-->
            <th>Bill Date</th>
            <th>Chashier ID</th>
            <th>View</th>
        </tr>
        <?php foreach($data['inpast'] as $inpast): ?>

            <tr>
                <td><?php echo $inpast->billid; ?></td>
                <td><?php echo $inpast->billdate; ?></td>
                <td><?php echo $inpast->cashierid; ?></td>
                <!--                    <td>--><?php //echo $inpast->patnic; ?><!--</td>-->
                <!--                    <td>--><?php //echo $inpast->presdate; ?><!--</td>-->
                <td><button class="button button1"><a href="<?php echo URLROOT. "/cashiers/pastbillsingle/".$inpast->billid ?>"> VIEW BILL</a></button></td>
            </tr>
        <?php endforeach; ?>
</table> 
</p>
</div>

<div id="one" class="w3-container w3-display-container city" style="display:none">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
  <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/pastbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="outUISearchbar" name="outUISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit" name="btnout">SEARCH</button></th>
                </tr>
            </table>
        </form>
    <table id="customers">
        <tr>
            <th>Bill ID</th>
            <th>Bill Date</th>
            <th>Cashier ID</th>
            <!--                <th>Date</th>-->
            <th>View</th>
        </tr>
        <?php foreach($data['outpast'] as $outpast): ?>

            <tr>
                <td><?php echo $outpast->billid; ?></td>
                <td><?php echo $outpast->billdate; ?></td>
                <td><?php echo $outpast->cashierid; ?></td>
                <!--                    <td>--><?php //echo $outpast->patnic; ?><!--</td>-->
                <!--                    <td>--><?php //echo $outpast->presdate; ?><!--</td>-->
                <td><button class="button button1"><a href="<?php echo URLROOT. "/cashiers/pastoutbillsingle/".$outpast->billid ?>"> VIEW BILL</a></button></td>
            </tr>
        <?php endforeach; ?>
    </table>
</p>
</div>

<div id="three" class="w3-container w3-display-container city" style="display:none">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
  <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/pastbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="onlineUISearchbar" name="onlineUISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit" name="btnonline">SEARCH</button></th>
                </tr>
            </table>
        </form>
  <table id="customers">
        <tr>
            <th>Bill ID</th>
            <th>Bill Date</th>
            <th>Cashier ID</th>
            <!--                <th>Date</th>-->
            <th>View</th>
        </tr>
        <?php foreach($data['online'] as $online): ?>

            <tr>
                <td><?php echo $online->billid; ?></td>
                <td><?php echo $online->billdate; ?></td>
                <td><?php echo $online->cashierid; ?></td>
                <!--                    <td>--><?php //echo $online->onlinetelno; ?><!--</td>-->
                <!--                    <td>--><?php //echo $online->presdate; ?><!--</td>-->
                <td><button class="button button1"><a href="<?php echo URLROOT. "/cashiers/pastbillsingle/".$online->billid ?>"> VIEW BILL</a></button></td>
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






                <!-- <table id="customers">
                    <tr>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>Date</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr001</td>
                      <td>D.S.Kulathunga</td>
                      <td>785236954V</td>
                      <td>2021-10-12</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr002</td>
                      <td>R.S.Perera</td>
                      <td>697854124V</td>
                      <td>2021-10-23</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr003</td>
                      <td>D.N.Silva</td>
                      <td>854565751V</td>
                      <td>2021-10-14</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table> -->
