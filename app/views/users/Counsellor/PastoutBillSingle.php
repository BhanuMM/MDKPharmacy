<?php
require APPROOT . '/views/includes/Counsellorhead.php';
?>

    <div style="margin-left:20%; padding:1px 16px; width: 40%">
        <button class="prebtn"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/counsellors/pastbills"> << </a> </span></button>
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
                        <h2>Bill No: <?php echo $data['billid']?></h2>
<!--                        <p>Prescription No:--><?php //echo $data['presid']?><!-- </p>-->
<!--                        <p>Order Date: --><?php //echo $data['presdate']?><!--  </p>-->
<!--                                        <p>Patient Type: --><?php //echo $data['custype']?><!-- </p>-->
<!--                        <p>Patient Name: --><?php //echo $data['patname']?><!-- </p>-->
                    </div>
                    <div></div>
                </div>
            </div>

            <div class="bill-body">
                <h3>Ordered Items</h3>
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
                    <tbody>
                    <?php foreach($data['meds'] as $allmeds): ?>
                        <tr class="item">
                            <td><?php echo $allmeds->medgenname ?></td>
                            <td class="sellp"><?php echo $allmeds->medsellprice ?></td>
                            <td class="sellq"><?php echo $allmeds->quantity ?></td>
                            <td class="total"></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"  class="text-right">Sub Total</td>
                        <td ><input id="subtot" name="subtot" type="text" value="<?php echo $data['subtotal']?>" readonly> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Discount (%)</td>
                        <td> <input  id="dis" name="dis" type="text" autocomplete="off" value="<?php echo $data['discount']?>" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Gross Total</td>
                        <td ><input id="grandt"  name="grandt" type="text" value="<?php echo $data['grosstotal']?>" readonly></td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
    </script><?php
