<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>
<br>
<div style="margin-left:20%; padding:1px 16px; width: 40% ">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/pharmacists/viewonlineorders"> << </a> </span></button>
</div>  


<div style="margin-left: 300px; margin-top:250px; margin-right:0%; padding:1px 16px; width: 70%; ">

<div class="split left" style="z-index: -10;" >

<div class="centered"> 
<img src="<?php echo URLROOT ?>/public/images/OnlinePrescriptions/<?php echo $data['orderimg']?>"  alt="<?php echo $data['orderimg']?>" width="400" style="margin-left:350px;pointer-events: none; user-select: none; ">
</div>
  </div>


<div class="split right" style=" z-index: 10">
<div class="centered">

<div class="row" style="margin-top:-260px;">
<div class="container">
                <div style="margin-right:330px">
                    <h3 >Add Medicine</h3>
                </div>
                <div style="margin-left:35px">
                <div class="select-box" style=" position:fixed;" >
                    <div class="options-container"  >
                        <?php
                        foreach($data['medicines'] as $allmedicines):
                            {
                                echo ' <div class="option" style="text-align:left;" > <input type="radio" class="radio" id="medl" name="category" /> <label id ="labelid" medid="'.$allmedicines->medid.'" medname =" '.$allmedicines->medgenname.'">'.$allmedicines->medgenname.'</label> </div>';


                            }
                        endforeach; ?>


                    </div>
                    
                    
                    <div class="selected" medid="test" id="1">Select Medicine</div>

                    <div class="search-box" style= "margin-right:300px;">
                        <input type="text" placeholder="Start Typing..." />
                    </div>
                </div>
            </div>
                    </div>


    <br> <br> <br> 
            <button id="addbtn" style="padding:8px 30px; margin-right: 360px; cursor:pointer; border-radius:8px; background-color: #4BB543;  color: white;border-style:none;">Add + </button>



         
        </div>

        <div class="column" style="margin-left:7%; padding:1px;">

             
            <!-- <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li><h3>Prescription</h3></li>
            </ul> -->
            <br><br>
            <form method="post" action="<?php echo URLROOT; ?>/pharmacists/viewprescriptions">
            <div style="margin-right:100px">
                <h3>Create Prescription</h3>
            </div> 
            <div class="table-prescription">
            <table id="medlist">
                <thead>
                <tr>
                     <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th>Time</th>
                    <th>Duration</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>

                <!-- <input class="input1" type="text" id="patid" name="patid" value="<?php echo $data['id'] ?>"  hidden>
                <input class="input1" type="text" id="docid" name="docid" value="<?php echo $_SESSION['user_id'] ?>" hidden > -->
                <input class="input1" type="text" id="oid" name="oid" value="<?php echo $data['orderid'] ?>" hidden > 


                </tbody>
              </table>


            <input type="submit" name="submitbutton4" value="Create" class="opbill-form-submit" style="font-family:'Poppins', sans-serif; margin-left: 300px;" >

<!--            <a href="--><?php //echo URLROOT ?><!--/doctors/viewprescriptions"><button class="opbill-form-submit" style="margin-left: 200px;">Create Prescription</button></a>-->
            <br> <br> <br> <br> <br>
<!--             <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            </form>
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
             var id = o.querySelector("label").getAttribute('medid');
             selected.setAttribute("medid",id);
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
                var medid = label.attr('medid');
                // var medname = label.attr('medname');
                var medname = label.text();
                
                if(medname != 'Select Medicine'){

                    // count ++;
                    $("#medlist tbody").append('<tr><td><input class="input1" type="text" id="medid" name="medid[]"value="'+medid+'" readonly></td><td><input class="input1" type="text" id="medname" name="medname" value="'+medname+'" readonly></td><td><input class="input1" type="text" id="meddos" name="meddos[]" placeholder="Enter Dosage" required> </td> <td> <select id="time" name="time[]"><option value="Bd">Bd</option><option value="Tds">Tds</option><option value="Nocte">Nocte</option><option value="Mane">Mane</option><option value="Daily">Daily</option></select></td><td><input class="input1" type="text" id="medduration" name="medduration[]" placeholder="Enter Days" required> </td> <td align="center"><button id="closebtn" style="background-color: #d11a2a; color: white; border-style:none;">&times</button></td></tr>')

                    // <button id="removebtn" class="button_button1" style="background-color: #d11a2a; color: white; border-style:none;border-radius: 8px; cursor:pointer; padding:7px 15px;">Remove</button>
                }else
                {
                    alert("Please Select a Medicine");
                    // $('#employee_details').css("display", "none");
                }
            });
             $('#medlist tbody ').on('click','#closebtn' ,function (){
                 $(this).closest('tr').remove();
             });

            // $('#removebtn').click(function(event){
            //
            //     tid=$(this).attr('id');
            //     alert('#'+tid);
            // });

        });
    </script>

