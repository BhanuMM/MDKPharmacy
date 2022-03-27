<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/inpatientbills"> << </a> </span></button>
</div>  

<div style="margin-left: 340px;  margin-right:0%; padding:1px 16px; width: 70%; ">

<div class="bill">
        <div class="bill-body">
        
            <div class="bill-row">
                <div class="bill-col">
                    <b>Bill No: <?php echo $data['billid']?></b></br>
                    Prescription No: <?php echo $data['presid']?></br>
                    Customer Name: <?php echo $data['patname']?>
                </div>
                <div class="bill-col" align="right">
                    Date: <?php echo $data['presdate']?></br>
                    Time: <?php echo $data['prestime']?>
<!--                    <p>Age:  --><?php //echo $data['patage']?><!-- </p>-->
<!--                    <p>Gender: --><?php //echo $data['patgen']?><!--  </p>-->
                </div>
            </div>
        </div>

        <div class="bill-body">
            <h3>Ordered Items</h3>
            <form method="post" class="data"  action="<?php echo URLROOT; ?>/cashiers/savebills">
            <br>
            <input class="input1" type="text" id="billid" name="billid" value="<?php echo $data['billid'] ?>"  hidden>
            <input class="input1" type="text" id="presid" name="presid" value="<?php echo $data['presid'] ?>"  hidden>
            <input class="input1" type="text" id="custype" name="custype" value="in"  hidden>
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
                         <td class="sellq"><?php echo $allmeds->qty ?></td>
                        <td class="price"></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="3"  class="text-right">Sub Total</td>
                        <td ><input id="subtot" name="subtot" type="text" readonly> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Discount (%)</td>
                        <td> <input  id="dis" name="dis" type="text" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Gross Total</td>
                        <td ><input id="grandt"  name="grandt" type="text" readonly></td>
                    </tr>
                <tr>
                    <td colspan="3" class="text-right">Paid Amount</td>
                    <td ><input id="pamount"  name="pamount" type="text" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Balance</td>
                    <td ><input id="balance"  name="balance" type="text" readonly></td>
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
        </div> 
        <button style="margin-left:85%;" class="form-submit">Print Bill</button>
        </form>     
    </div>
    <br><br><br>
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
    $(document).on("change keyup keydown blur", "#dis", function() {

        var grandtotal =0;
        var dis = $("#dis").val();
        var subtotal = $("#subtot").val();
        if(dis !=0 && dis>0){
            grandtotal =  (parseFloat(subtotal)*(100-parseFloat(dis)))/100;
            var pamount = $("#pamount").val();
            if (pamount != 0){
                // grandtotal = $("#grandt").val();
                var balance =  parseFloat(grandtotal)- parseFloat(pamount);
                $('#balance').val( balance.toFixed(2));
            }
                $('#balance').val(null );
                $('#grandt').val( grandtotal.toFixed(2));

        }

    });
    $(document).on("change keyup keydown blur", "#pamount", function() {

        var balance =0;
        var pamount = $("#pamount").val();
        var grosstotal = $("#grandt").val();
        if(pamount !=0 && pamount > 0){
            balance =  parseFloat(pamount)- parseFloat(grosstotal);

            $('#balance').val( balance.toFixed(2));
        }

    });


</script>
