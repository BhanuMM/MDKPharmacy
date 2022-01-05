<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>View Return Stocks</h3></li>
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/viewreturns">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Medicine Name"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
                    </form>
                </ul>
                
                <table id="customers">
                    <tr>
                      <th>Purchased Date</th>
                      <th>Medicine ID</th>
                      <th>Supplier Agency Name</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Return Quantity</th>
                      <th>Reason to return the stock</th>
                    </tr>
                    <?php foreach($data['allreturnstock'] as $allmedicines): ?>

                    <tr>
                         <td><?php echo $allmedicines->purchdate; ?></td>
                         <td><?php echo $allmedicines->medid; ?></td>
                         <td><?php echo $allmedicines->medimporter; ?></td>
                         <td><?php echo $allmedicines->medbrand; ?></td>
                         <td><?php echo $allmedicines->medgenname; ?></td>
                         <td><?php echo $allmedicines->rquantity; ?></td>
                         <td><?php echo $allmedicines->reason; ?></td>
                         
                    </tr>
                        
                     <?php endforeach; ?>

                  </table>

            </div>

           
        </div>

    </body>
</html>