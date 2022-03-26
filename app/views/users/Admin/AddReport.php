<?php
require APPROOT . '/views/includes/Adminhead.php';
?>
<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewreport"> << </a> </span></button>
</div>  

    <div style="margin-left:20%; padding:1px 16px; width: 40%">
        <!-- <div class="row"> -->
           

<br>
<div class="w3-bar" style="background-color:#0a0a2e; color:white; margin-right: 10%; width: 100%; padding:1px 16px;">
  <button class="w3-bar-item w3-button" onclick="openSection('Summaries')" id="defaultOpen">Summaries</button>
  <button class="w3-bar-item w3-button" onclick="openSection('Inventory')">Inventory</button>
  <button class="w3-bar-item w3-button" onclick="openSection('Sales')">Sales</button>
  <button class="w3-bar-item w3-button" onclick="openSection('Analysis')">Analysis</button>
</div>

<div id="Summaries" class="w3-container Section">


            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->
                <div class="column" style=" width: 40%; padding:1px 16px;">
                <h2 style="margin-top: 18%;">
                    Summaries
                </h2>
                <!-- Daily -->
                    <form method="post" action="<?php echo URLROOT; ?>/reports/dailySummary" target="_blank">
                <button id="dailyreports" class="reportBtn">Daily Report</button><br>
                <div class = "fordailyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px; ">
                <div class="close" style="margin-right:62%; margin-top:-1%;">+</div>
                <h5>
                    Select Date
                </h5>
                <input class="input1" type="date" id="date" name="date" placeholder="2021-10-30" required><br>
                <input class="form-submit" style="margin-top:30px;"type="submit" id="generatedaily" name="submitbutton1" Value="Generate Report" ><br><br>
                </div>
</form><br>
<form method="post" action="<?php echo URLROOT; ?>/admins/testreport">
                <!-- Monthly -->
                <button id="monthlyreports" class="reportBtn">Monthly Report</button><br>
                <div class = "formonthlyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px;">
                <div class="close2" style="margin-right:62%; margin-top:-1%;">+</div>

                <h5>
                    Select Month
                </h5>
                <input class="input1" type="month" id="date" name="date" placeholder="2021-10-30" required><br>
               
                <input class="form-submit" style="margin-top:30px;" type="submit" id="generatemonthly" name="submitbutton1" Value="Generate Report" ><br><br>
                </div>
</div>
</form>     

            
</div>
<div id="Inventory" class="w3-container Section" >

<form method="post" action="">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->
                <div class="column" style="width: 40%; padding:1px 16px;">
                <h2 style="margin-top: 18%;">
                    Inventories
                </h2>
                <!-- Daily -->
                <button id="idailyreports" class="reportBtn">Daily Report</button><br>
                <div class = "foridailyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px;">
                <div class="close3"  style="margin-right:62%; margin-top:-1%;">+</div>
                <h5>
                    Select Date
                </h5>
                <input class="input1" type="date" id="date" name="date" placeholder="2021-10-30" required><br>
                <input class="form-submit" style="margin-top:30px;" type="submit" id="generateidaily" name="submitbutton1" Value="Generate Report" ><br><br>
                </div>
</form><br>
<form method="post" action="">
                <!-- Monthly -->
                <button id="imonthlyreports" class="reportBtn">Monthly Report</button><br>
                <div class = "forimonthlyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px;">
                <div class="close4"  style="margin-right:62%; margin-top:-1%;">+</div>

                <h5>
                    Select Month
                </h5>
                <input class="input1" type="month" id="date" name="date" placeholder="2021-10-30" required><br>
               
                <input class="form-submit" style="margin-top:30px;" type="submit" id="generateimonthly" name="submitbutton1" Value="Generate Report" ><br><br>
                </div></div>
</form>     

 
            
</div>

<div id="Sales" class="w3-container Section">

<form method="post" action="">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->
                <div class="column" style="width: 40%; padding:1px 16px;">
                <h2 style="margin-top: 18%;">
                    Sales
                </h2>
                <!-- Daily -->
                <button id="sdailyreports" class="reportBtn">Daily Report</button><br>
                <div class = "forsdailyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px;">
                <div class="close5" style= "margin-right:62%; margin-top:-1%;">+</div>
                <h5>
                    Select Date
                </h5>
                <input class="input1" type="date" id="date" name="date" placeholder="2021-10-30" required><br>
                <input class="form-submit" style="margin-top:30px;" type="submit" id="generatesdaily" name="submitbutton1" Value="Generate Report" ><br><br>
                </div>
</form><br>
<form method="post" action="">
                <!-- Monthly -->
                <button id="smonthlyreports" class="reportBtn">Monthly Report</button><br>
                <div class = "forsmonthlyreports" style="display:none; background-color:#f2f2f2; padding:10px 70px 10px 30px;">
                <div class="close6"  style="margin-right:62%; margin-top:-1%;">+</div>

                <h5>
                    Select Month
                </h5>
                <input class="input1" type="month" id="date" name="date" placeholder="2021-10-30" required><br>
               
                <input class="form-submit" style="margin-top:30px;" type="submit" id="generatesmonthly" name="submitbutton1" Value="Generate Report" ><br><br>
                </div></div>
</form>     

 
            
</div>

            </div>

<div id="Analysis" class="w3-container Section">

            
</div>
        </div>

        </div>


<script>
function openSection(SectionName) {
  var i;
  var x = document.getElementsByClassName("Section");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(SectionName).style.display = "block";  
}

document.getElementById("defaultOpen").click();


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
