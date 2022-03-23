<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>
<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%;">
     <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>

    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Create Inpatient Bills</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/inpatientbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 500px; height: 35px; width: 200px;" placeholder="Prescription ID"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                </tr>
            </table>
        </form>
</ul>

    <table id="customers">
        <tr>
            <th>Prescription ID</th>
            <th>Patient Name</th>
            <th>Patient NIC</th>
            <th>Date</th>
            <th></th>
        </tr>
        <?php foreach($data['pres'] as $allpres): ?>
            <tr>
                <td><?php echo $allpres->presid ?></td>
                <td><?php if (($allpres->pattype)=="adult") {echo $allpres->patname;} else {echo  $allpres->fullname. "(18-)";} ?></td>
                <td><?php echo $allpres->patnic ?></td>
                <td><?php echo $allpres->presdate ?></td>
                <td><button class="button button1"><a href="<?php echo URLROOT. "/cashiers/inpatientsingle/".$allpres->presid ?>"> CREATE BILL</a></button></td>
            </tr>
        <?php endforeach; ?>
    </table>

            </div>

           
        </div>

    </body>
</html>
