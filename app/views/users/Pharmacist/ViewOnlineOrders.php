<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard"> << </a> </span></button>
</div> 

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">

<ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Online Prescriptions</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/pharmacists/viewonlineorders">
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
                      <th>Order ID</th>
                      <th>Patient Name</th>
                      <th>Telephone Number</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['orders'] as $allorders): ?>
                        <tr>
                            <td><?php echo $allorders->onlineoid ?></td>
                            <td><?php echo $allorders->onlinefname ?></td>
                            <td><?php echo $allorders->onlinetelno ?></td>
                            <td><button class="button button1"><a href="<?php echo URLROOT. "/pharmacists/onlineorderprepare/".$allorders->onlineoid ?>"> View</a></button></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>
