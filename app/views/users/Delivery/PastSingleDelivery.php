<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Delivery Details</h3></li>
                </ul>

                <ul><li style="list-style: none;"><h4>Date:</h4></li>
                    <li style="list-style: none;"><h4>Delivery ID:</h4></li>
                    <li style="list-style: none;"><h4>Address:</h4></li>
                </ul>
               <p></p>
            </div>
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
                    	<h2>Prescription No: </h2>
                    	<p>Bill No: </p>
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
    </div>
</div>
    </body>
</html>