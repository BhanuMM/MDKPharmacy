<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/doctordashboard"> << </a> </span></button>
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
                <li Style="float: left; vertical-align: middle; display: inline;"><h3>Medicine Details</h3></li>
                <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/viewmedicineavailability">
                    <table>
                    <tr>
                        <th><li Style="float: right; vertical-align: middle; display: inline;">
                        <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Medicine Names"></li>
                        </th>
                    <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
             </ul>

                <table id="customers">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Importer Name</th>
                      <th>Remaining Quantity</th>
                      <th>Selling Price</th>
                    </tr>
                    <?php foreach($data['med'] as $allmed): ?>

                        <tr>
                            <td><?php echo $allmed->medid;  ?></td>
                            <td><?php echo $allmed->medgenname; ?></td>
                            <td><?php echo $allmed->medbrand;  ?></td>
                            <td><?php echo $allmed->medimporter; ?></td>
                            <td><?php echo $allmed->quantity; ?></td>
                            <td><?php echo  $allmed->medsellprice ?></td>
                           
                        </tr>
                        
                        <?php endforeach; ?>

                  </table>
            </div>

           
        </div>

    </body>
</html>