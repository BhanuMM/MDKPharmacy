<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>
<br>
<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/pharmacists/viewonlineorders"> << </a> </span></button>
</div>  


<div style="margin-left: 300px; margin-top:250px; margin-right:0%; padding:1px 16px; width: 70%; ">

<div class="split left">

<div class="centered"> 
<img src="<?php echo URLROOT ?>/public/images/OnlinePrescriptions/<?php echo $data['orderimg']?>"  alt="<?php echo $data['orderimg']?>" width="400"  style="margin-left:350px; z-index: -2;">
</div>
  </div>


<div class="split right">
<div class="centered">

<div class="row" style="margin-top:100px; z-index: 1">
<div class="container">
<h3 style="margin-left:-370px;">Add Medicine</h3>

<div class="select-box" >
    <div class="options-container" style="margin-left:-370px;">
        <?php
        foreach($data['medicines'] as $allmedicines):
            {
                echo ' <div class="option" id ="'.$allmedicines->medid.'"> <input type="radio" class="radio" id="medl" name="category" /> <label id ="med" medid="'.$allmedicines->medid.'" medname =" '.$allmedicines->medgenname.'">'.$allmedicines->medgenname.'</label> </div>';


            }
        endforeach; ?>


    </div>

    <div class="selected" id="1">Select Medicine</div>

    <div class="search-box">
        <input type="text" placeholder="Start Typing..." />
    </div>
    </div>
  
        </div>
        <br>
        <button id="addbtn" style="padding:8px 30px; cursor:pointer; margin-left: -400px; border-radius:8px; background-color: #4BB543;  color: white;border-style:none;">Add + </button>
        </div>
       <br>
<br>

<hr>
        <h3 style="margin-left:-310px;">Added Medicine List</h3>
            
        <form method="post" action="<?php echo URLROOT; ?>/doctors/viewprescriptions">
           
        
           <div class="table-prescription">
           <table id="medlist">
               <thead>
               <tr>
                   <th>Medicine ID</th>
                   <th>Medicine</th>
                   <th>Dosage</th>
                   <th>Time</th>
                   <th>Remove</th>
               </tr>
               </thead>
               <tbody>
                                      
               </tbody>
             </table>

           <h3 style="margin-left:-370px;" >Special Notes</h3> 
           <textarea name="Text1"  rows="3" cols="100" style="border:1px solid #0a0a2e; background-color: white; width: 100%; padding:4px 8px;"></textarea>

           <input type="submit" name="submitbutton4" value="Create" class="opbill-form-submit" style="font-family:'Poppins', sans-serif; margin-left: 300px;" >
           <br><br><br><br>
<!--              <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            
        </div>
    </div> 
    
  </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 <script>
     const selected = document.querySelector(".selected");
     const optionsContainer = document.querySelector(".options-container");
     const searchBox = document.querySelector(".search-box input");

     const optionsList = document.querySelectorAll(".option");

     selected.addEventListener("click", () => {
         optionsContainer.classList.toggle("active");

         searchBox.value = "";
         filterList("");

         if (optionsContainer.classList.contains("active")) {
             searchBox.focus();
         }
     });

     optionsList.forEach(o => {
         o.addEventListener("click", () => {
             selected.innerHTML = o.querySelector("label").innerHTML;
             // selected.attr('id'); = o.querySelector("label").attr('id');
             optionsContainer.classList.remove("active");
         });
     });

     searchBox.addEventListener("keyup", function(e) {
         filterList(e.target.value);
     });

     const filterList = searchTerm => {
         searchTerm = searchTerm.toLowerCase();
         optionsList.forEach(option => {
             let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
             if (label.indexOf(searchTerm) != -1) {
                 option.style.display = "block";
             } else {
                 option.style.display = "none";
             }
         });
     };
 </script>

    <script>
        $(document).ready(function(){
            // var tid="";
            $('#addbtn').click(function(){
                // var inputval= $('#dos').val();

                var label = $('.selected');
                var medid = label.attr('id');
                // var medname = label.attr('medname');
                var medname = label.text();

                if(medname != 'Select Medicine'){
                    alert(medid);
                    // count ++;
                    $("#medlist tbody").append('<tr><td><input class="input1" type="text" id="medid" name="medid[]" value="'+medid+'" readonly></td><td><input class="input1" type="text" id="medname" name="medname" value="'+medname+'" readonly></td><td><input class="input1" type="text" id="meddos" name="meddos[]" placeholder="Enter Dosage" required> </td> <td> <select id="time" name="time"><option value="Bd">Twice a day</option><option value="Tds">Three times a day</option><option value="Nocte">In the night</option><option value="Mane">in the morning</option><option value="Daily">One time a day</option></select></td> <td align="center"><button id="removebtn" class="button_button1" style="background-color: #d11a2a; color: white; border-style:none;border-radius: 8px; cursor:pointer; padding:7px 15px;">Remove</button></td></tr>')
                }else
                {
                    alert("Please Select a Medicine");
                    // $('#employee_details').css("display", "none");
                }
            });
             $('#medlist tbody ').on('click','#removebtn' ,function (){
                 $(this).closest('tr').remove();
             });

            // $('#removebtn').click(function(event){
            //
            //     tid=$(this).attr('id');
            //     alert('#'+tid);
            // });

        });
    </script>