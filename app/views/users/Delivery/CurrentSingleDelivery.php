<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                View Delivery Details                <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li>Current Deliveries </li>
                        <li>View Delivery Details </li>
                       
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
<div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: ">
                
               <p></p>
              </div>
                
        <div class="bill">

        <div class="bill-body">
            <div class="bill-row">
                <div class="bill-col">
                        <b>Bill No: <?php echo $data['billid']?></b></br>
                        Prescription No: <?php echo $data['presid']?></br>
                        Date: <?php echo $data['billdate']?>
                </div>
                <div class="bill-col" align="right">
                        Customer Name: <?php echo $data['custname']?></br>
                        Customer's Contact Number: <?php echo $data['custtelno']?></br>
                        Customer's Address: <?php echo $data['custadrs']?>
                </div>
         	<div></div>
            </div>
        </div>

        <div class="bill-body">
        <h3>Ordered Items</h3>
            <!-- <form method="post" class="data"  action="<?php echo URLROOT; ?>/deliverys/deliverydashboard"> -->
            <br>
            <table class="table-bordered" id="tableData">
                <thead>
                    <tr>
                        <th>Medicine</th>
                        <th class="table-field">Unit Price</th>
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
        <div class="company">
            <div class="bill-row">
                <div class="bill-col">
                    <p class="text-white">Thank you Come Again!</p>
                </div>
                <div class="bill-col">
                    <div class="text-white" align="right">
                        MDK Hospitals</br>
                        No 149, Sri Ariyavilasa Rd, Horana 12400</br>
                        mdkhospital@gmail.com</br>
                        +94 347 888 888
                    </div>
                </div>
            </div>
        </div>     <br><br>
        <!-- <form> -->
        
        <!-- <a href="<?php echo URLROOT ?>/Deliverys/confirmdel"><button class="form-submit">Confirm Delivery</button> </a>  -->
        <div style="float: left; margin-left: 70%; text-align: left;">
        <form method="post" class="data"  action="<?php echo URLROOT; ?>/deliverys/confirmdelivery">

             <input class="input1" type="text" id="presid" name="presid" value="<?php echo $data['presid'] ?>"  hidden>
            <p>Have you completed the order?</p>
            <div style="margin-left: 63%;">
             <button class="form-submit">Yes</button> </a>
             </div>  
        </form>    
                </div>
        <br><br><br>
    </div>
    
    </div>
           
    
<script>
    $(document).ready(function() {
        var subtotal = 0;
        $('.item').each(function() {
            var qty = $(this).find('.sellq').text();
            var price = $(this).find('.sellp').text();
            var total = parseFloat(qty) * parseFloat(price);
            $(this).find('.price').text(total.toFixed(2));
            if(!isNaN(total))
                subtotal +=total;
        });
        $("#subtot").val(subtotal.toFixed(2));
        $('#grandt').val(subtotal.toFixed(2));



    });
   




</script> 


    </body>
</html>