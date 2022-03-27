<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%;">

    <span class="successadded" style="color: red">
                 <?php
                 if(isset($data['norecord'])){
                     echo ('No Record Found'); // print_r($_GET);
                 }
                 ?>
                </span> <br>
<!--     <span class="successadded">-->
<!--                 --><?php
//                 if(isset($_GET['msg'])){
//                     echo $_GET['msg']; // print_r($_GET);
//                 }
//                 ?>
<!--                </span> <br>-->

    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Online Order Bills</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/onlineorderbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 500px; height: 35px; width: 200px;" placeholder="Telephone Number"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                </tr>
            </table>
        </form>
</ul>

    <table id="customers">
        <tr>
            <th>Prescription ID</th>
            <th>Customer Name</th>
            <th>Telephone Number</th>
            <th></th>
            
        </tr>
        <?php foreach($data['opres'] as $allpres): ?>
            <tr>
                <td><?php echo $allpres->onlinepresid ?></td>
                <td><?php echo $allpres->onlinefname ?></td>
                <td><?php echo $allpres->onlinetelno ?></td>
                <td><button class="button button1"><a href="<?php echo URLROOT. "/cashiers/onlineordersingle/".$allpres->onlinepresid ?>"> CREATE BILL</a></button></td>
            </tr>
        <?php endforeach; ?>
    </table>

            </div>

           
        </div>

    </body>
</html>
