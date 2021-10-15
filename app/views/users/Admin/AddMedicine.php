<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:17%; padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addmedicine">

            <h2 style="margin-top: 3%;">
                Medicine Details
            </h2>
            <h5>
                Generic Name
            </h5>
            <input class="input1" type="text" id="medname" name="medname"  placeholder="omeprazole">
            <h5>
                Brand Name
            </h5>
            <input class="input1" type="text" id="brandname" name="brandname" placeholder="omez">
            <h5>
                Importer Name
            </h5>
            <input class="input1" id="imname" name="imname" type="text" placeholder="helis">
            <h5>
                Dealer
            </h5>
            <input class="input1" type="text" id="dealer" name="dealer" placeholder="medsupply">
            <h5>
                Purchase Price
            </h5>
            <input class="input1" type="text" id="purchprice" name="purchprice" placeholder="Rs.10">
            <h5>
                Selling Price
            </h5>
            <input class="input1" id="sellprice" name="sellprice" type="text" placeholder="Rs.12">
            <h5>
                Profit Margin
            </h5>
            <input class="input1" id="profit" name="profit" type="text" placeholder="Rs.2">
                
            <br><br>
            <button class="button button1">Submit</button>
        </form>
    </div>

           


    </body>
</html>