<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                Single Prescription                    <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li>Prescriptions</li>
                        <li>Single Prescription</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
    <form class="bill">
        <div class="company">
            <div class="bill-row">
                <div class="bill-col">
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

        <div class="bill-body">
            <div class="bill-row">
                <div class="bill-col">
                    <b>Prescription No: <?php echo $data['presid']?></b></br>
                    Date: <?php echo $data['presdate']?> </br>
                    Time: <?php echo $data['prestime']?> </br>
                </div>
                <div class="bill-col">
                    Patient Name: <?php if (($data['pattype'])=="adult") {echo $data['patname'];} else {echo  $data['childname'];} ?></br>
                    Age:  <?php echo $data['patage']?> </br>
                    Gender: <?php if (($data['pattype'])=="adult") {echo $data['patgen'];} else {echo  $data['childgen'];} ?>
                </div>
                <div></div>
            </div>
        </div>

        <div class="bill-body">
<!--            <h3>Ordered Items</h3>-->
<!--            <br>-->
         <form method="post" action="<?php echo URLROOT?> /pharmacists/updateqty">
                <input id="presid"  name="presid" type="number" value="<?php echo $data['presid']?>" hidden>

            <table class="table-bordered">
                <thead>
                <tr>
                    <th>Medicine</th>
                    <th class="table-field">Dosage</th>
                    <th class="table-field">Med Time</th>
                    <th class="table-field">Duration</th>
                    <th class="table-field">QTY</th>
<!--                    <th class="table-field">Total</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach($data['meds'] as $allmeds): ?>
                <tr>
                    <td><?php echo $allmeds->medgenname ?> </td>
                    <td><?php echo $allmeds->dosage ?></td>
                    <td><?php echo $allmeds->medtime ?></td>
                    <td><?php echo $allmeds->duration ?></td>
                    <td> <input id="medid"  name="medid[]" type="number" value="<?php echo $allmeds->medid?>" hidden><input id="qty"  name="qty[]" type="number" value="<?php echo $allmeds->qty ?>" autocomplete="off" required></td>
<!--                    <td></td>-->
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <h3>Special Notes</h3> <br>
            <textarea name="Text1" class="input2" rows="5" readonly><?php echo $data['presnote']?></textarea>
                        <br>
                    </div><br>
                    <div style="float: left; margin-left: 41%;">
        <input type="submit" name="submitbutton4" value="Confirm Prescription" class="opbill-form-submit" style="font-family:'Poppins', sans-serif; margin-left: 300px;" >
<!--                    <button class="button button1" style="float: right;">Confirm Prescription</button>-->
                </div>
    </form>
                </div><br><br><br><br>
            </div>

            </body>
            </html>
