<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Past Bills
                    <p>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo URLROOT ?>/counsellors/counsellordashboard">Dashboard</a></li>
                        <li>Past Bills</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
         
    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Previous Bill Details</h3></li>
    </ul>
                <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/counsellors/pastbills">
                    <table>
                        <tr>
                            <th><li Style="float: right; vertical-align: middle; display: inline;">
                                    <input type="date" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill Date"></li>
                            </th>
                            <th><button style="margin-left: 10px;" class="form-submit" name="btndate">SEARCH</button></th>
                        </tr>
                    </table>
                </form>

                <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Inpatients(Patients from OPD)</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Outpatients(Pharmacy Customers)</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Online Customers</button>
                </div>

                <div id="already" class="w3-container w3-display-container city">

                <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <p>
                <table id="customers">
                    <tr>
                    <th>Bill ID</th>
                    <th>Bill Date</th>
                    <th>Bill Amount</th>
                    <th>Cashier Name</th>
                    <th>View</th>
                    </tr>
                    <?php foreach($data['inpast'] as $inpast): ?>

                    <tr>
                        <td><?php echo $inpast->billid; ?></td>
                        <td><?php echo $inpast->billdate; ?></td>
                        <td><?php echo $inpast->grosstotal; ?></td>
                        <td><?php echo $inpast->sname; ?></td>
                        <td><button class="button button1"><a href="<?php echo URLROOT. "/counsellors/pastbillsingle/".$inpast->billid ?>"> VIEW BILL</a></button></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                </p>
                </div>

                <div id="one" class="w3-container w3-display-container city" style="display:none">

                <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>

                <p>

                <table id="customers">
                <tr>
                    <th>Bill ID</th>
                    <th>Bill Date</th>
                    <th>Bill Amount</th> 
                    <th>Cashier Name</th>
                    <th>View</th>
                </tr>
                <?php foreach($data['outpast'] as $outpast): ?>

                <tr>
                    <td><?php echo $outpast->billid; ?></td>
                    <td><?php echo $outpast->billdate; ?></td>
                    <td><?php echo $outpast->grosstotal; ?></td>
                    <td><?php echo $outpast->sname; ?></td>
                    <td><div style="margin-top: 10%; margin-bottom: 10%;"><a class="updateBtn" href="<?php echo URLROOT. "/counsellors/pastbillsingle/".$outpast->billid ?>"> View Bill</a></button></td>
                </tr>
                <?php endforeach; ?>
                </table>
                </p>
                </div>

                <div id="three" class="w3-container w3-display-container city" style="display:none">

                <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['nofound'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <p>

                <table id="customers">
                <tr>
                    <th>Bill ID</th>
                    <th>Bill Date</th>
                    <th>Bill Amount</th> 
                    <th>Cashier Name</th>
                    <th>View</th>
                </tr>
                <?php foreach($data['online'] as $online): ?>

                <tr>
                    <td><?php echo $online->billid; ?></td>
                    <td><?php echo $online->billdate; ?></td>
                    <td><?php echo $online->grosstotal; ?></td>
                    <td><?php echo $online->sname; ?></td>
                    <td><div style="margin-top: 10%; margin-bottom: 10%;"><a class="updateBtn" href="<?php echo URLROOT. "/counsellors/pastbillsingle/".$online->billid ?>"> VIEW BILL</a></div></td>
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




















