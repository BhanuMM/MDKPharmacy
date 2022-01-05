<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
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
<!--            <h3>Ordered Items</h3>-->
<!--            <br>-->
            <table class="table-bordered">
                <thead>
                <tr>
                    <th>Medicine</th>
                    <th class="table-field">Dosage</th>
<!--                    <th class="table-field">Total</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach($data['meds'] as $allmeds): ?>
                <tr>
                    <td><?php echo $allmeds->medgenname ?></td>
                    <td><?php echo $allmeds->dosage ?></td>
<!--                    <td></td>-->
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <h3>Special Notes</h3> <br>
            <textarea name="Text1" class="input2" rows="5" readonly><?php echo $data['presnote']?></textarea>
                        <br>
                    </div>
                    <button class="button button1" style="float: right;">Confirm Prescription</button>
                </div>
            </div>

            </body>
            </html>
