<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>

<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/deliverys/deliverydashboard"> << </a> </span></button>
</div> 
<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
<span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>

                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Current Deliveries</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/deliverys/viewcurrentdeliveries">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Telephone Number"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Pres ID</th>
                      <th>Customer Name</th>
                      <th>Telephone</th>
                      <th>Address</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['del'] as $alldel): ?>

                    <tr>
                    <td><?php echo $alldel->onlinepresid ?></td>
                    <td><?php echo $alldel->onlinefname ?></td>
                    <td><?php echo $alldel->onlinetelno ?></td>
                    <td><?php echo $alldel->onlineadrs ?></td>
                    <td><button class="button button1"><a href="<?php echo URLROOT. "/deliverys/viewcurrentsingle/".$alldel->onlinepresid ?>"> VIEW BILL</a></button></td>
            </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>
</div>

    </body>
</html>