<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back Button-->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Return Stock Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewstock">Full Stock Details</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/returnstock">Return Stocks</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>


<br>
<!--Page Heading-->
    <div style="margin-left:23%;  padding:1px 15px; width: 42%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/returnstock">
           

<!--           Form fields starts from here-->
            <h5>
               Medicine ID
            </h5>
            <select class="input1" name="medid" id="medid" required>
                <?php foreach($data['medicines'] as $allmeds): ?>
                    <option value="<?php echo $allmeds->medid; ?>">
                        <?php echo $allmeds->medgenname; ?>
                    </option>
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


            <h5>
                Stock Returned Date
            </h5>
            <input class="input1" type="date" id="rdate" name="rdate" size=15 required>

            <br><br><br>

<!--            Submit buttons-->
<div style="float: left; margin-left: 62%; margin-right: -5%;">
            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit</button>
</div>
        </form>
        
    </div>
    <br><br><br><br>