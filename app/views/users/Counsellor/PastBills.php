<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/counsellors/counsellordashboard"> << </a> </span></button>
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
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Previous Bill Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/counsellors/pastbills">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 500px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
                </ul>
               
                <table id="customers">
                    <tr>
                      <th>Bill ID</th>
                      <th>Prescription ID</th>
                      <th>Patient Name</th>
                      <th>Patient NIC</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>B001</td>
                      <td>Pr001</td>
                      <td>B.N.Perera</td>
                      <td>785263951V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>B002</td>
                      <td>Pr002</td>
                      <td>S.N.Silva</td>
                      <td>765266781V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                    <tr>
                      <td>B003</td>
                      <td>Pr003</td>
                      <td>P.B.Peiris</td>
                      <td>985263951V</td>
                      <td><a href="<?php echo URLROOT ?>/counsellors/pastbillsingle"><button class="button button1">View</button></a></td>
                    </tr>
                  </table>

            </div>

           
        </div>

    </body>
</html>