<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
            Add New Stock
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewstock">Full Stock Details</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/addstock">Add New Stock</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
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
            <div class="form-right" style="margin-top: 9.5%;">

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
                <div style="float: left; margin-left: 44%; margin-top: 17%;">

                <input class="clearBtn" type="reset" value="Refresh">
                <button class="submitBtn">Submit</button>

                    </div>
            </div>
        </form>
    </div>