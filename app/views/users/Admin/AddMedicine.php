<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:20%; padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addmed">
        <div class="form-left">

            <h2 style="margin-top: 3%;">
                Medicine Details
            </h2>
            
            <h5>
                Generic Name
            </h5>
            <input class="input1" type="text" id="medname" name="medname"  placeholder="Omeprazole">
            <h5>
                Brand Name
            </h5>
            <input class="input1" type="text" id="brandname" name="brandname" placeholder="Omez">
            <h5>
                Importer Name
            </h5>

            <input class="input1" id="imname" name="imname" type="text" placeholder="Heyleys">

            <h5>
                Dealer
            </h5>
            <input class="input1" type="text" id="dealer" name="dealer" placeholder="Pharma">

    </div> 
    <div class="form-right">   

            <h5>
        
                Purchase Price (Rs.)
            </h5>

            <input class="input1" type="number" id="purchprice" name="purchprice" placeholder="10.00">

            <h5>
                Selling Price (Rs.)
            </h5>

            <input class="input1" id="sellprice" name="sellprice" type="number" placeholder="12.00">

            <h5>
                Profit Margin (Rs.)
            </h5>

            <input class="input1" id="profit" name="profit" type="number" placeholder="2.00">
        <h5>
            Medicine Access Level
        </h5>
        <select class="input1" name="acslvl" required>
            <option value="" disabled selected>Choose option</option>
            <option <?php if ($data['acslvl'] == '1') echo ' selected="selected"'; ?> value="1">Level One</option>
            <option <?php if ($data['acslvl'] == '2') echo ' selected="selected"'; ?> value="2">Level Two</option>
            <option <?php if ($data['acslvl'] == '3') echo ' selected="selected"'; ?> value="3">Level Three</option>

        </select>
                
            <br><br><br><br>
            <div style="margin-left:340px;">
            <button class="form-submit">Submit
            </button>
    </div>
        </form>
    </div>
<br><br><br><br><br><br>
           


    </body>
</html>