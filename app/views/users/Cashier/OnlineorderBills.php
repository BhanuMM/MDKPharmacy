<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>
<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">


<ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Create Online Order Bills</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/onlineorderbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 480px; height: 35px; width: 200px;" placeholder="Telephone Number"></li>
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
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <tr>
                      <td>Pr067</td>
                      <td>T.N.H.Silva</td>
                      <td>0756545258</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr098</td>
                      <td>S.T.Amarasiri</td>
                      <td>0777348759</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                    <tr>
                      <td>Pr092</td>
                      <td>T.U.Fernando</td>
                      <td>0777982453</td>
                      <td><a href="<?php echo URLROOT ?>/cashiers/onlineordersingle"><button class="button button1">Create Bill</button></a></td>
                    </tr>
                  </table>
            </div>

           
        </div>

    </body>
</html>
