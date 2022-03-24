<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<!--Back Button-->
    <div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> << </a>
            </span>
        </button>
    </div>

<!--Heading of the web page-->
    <div style="margin-left:20%; padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addstock">
            <div class="form-left">
                <h2 style="margin-top: 3%;">
                    Stock Details
                </h2>

                <!--Starting the left form fields-->
                <h5>
                    Medicine ID
                </h5>
                <select class="input1" name="medid" id="generic" required>
                    <?php foreach($data['medicines'] as $allmeds): ?>
                        <option value="<?php echo $allmeds->medid; ?>"> <?php echo $allmeds->medgenname; ?> </option>
                    <?php endforeach; ?>
                </select>

                <h5>
                    Package Size
                </h5>
                <input class="input1" type="number" id="pack" name="package" placeholder="100" required>

                <h5>
                    Quantity
                </h5>
                <input class="input1" type="number" id="quantity" name="quantity" placeholder="18" required>

                <h5>
                    Purchasing unit price (Rs.)
                </h5>
                <input class="input1" type="number" id="purchprice" name="purchprice" placeholder="10.00" required>
            </div>

            <!--Starting the right form fields-->
            <div class="form-right">

                <h5>
                    Selling unit price (Rs.)
                </h5>
                <input class="input1" type="number" id="sellprice" name="sellprice" placeholder="13.00" required>

                <h5>
                    Purchase Date
                </h5>
                <input class="input1" type="date" id="purchdate" name="purchdate" placeholder="2021-01-02"required>

                <h5>
                    Expiry Date
                </h5>
                <input class="input1" type="date" id="expdate" name="expdate" placeholder="2023-01-02" required>
                
                <br><br><br>

                <input class="button button1" type="reset" value="Refresh">
                <button class="form-submit">Submit</button>
            </div>
        </form>
    </div>