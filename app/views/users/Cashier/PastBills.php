<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>
<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  

            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
            <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Previous Bill Details</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/pastbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
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
                  </table>

            </div>

           
        </div>

    </body>
</html>