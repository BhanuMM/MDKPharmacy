<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; box-sizing:initial; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Update Medicine
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewmed">Medicine Details</a></li>
                    <li>Update Medicine</li>
                    

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>



<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewmed"> << </a> </span></button>
</div>

    <div style="margin-left:20%; padding:1px 16px; width: 40%">

        <form class="data" action="<?php echo URLROOT; ?>/admins/updatemed/<?php echo $data['medid'] ?>" method="POST">
        <div class="form-left">

            <h2 style="margin-top: 3%;">
                Medicine Details
            </h2>
            <h5>
                Med Id 
            </h5>
            <input class="input1" type="text" id="medid" name="medid"  value="<?php echo $data['medid']?>" readonly >
            <h5>
                Generic Name
            </h5>
            <input class="input1" type="text" id="medname" name="medname"  value="<?php echo $data['genericname'] ?>">
            <h5> 
                Brand Name
            </h5>
            <input class="input1" type="text" id="brandname" name="brandname"  value="<?php echo $data['brandname'] ?>">
            <h5>
                Importer Name
            </h5>

            <input class="input1" id="imname" name="imname" type="text" value="<?php echo $data['importername'] ?>">

            <h5>
                Dealer
            </h5>
            <input class="input1" type="text" id="dealer" name="dealer" value="<?php echo $data['dealer'] ?>">
            <h5>
                Least Quantity
            </h5>
            <input class="input1" type="number" id="lowqty" name="lowqty" placeholder="50">

    </div> 
    <div class="form-right">   

            <h5>
        
                Purchase Price (Rs.)
            </h5>

            <input class="input1" type="number" id="purchprice" name="purchprice" value="<?php echo $data['purchaseprice'] ?>">

            <h5>
                Selling Price (Rs.)
            </h5>

            <input class="input1" id="sellprice" name="sellprice" type="number" value="<?php echo $data['sellingprice'] ?>">

            <h5>
                Profit Margin (Rs.)
            </h5>

            <input class="input1" id="profit" name="profit" type="number"  value="<?php echo $data['profitmargin'] ?>">
        <h5>
            Medicine Access Level
        </h5>
        <select class="input1" name="acslvl" value="<?php echo $data['acslvl'] ?>">
            <option value="" disabled selected>Choose option</option>
            <option <?php if ($data['acslvl'] == '1') echo ' selected="selected"'; ?> value="1">Level One</option>
            <option <?php if ($data['acslvl'] == '2') echo ' selected="selected"'; ?> value="2">Level Two</option>
            <option <?php if ($data['acslvl'] == '3') echo ' selected="selected"'; ?> value="3">Level Three</option>

        </select>
                
            <br><br><br><br>
         <div style="margin-left:220px;">
            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit
            </button>
    </div>
        </form>
    </div>
<br><br><br><br><br><br>
           


    </body>
</html>