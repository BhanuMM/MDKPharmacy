<?php
require APPROOT . '/views/includes/Reporthead.php';
?>

<div class="centered" style="width: 90%;">
    <div class="heading" align="center" style="align-content: start; background-color:#0a0a2e; ">
        <img src="<?php echo URLROOT ?>/public/images/1.png" style="margin-left: 1%; width: 70px; float: left;"/>
        <br>
        <strong style="color: aliceblue; float: left;">MDK HOSPITALS</strong>
    </div>

    <br><br><br><br><br>
    <div align="center">
        <h1>Daily Summary Report</h1>
<!--        <h2>Date: --><?php //echo $data['dategen'] ?><!--</h2></br>-->
<!--         Report Generated Time: --><?php //$date = date('h:i:s'); echo $date;?><!-- </br>-->
    </div>

    <div class="bill-body" style="margin: 5%;">
        <h1>Cash Inflow</h1>
        <h2> In Patient Bills</h2>
<!--        <h4>In Patient Bill Count :--><?php //echo $data['inbillcount'] ?><!-- </h4>-->
<!--        <h4>In Patient Bills Income  : Rs. --><?php //echo $data['inbillsum'] ?><!-- </h4>-->
<!--        <h2> Out Patient Bills</h2>-->
<!--        <h4>Out Patient Bill Count :--><?php //echo $data['outbillcount'] ?><!-- </h4>-->
<!--        <h4>Out Patient Bills Income  : Rs. --><?php //echo $data['outbillsum'] ?><!-- </h4>-->
<!--        <h2> Online Patient Bills</h2>-->
<!--        <h4>Online Patient Bill Count :--><?php //echo $data['onlinebillcount'] ?><!-- </h4>-->
<!--        <h4>Online Patient Bills Income  : Rs. --><?php //echo $data['onlinebillsum'] ?><!-- </h4>-->
<!--        <h2> Total Income : Rs. --><?php //echo $data['onlinebillsum'] +$data['outbillsum']+$data['inbillsum'] ?><!-- </h2>-->
        <hr>
        <h1>Purchased Medicines</h1>
        <h4> Purchased Stocks : Rs.</h4>
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
            <tr style="text-align: center">
                <td><?php echo $allpurch->medgenname; ?></td>
                <td><?php echo $allpurch->quantity; ?></td>
                <td><?php echo $allpurch->purchprice; ?></td>
<!--                <td>--><?php //echo $allpurch->medgenname; ?><!--</td>-->
            </tr>
            <?php endforeach; ?>

        </table>
        <h1>Returned Medicines</h1>
        <h4> Purchased Stocks : Rs.</h4>
        <!--        <canvas id="myChart" width="400" height="400"></canvas>-->
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Medicine</th>
                <th class="table-field">Quantity</th>
                <th class="table-field">Income</th>

<!--                <th class="table-field">Profit</th>-->
<!--                <th class="table-field">Total</th>-->
            </tr>
            </thead>
            <?php foreach($data['returnmedicine'] as $allreturn): ?>
                <tr style="text-align: center">
                    <td><?php echo $allreturn->medgenname; ?></td>
                    <td><?php echo $allreturn->rquantity; ?></td>
                    <td><?php echo $allreturn->reason; ?></td>
                    <!--                <td>--><?php //echo $allpurch->medgenname; ?><!--</td>-->
                </tr>
            <?php endforeach; ?>

        </table>
