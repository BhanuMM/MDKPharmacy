<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <button class="prebtn"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/inpatientbills"> << Previous </a> </span></button>
</div>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
<div class="bill">
        <div class="company">
            <div class="bill-row">
                <div class="bill-col">
                    <h1 class="text-white">MDK Hospitals</h1>
                </div>
                <div class="bill-col">
                    <div class="company-details">
                        <p class="text-white">No 149, Sri Ariyavilasa Rd, Horana 12400</p>
                        <p class="text-white">mdkhospital@gmail.com</p>
                        <p class="text-white">+94 347 888 888</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bill-body">
            <div class="bill-row">
                <div class="bill-col">
                    	<h2>Bill No: </h2>
                    	<p>Prescription No: </p>
                    	<p>Order Date: </p>
			            <p>Patient Type: </p>
                    	<p>Patient Name:  </p>
                </div>
         	<div></div>
            </div>
        </div>

        <div class="bill-body">
            <h3>Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Medicine</th>
                        <th class="table-field">Price</th>
                        <th class="table-field">Quantity</th>
                        <th class="table-field">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Discount</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Gross Total</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-left:85%;">
        <br><br>
        <button class="form-submit">Print Bill</button> 
</div>      
    </div>  
    <br><br><br>
</div>   

</body>
</html>