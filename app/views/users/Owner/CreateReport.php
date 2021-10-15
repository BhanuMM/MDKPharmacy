<?php
require APPROOT . '/views/includes/Ownerhead.php';
?>

<div class="row">
            <form method="post" action="userreg.php">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->
                <div class="column" style="margin-right: 30%; width: 40%; margin-left:17%; padding:1px 16px;">
                <h2 style="margin-top: 18%;">
                    Create Report
                </h2>
                <h5>
                    Select From-Date
                </h5>
                <input class="input1" type="text" id="Rfname" name="Rfname" placeholder="05/02/2021" required>
                    <h5>
                        Select To-Date
                    </h5>
                    <input class="input1" type="text" id="Rfname" name="Rfname" placeholder="05/03/2021" required>
                    <h5>
                    Select Report Type 
                </h5>
                <input class="input1" type="text" id="Rnic" name="Rnic" size=12 placeholder="Patient count report" required>  <br><br>
                <button class="button button1">Generate Report</button>
              

               
            </div>

        

    </body>
</html>