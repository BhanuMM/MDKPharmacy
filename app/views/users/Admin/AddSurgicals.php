<?php
require APPROOT . '/views/includes/Adminhead.php';
?>



<div style="margin-left:20%;  padding:20px 26px;">
<!--    <button class="prebtn" style="margin-right:30%;">-->
<!--        <span>-->
<!--            <a style="text-decoration: none;" href="--><?php //echo URLROOT ?><!--/admins/viewsurgicals"> << </a>-->
<!--        </span>-->
<!--    </button>-->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 3%; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Add New Surgical Item
                    <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                        <li>Surgical Items </li>
                        <li>Add New Surgical Item </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

</div>

<!-- <div padding:1px 16px; width: 40%"> -->

<form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addsurg">
    <div class="form-left" style="margin-top: 10%; padding-top: 0;">

<!--        <h2 style="margin-top: 0;">-->
<!--            Surgical Details-->
<!--        </h2>-->


        <h5>
            Item Name
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

    <div class="form-right" style="margin-top: 10%; padding-top: 0;">
    <h5>
            Least Quantity
        </h5>
        <input class="input1" type="number" id="lowqty" name="lowqty" placeholder="50">

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
<!--        <h5>-->
<!--            Medicine Access Level-->
<!--        </h5>-->
<!--        <select class="input1" name="acslvl" required>-->
<!--            <option value="" disabled selected>Choose option</option>-->
<!--            <option --><?php //if ($data['acslvl'] == '1') echo ' selected="selected"'; ?><!-- value="1">Level One</option>-->
<!--            <option --><?php //if ($data['acslvl'] == '2') echo ' selected="selected"'; ?><!-- value="2">Level Two</option>-->
<!--            <option --><?php //if ($data['acslvl'] == '3') echo ' selected="selected"'; ?><!-- value="3">Level Three</option>-->
<!---->
<!--        </select>-->

        <br><br><br><br>
        
            <div style="float: left; margin-left: 44%; margin-top: 0.5%;">

                <input class="clearBtn" type="reset" value="Refresh">
                <button class="submitBtn">Submit</button>

                    </div>
            </div>
</form>
<br><br>
</div></div>
<br><br><br><br><br><br>



</body>
</html>