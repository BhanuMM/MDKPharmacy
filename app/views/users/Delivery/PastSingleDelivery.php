<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/deliverys/viewpastdeliveries"> << Previous </a> </span></button>
</div>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                <ul style="margin-top: 5%; padding-left: 0px; list-style-type: none; overflow: auto;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3>Delivery Details</h3></li>
                </ul>

                <ul><li style="list-style: none;"><h4>Date: <?php echo $data['date']?></h4></li>
                    <li style="list-style: none;"><h4>Delivery ID: <?php echo $data['delid']?></h4></li>
                    <li style="list-style: none;"><h4>Address:<?php echo $data['adrs']?></h4></li>
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
                    	<h2>Prescription No: <?php echo $data['presid']?></h2>
                    	<p>Bill No: <?php echo $data['billid']?> </p>
                    	<p>Order Date: <?php echo $data['billdate']?>  </p>
			            <p>Customer Name: <?php echo $data['custname']?> </p>
                        <p>Customer's Contact Number: <?php echo $data['custtelno']?> </p>
                        <p>Customer's Address: <?php echo $data['custadrs']?> </p>
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
                <?php foreach($data['meds'] as $allmeds): ?>
                    <tr class="item">
                        <td><?php echo $allmeds->medgenname ?></td>
                        <td class="sellp"><?php echo $allmeds->medsellprice ?></td>
                         <td class="sellq"><?php echo $allmeds->dosage ?></td>
                        <td class="price"></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total </td>
                        <td><?php echo $data['subtot']?></td>
                    </tr>
                    <tr>
                    <td colspan="3"     class="text-right">Discount (%)</td>
                    <td><?php echo $data['disc']?></td>
                    </tr>
                    <tr>
                    <td colspan="3" class="text-right">Gross Total</td>
                    <td><?php echo $data['grosstot']?></td>
                    </tr>
                </tbody>
            </table>
        </div>      
    </div>
</div>
    </body>
</html>