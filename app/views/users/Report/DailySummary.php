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
        <h1>Daily Summary Report</h1>
        <h2>Date: <?php echo $data['dategen'] ?></h2></br>

        Report Generated Time: <?php $date = date('h:i:s'); echo $date;?> </br>

    </div>
    </div>

    <button class="btn" style="margin-top: -3%; margin-left: 86%; border-radius: 5px; font-size: 15px;"><i class="fa fa-download"></i>Download</button>

    <br>
    <div class="bill-body" style="margin: 5%;">
        <h1>Cash Inflow</h1>
        <hr>
        <h2> In Patient Bills</h2>
        <ul>
            <li>In Patient Bill Count :<?php echo $data['inbillcount'] ?> </li>
            <li>In Patient Bills Income  : Rs. <?php echo $data['inbillsum'] ?> </li>
        </ul>
       
        <h2> Out Patient Bills</h2>
        <ul>
            <li>Out Patient Bill Count :<?php echo $data['outbillcount'] ?> </li>
            <li>Out Patient Bills Income  : Rs. <?php echo $data['outbillsum'] ?> </li>
        </ul>
        <h2> Online Patient Bills</h2>
        <ul>
            <li>Online Patient Bill Count :<?php echo $data['onlinebillcount'] ?> </li>
            <li>Online Patient Bills Income  : Rs. <?php echo $data['onlinebillsum'] ?> </li>
        </ul>
       
        <h2> Total Income : Rs. <?php echo $data['onlinebillsum'] +$data['outbillsum']+$data['inbillsum'] ?> </h2>
            <hr>
        <h1>Cash Outflow</h1>
        <h4> Purchased Stocks : Rs. <?php echo $data['purchcount'] ?></h4>
       
        </div>
</div>
        <!--        <canvas id="myChart" width="400" height="400"></canvas>-->
        <!--        <table class="table-bordered">-->
        <!--            <thead>-->
        <!--            <tr>-->
        <!--                <th>Medicine</th>-->
        <!--                <th class="table-field">Quantity</th>-->
        <!--                <th class="table-field">Income</th>-->
        <!--                <th class="table-field">Profit</th>-->
        <!--                        <th class="table-field">Total</th>-->
        <!--            </tr>-->
        <!--            </thead>-->
        <!--            <tr style="text-align: center">-->
        <!--                <td>as</td>-->
        <!--                <td>dv</td>-->
        <!--                <td>sz</td>-->
        <!--                <td>sa</td>-->
        <!--            </tr>-->
        <!--            <tr style="text-align: center">-->
        <!--                <td>as</td>-->
        <!--                <td>dv</td>-->
        <!--                <td>sz</td>-->
        <!--                <td>sa</td>-->
        <!--            </tr>-->
        <!---->
        <!--            </tr>-->
        <!--        </table>-->

  

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