<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/inpatientbills"> << </a> </span></button>
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
                    <h2>Bill No: </h2>
                    <p>Prescription No: <?php echo $data['presid']?></p>
                    <p>Date: <?php echo $data['presdate']?> </p>
                    <p>Time: <?php echo $data['prestime']?> </p>
                    <p>Patient Name: <?php echo $data['patname']?> </p>
                    <p>Age:  <?php echo $data['patage']?> </p>
                    <p>Gender: <?php echo $data['patgen']?>  </p>
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
                        <th class="table-field">Unit Price</th>
                        <th class="table-field">Quantity</th>
                        <th class="table-field">Total</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                <?php foreach($data['meds'] as $allmeds): ?>
                    <tr>
                        <td><?php echo $allmeds->medgenname ?></td>
                        <td class="sellp"><?php echo $allmeds->medsellprice ?></td>
                         <td class="sellp"><?php echo $allmeds->dosage ?></td>
                        <td id="price"></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="3"  class="text-right">Sub Total</td>
                        <td id="subtot"> </td>
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

<script>
    $(document).ready(function (){
        var subtot =0;
        $('tr').each(function (){
            var tot =0;
            $(this).find('.sellp').each(function (){
                var unitp =$(this).text();
                if(unitp.length !==0){
                    tot += parseFloat(unitp);
                    subtot += tot;
                }
            });
            $(this).find('#price').html(tot);
            $(this).find('#subtot').html(subtot);
        });

    });


</script>
