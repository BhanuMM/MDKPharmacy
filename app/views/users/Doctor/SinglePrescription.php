<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/viewpatientdetails"> << </a> </span></button>
</div>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%;">
    <div class="bill">
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
                    Time: <?php echo $data['prestime']?>
                </div>
                <div class="bill-col" align="right">
                    Patient Name: <?php if (($data['pattype'])=="adult") {echo $data['patname'];} else {echo  $data['childname'];} ?> </br>
                    Age:  <?php echo $data['patage']?> </br>
                    Gender:<?php if (($data['pattype'])=="adult") {echo $data['patgen'];} else {echo  $data['childgen'];}?>
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
                    <th class="table-field">Time</th>
                    <th class="table-field">Duration</th>
<!--                    <th class="table-field">Total</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach($data['meds'] as $allmeds): ?>
                <tr>
                    <td><?php echo $allmeds->medgenname ?></td>
                    <td><?php echo $allmeds->dosage ?></td>
                    <td><?php switch ($allmeds->medtime) {
                            case 'Bd':
                                echo "Twice A Day";
                                    break;
                            case 'Tds':
                                echo "Three times a day";
                                break;
                            case 'Nocte':
                                echo "In the night";
                                break;
                            case 'Mane':
                                echo "in the morning";
                                break;

                            default:
                                echo "One time a day";
                        } ?></td>
                    <td><?php echo $allmeds->duration ?></td>
<!--                    <td></td>-->
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <h3>Special Notes</h3> <br>
            <textarea name="Text1" class="input2" rows="5" readonly><?php echo $data['presnote']?></textarea>
                        <br>
                    </div>
                    
                    <button class="button button1" style="float: right;">Print Prescription</button>
                </div>
            </div>
            
        </div> 

            </body>
            </html>
