<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

            <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
                <ul style="margin-top: 5%; padding-left: 0px; padding-top: 2%; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Medicine Details</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/doctors/viewmedicineavailability">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Medicine Name"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
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