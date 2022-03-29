<?php
require APPROOT . '/views/includes/Reporthead.php';
?>

<div class="heading" style="margin-top: -5%;">
    <img src="<?php echo URLROOT ?>/public/images/1.png" style="color: white; margin-left: 47%; margin-top: -5%; width: 70px;"/><br>
    <strong style="color: aliceblue;  margin-left: 45%; ">MDK HOSPITALS</strong>
</div>
<div class="centered" style="width: 90%; ">
    <div style="z-index: 3; color: white; align-content: center;">

        <br><br><br><br><br>
        <div align="center"><br><br>
            <h1>Inventory Daily Report</h1>
            <h2>Date: <?php echo $data['repdate'] ?></h2></br>

            Report Generated Time: <?php $date = date('h:i:s'); echo $date;?> </br>

        </div>
    </div>

    <button class="btn" style="margin-left: 86%; border-radius: 5px; font-size: 15px;"><i class="fa fa-download"></i>Download</button>

    <br>
    <div class="bill-body" style="margin: 5%;">
        <h1>Purchased Medicines</h1>
        <hr>
        <h4> Purchased Stocks Value : Rs.</h4>
        <!--        <canvas id="myChart" width="400" height="400"></canvas>-->
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Medicine</th>
                <th class="table-field">Quantity</th>

                <th class="table-field">Purchase Price</th>
                <!--                <th class="table-field">Profit</th>-->
                <!--                <th class="table-field">Total</th>-->
            </tr>
            </thead>
            <?php foreach($data['purchmedicine'] as $allpurch): ?>
                <tr >
                    <td><?php echo $allpurch->medgenname; ?></td>
                    <td><?php echo $allpurch->quantity; ?></td>
                    <td><?php echo $allpurch->purchprice; ?></td>
                    <!--                <td>--><?php //echo $allpurch->medgenname; ?><!--</td>-->
                </tr>
            <?php endforeach; ?>

        </table>
        <h1>Returned Medicines</h1>
        <hr>
        <h4> Returned Medicines Value : Rs. <?php echo $data['purchcount'] ?></h4>
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Medicine</th>
                <th class="table-field">Quantity</th>
<!--                <th class="table-field">Returned Price</th>-->

                <!--                <th class="table-field">Profit</th>-->
                <!--                <th class="table-field">Total</th>-->
            </tr>
            </thead>
            <?php foreach($data['returnmedicine'] as $allreturn): ?>
                <tr style="text-align: center">
                    <td><?php echo $allreturn->medgenname; ?></td>
                    <td><?php echo $allreturn->rquantity; ?></td>
<!--                    <td>--><?php //echo $allreturn->reason; ?><!--</td>-->
                    <!--                <td>--><?php //echo $allpurch->medgenname; ?><!--</td>-->
                </tr>
            <?php endforeach; ?>

        </table>

<!--        <h2> Total Income : Rs. --><?php //echo $data['onlinebillsum'] +$data['outbillsum']+$data['inbillsum'] ?><!-- </h2>-->


    </div>
</div>


