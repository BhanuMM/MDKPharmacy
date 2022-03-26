<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>

<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  
<div style="margin-left: 265px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="row">
        <div class="column" style="margin-left:5%; padding:1px 16px;">
        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
<!--    Heading     -->
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Create Outpatient Bills</h3></li>

            <div class="row">
                <!--    Section to search medicines and add them to the list     -->
                <div class="column" style="margin-left:4%; ">
                    <div class="container">
                        <h3>Add Medicine</h3>

                        <div class="select-box">
                            <div class="options-container">
                                <?php
                                foreach($data['medicines'] as $allmedicines):
                                    {
                                        echo ' <div class="option" > <input type="radio" class="radio" id="medl" name="category" /> <label id ="labelid" medid="'.$allmedicines->medid.'" medname =" '.$allmedicines->medgenname.'">'.$allmedicines->medgenname.'</label> </div>';


                                    }
                                endforeach; ?>


                            </div>
                            <!--    Search button     -->
                            <div class="selected" medid="test" id="1">Select Medicine</div>

                            <div class="search-box">
                                <input type="text" placeholder="Start Typing..." />
                            </div>
                        </div>
                    </div>
                    <br>
                    <button id="addbtn" style="padding:8px 30px; cursor:pointer; border-radius:8px; background-color: #4BB543;  color: white;border-style:none;">Add + </button>
                 </div>

                <div class="column" style="margin-left:27%;padding:1px; margin-top:-14.5%;">

                    <form method="post" action="<?php echo URLROOT; ?>/Cashiers/outpatientsingle">

                        <!--    Current medicine list to be sold    -->
                        <div class="table-prescription" style="margin-left: 600px">
                            <table id="medlist">
                                <thead>
                                <tr>
                                    <th>Medicine ID</th>
                                    <th>Medicine</th>
                                    <th>Quantity</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody>




                                </tbody>
                            </table>



                            <input type="submit" name="submitbutton4" value="Create" class="opbill-form-submit" style="font-family:'Poppins', sans-serif; margin-left: 300px;" >


                            <br> <br> <br> <br> <br>

                    </form>
                </div>
            </div>

            <!--    Javascript part     -->
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

                    $('#addbtn').click(function(){
                        var alreadye = 1;
                        var label = $('.selected');
                        var medid = label.attr('medid');
                        var medname = label.text();
                        var input = 0;

                        var input = document.getElementsByClassName('idclass');
                        for (var i = 0; i < input.length ; i++) {
                            if(input[i].value===medid){

                                alreadye=0;
                                break;

                            } else {
                                alreadye=1;
                            }
                        }

                        if(medname !== 'Select Medicine' ){
                            if( alreadye !==0){
                                $("#medlist tbody").append('<tr><td><input class="input1 idclass" type="text" id="medid" name="medid[]" value="'+medid+'" readonly></td><td><input class="input1" type="text" id="medname" name="medname" value="'+medname+'" readonly></td><td><input class="input1" type="text" id="medqty" name="medqty[]" placeholder="Enter Quantity" required> </td>  <td align="center"><button id="removebtn" class="button_button1" style="background-color: #d11a2a; color: white; border-style:none;border-radius: 8px; cursor:pointer; padding:7px 15px;">Remove</button></td></tr>')

                            }else {
                                alert("The Medicine Already Exists!");
                            }
                        }else
                        {
                            alert("Please Select a Medicine");
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
            <!------------------------------------------------------------------------------------------------------------->
            <br>
            <br>


        </div>
    </div>  
</div>