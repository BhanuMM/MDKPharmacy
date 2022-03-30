<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Report Generation
                <p>
                <ul class="breadcrumb">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewreport">Report Generation</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>


    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
            <?php if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
            ?>
        </span>
<br>
<div style="margin-left: 2.5%; margin-right: 1%;">



<!-- Summaries -->

<div class="row">
  <div class="column" style="width: 20%;margin-right: 10%; ">
                 
<div id="Summaries" class="w3-container Section">


<!-- <div style="margin-left:20%; padding:1px 16px;"> -->

    <h2 style="margin-top: 8%;">
        Summaries
    </h2>
    <!-- Daily -->
    <button id="dailyreports" class="reportBtn">Daily<br>Report</button><br>
    <div class = "fordailyreports" style="display:none; background-color:#f2f2f2; padding:10px 200px 10px 30px; ">
    <div class="close" style="margin-right:59.5%; margin-top:-1%;">+</div>
        <form  method="post"  action="<?php echo URLROOT; ?>/reports/Dailysummary"  target="_blank">
<!--                        onclick="window.print()"-->
    <h5>
        Select Date
    </h5>
    <input  type="date" id="gendate" name="gendate" placeholder="2021-10-30" required><br>
    <input class="form-submit" style="margin-top:30px;"type="submit" id="generatedaily" name="submitbutton1" Value="Generate" ><br><br>
    </div>
    </form>
<br>

    <!-- Monthly -->
    <button id="monthlyreports" class="reportBtn">Monthly<br>Report</button><br>
    <div class = "formonthlyreports" style="display:none; background-color:#f2f2f2; padding:10px 200px 10px 30px;">
    <div class="close2" style="margin-right:59.5%; margin-top:-1%;">+</div>
        <form method="post" action="<?php echo URLROOT; ?>/reports/Monthlysummary"  target="_blank">
    <h5>
        Select Month
    </h5>
    <input  type="month" id="monthsummarydate" name="monthsummarydate" placeholder="2021-10-30" required><br>
   
    <input class="form-submit" style="margin-top:30px;" type="submit" id="generatemonthly" name="submitbutton1" Value="Generate" ><br><br>
    </div>
</div>
</form>     


</div>
  </div>

  <!-- Inventories -->


  <div class="column" style="width: 30%; margin-right: 5.5%;">
        
<div id="Inventory" class="w3-container Section" >


<!-- <div style="margin-left:20%; padding:1px 16px;"> -->
    <div class="column" style="width: 40%; padding:1px 16px;">
    <h2 style="margin-top: 18%;">
        Inventories
    </h2>
    <!-- Daily -->

    <button id="idailyreports" class="reportBtn">Daily Report</button><br>
    <div class = "foridailyreports" style="display:none; background-color:#f2f2f2; padding:10px 200px 10px 30px;">
    <div class="close3"  style="margin-right:38%; margin-top:-1%;">+</div>
        <form method="post" action="<?php echo URLROOT; ?>/reports/InventoryDailysummary"  target="_blank">
    <h5>
        Select Date
    </h5>
    <input  type="date" id="indailydate" name="indailydate" placeholder="2021-10-30" required><br>
    <input class="form-submit" style="margin-top:30px;" type="submit" id="generateidaily" name="submitbutton1" Value="Generate" ><br><br>
    </div>
    
</form><br>

    <!-- Monthly -->
    <button id="imonthlyreports" class="reportBtn">Monthly Report</button><br>
    <div class = "forimonthlyreports" style="display:none; background-color:#f2f2f2; padding:10px 200px 10px 30px;">
    <div class="close4"  style="margin-right:38%; margin-top:-1%;">+</div>
        <form method="post" action="">
    <h5>
        Select Month
    </h5>
    <input  type="month" id="date" name="date" placeholder="2021-10-30" required><br>
   
    <input class="form-submit" style="margin-top:30px;" type="submit" id="generateimonthly" name="submitbutton1" Value="Generate" ><br><br>
    </div></div>
</form>     



</div>

</div>

  </div>



  <!-- Analysis -->


 

</div>

</div>

    </div>        


  </div>
</div>

</div>



<script>
    
//Summaries
document.getElementById('dailyreports').addEventListener('click',function(){
            document.querySelector('.fordailyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.fordailyreports').style.display = 'none';
            document.getElementById("generatedaily").required = false;
        });

document.getElementById('monthlyreports').addEventListener('click',function(){
            document.querySelector('.formonthlyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close2').addEventListener('click',function(){
            document.querySelector('.formonthlyreports').style.display = 'none';
            document.getElementById("generatemonthly").required = false;
        });



//Inventory
document.getElementById('idailyreports').addEventListener('click',function(){
            document.querySelector('.foridailyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close3').addEventListener('click',function(){
            document.querySelector('.foridailyreports').style.display = 'none';
            document.getElementById("generateidaily").required = false;
        });

document.getElementById('imonthlyreports').addEventListener('click',function(){
            document.querySelector('.forimonthlyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close4').addEventListener('click',function(){
            document.querySelector('.forimonthlyreports').style.display = 'none';
            document.getElementById("generateimonthly").required = false;
        });



// Sales
document.getElementById('sdailyreports').addEventListener('click',function(){
            document.querySelector('.forsdailyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close5').addEventListener('click',function(){
            document.querySelector('.forsdailyreports').style.display = 'none';
            document.getElementById("generatesdaily").required = false;
        });

document.getElementById('smonthlyreports').addEventListener('click',function(){
            document.querySelector('.forsmonthlyreports').style.display = 'block';
            document.getElementById("#date").required = true;

        });
document.querySelector('.close6').addEventListener('click',function(){
            document.querySelector('.forsmonthlyreports').style.display = 'none';
            document.getElementById("generatesmonthly").required = false;
        });


</script>