<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/onlineorderbills"> << </a> </span></button>
</div> 

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
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
                    <h2>Bill No: <?php echo $data['billid']?></h2>
                    <p>Prescription No: <?php echo $data['opresid']?></p>
                    <p>Date: <?php echo $data['presdate']?> </p>
                    <p>Time: <?php echo $data['prestime']?> </p>
                    <p>Customer Name: <?php echo $data['fname']?> </p>
                    
                </div>
         	<div></div>
            </div>
        </div>

        <div class="bill-body">
            <h3>Ordered Items</h3>
            <form method="post" class="data"  action="<?php echo URLROOT; ?>/cashiers/saveonlinebills">
            <br>
            <input class="input1" type="text" id="billid" name="billid" value="<?php echo $data['billid'] ?>"  hidden>
            <input class="input1" type="text" id="presid" name="presid" value="<?php echo $data['opresid'] ?>"  hidden>
            <input class="input1" type="text" id="custype" name="custype" value="online"  hidden>
            <input class="input1" type="text" id="cashierid" name="cashierid" value="<?php echo $_SESSION['user_id'] ?>" hidden >
            
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
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td><input id="subtot" name="subtot" type="text" readonly></td>
                    </tr>
                    <tr>
                    <td colspan="3"     class="text-right">Discount (%)</td>
                        <td> <input  id="dis" name="dis" type="text" autocomplete="off"></td>
                    </tr>
                    <tr>
                    <td colspan="3" class="text-right">Gross Total</td>
                        <td ><input id="grandt"  name="grandt" type="text" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Paid Amount</td>
                        <td ><input id="pamount"  name="pamount" type="text" value="<?php echo $data['payment']?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Balance</td>
                        <td ><input id="balance"  name="balance" type="text" value="<?php echo $data['balance']?>" readonly></td>
                    </tr>
                </tbody>
            </table>
        </div> 
        <button class="form-submit">Print Bill</button>    
        </form> 
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
    $(document).on("change keyup blur", "#dis", function() {

        var grandtotal =0;
        var dis = $("#dis").val();
        var subtotal = $("#subtot").val();
        if(dis !=0){
            grandtotal =  (parseFloat(subtotal)*(100-parseFloat(dis)))/100;

            $('#grandt').val( grandtotal.toFixed(2));
        }

    });



</script>

</body>
</html>