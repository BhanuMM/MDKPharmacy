<?php
require APPROOT . '/views/includes/Adminhead.php';
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; box-sizing:initial; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Add New Medicine
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewmed">Medicine Details</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/addmed">Add New Medicine</a></li>
                    

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<!--<div style="margin-left:20%; padding:1px 16px; width: 40%">-->

        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addmed">
        <div class="form-left">

           
            
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
                Supplier Name
            </h5>
            <select class="input1" name="dealer" id="dealer">
                <option value="" selected>--- Choose a Supplier ---</option>
                <?php foreach($data['suppliers'] as $allsuppliers): ?>
                   <option value=" <?php echo $allsuppliers->agencyname; ?>"><?php echo $allsuppliers->agencyname; ?></option>
                <?php endforeach; ?>
            </select>
<!--            <input class="input1" type="text" id="dealer" name="dealer" placeholder="Pharma">-->

            <h5>
                Least Quantity
            </h5>
            <input class="input1" type="number" id="lowqty" name="lowqty" placeholder="50">

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
            <div style="float: left; margin-left: 44%;">
            <br><br>
                   <input class="clearBtn" style="  " type="reset"  value=" Clear">
           
       
                   <input class="submitBtn" style="" type="submit" name="submitbutton1"  Value="Register" >
             
            </div>
        </form>
    </div>
<br><br><br><br><br><br>
           


    </body>
</html>