<!--        <div class="pagebreak"> </div>-->
<!--        <h1 >Purchased Surgical Items</h1>-->
<!--        <h4> Purchased Stocks : Rs.</h4>-->
<!--        <!--        <canvas id="myChart" width="400" height="400"></canvas>-->-->
<!--        <table class="table-bordered">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Medicine</th>-->
<!--                <th class="table-field">Quantity</th>-->
<!--                <th class="table-field">Income</th>-->
<!--<!--                <th class="table-field">Profit</th>-->-->
<!--<!--                <th class="table-field">Total</th>-->-->
<!--            </tr>-->
<!--            </thead>-->
<!--            --><?php //foreach($data['purchsurgicals'] as $allreturn): ?>
<!--                <tr style="text-align: center">-->
<!--                    <td>--><?php //echo $allreturn->medgenname; ?><!--</td>-->
<!--                    <td>--><?php //echo $allreturn->rquantity; ?><!--</td>-->
<!--                    <td>--><?php //echo $allreturn->reason; ?><!--</td>-->
<!--                    <!--                <td>-->--><?php ////echo $allpurch->medgenname; ?><!--<!--</td>-->-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!---->
<!--        </table>-->
<!--        <h1>Returned Surgical Items</h1>-->
<!--        <h4> Purchased Stocks : Rs.</h4>-->
<!--        <!--        <canvas id="myChart" width="400" height="400"></canvas>-->-->
<!--        <table class="table-bordered">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Medicine</th>-->
<!--                <th class="table-field">Quantity</th>-->
<!--                <th class="table-field">Income</th>-->
<!--<!--                <th class="table-field">Profit</th>-->-->
<!--<!--                <th class="table-field">Total</th>-->-->
<!--            </tr>-->
<!--            </thead>-->
<!--            --><?php //foreach($data['purchsurgicals'] as $allreturn): ?>
<!--                <tr style="text-align: center">-->
<!--                    <td>--><?php //echo $allreturn->medgenname; ?><!--</td>-->
<!--                    <td>--><?php //echo $allreturn->rquantity; ?><!--</td>-->
<!--                    <td>--><?php //echo $allreturn->reason; ?><!--</td>-->
<!--                    <!--                <td>-->--><?php ////echo $allpurch->medgenname; ?><!--<!--</td>-->-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!---->
<!--        </table>-->

    </div>
</div>
<!--<div class="page-number"></div>-->
<!--<footer>-->
<!--    <div align="center" style="color: aliceblue;">-->
<!--        No 149, Sri Ariyavilasa Rd, Horana 12400-->
<!--        </br>-->
<!--        mdkhospital@gmail.com-->
<!--        </br>-->
<!--        +94 347 888 888-->
<!--    </div>-->
<!--</footer>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>-->
<!--<script>-->
<!--    const ctx = document.getElementById('myChart').getContext('2d');-->
<!--    const myChart = new Chart(ctx, {-->
<!--        type: 'bar',-->
<!--        data: {-->
<!--            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],-->
<!--            datasets: [{-->
<!--                label: '# of Votes',-->
<!--                data: [12, 19, 3, 5, 2, 3],-->
<!--                backgroundColor: [-->
<!--                    'rgba(255, 99, 132, 0.2)',-->
<!--                    'rgba(54, 162, 235, 0.2)',-->
<!--                    'rgba(255, 206, 86, 0.2)',-->
<!--                    'rgba(75, 192, 192, 0.2)',-->
<!--                    'rgba(153, 102, 255, 0.2)',-->
<!--                    'rgba(255, 159, 64, 0.2)'-->
<!--                ],-->
<!--                borderColor: [-->
<!--                    'rgba(255, 99, 132, 1)',-->
<!--                    'rgba(54, 162, 235, 1)',-->
<!--                    'rgba(255, 206, 86, 1)',-->
<!--                    'rgba(75, 192, 192, 1)',-->
<!--                    'rgba(153, 102, 255, 1)',-->
<!--                    'rgba(255, 159, 64, 1)'-->
<!--                ],-->
<!--                borderWidth: 1-->
<!--            }]-->
<!--        },-->
<!--        options: {-->
<!--            scales: {-->
<!--                y: {-->
<!--                    beginAtZero: true-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->
<!--<script>-->
<!--    window.onload{-->
<!---->
<!--    };-->
<!---->
<!--</script>-->