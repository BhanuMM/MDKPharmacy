<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:20%;  padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addstock">
            <h2 style="margin-top: 3%;">
                Stock Details
            </h2>
            <h5>
                Item Code
            </h5>
            <input class="input1" type="text" id="item" name="item" placeholder="Med Stock 01">
            <h5>
                Quantity
            </h5>
            <input class="input1" type="number" id="quantity" name="quantity" placeholder="18">
            <h5>
                Purchasing unit price
            </h5>
            <input class="input1" type="number" id="purchprice" name="purchprice" placeholder="10.00">
            <h5>
                Selling unit price
            </h5>
            <input class="input1" type="number" id="sellprice" name="sellprice" placeholder="13.00">
            <h5>
                Purchase Date
            </h5>
            <input class="input1" type="date" id="purchdate" name="purchdate" placeholder="2021-01-02">
            <h5>
                Expiry Date
            </h5>
            <input class="input1" type="date" id="expdate" name="expdate" placeholder="2023-01-02">
                
            <br><br>
            <button class="form-submit">Submit</button>
        </form>
    </div>
    <br><br><br><br><br><br>

           


    </body>
</html>