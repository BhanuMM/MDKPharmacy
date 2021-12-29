<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:20%;  padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/returnstock">
            <h2 style="margin-top: 3%;">
                Return Stock Details
            </h2>
           
            <h5>
               Medicine ID
            </h5>
            <select class="input1" name="medid" id="medid" required>
            <?php foreach($data['medicines'] as $allmeds): ?>   
                <option value="<?php echo $allmeds->medid; ?>"> <?php echo $allmeds->medgenname; ?> </option>
            
            <?php endforeach; ?>
            </select>
            <h5>
                Return Quantity
            </h5>
            <input class="input1" type="number" id="quantity" name="returnqty" placeholder="18" required>
            <h5>
                Reason to return the stock
            </h5>
            <select class="input1" name="reason" id="return" required>
                <option value="expired"> Expired</option>
                <option value="damaged"> Damaged</option>
            </select>
            <h5>
               Stock Purchased Date
            </h5>
            <input class="input1" type="date" id="pur" name="purchdate" size=15 required>
                
            <br><br><br>
            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit</button>
        </form>
    </div>
    <br><br><br><br><br><br>

           


    </body>
</html>