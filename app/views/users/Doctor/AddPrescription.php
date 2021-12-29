<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<!-- --------------------------------------------------------------------------------------------- -->

<div style="margin-left: 300px; margin-top: 1%; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="patient-card">
        <div class="welcome">
            <div class="patientdetails">
                Name: <?php echo $data['name'] ?> <br>
                Age: <?php echo $data['dob'] ?><br>
                Gender: <?php echo $data['gender'] ?> <br>
                Tel No: <?php echo $data['tel'] ?> <br>
            </div>
        </div>
    </div> <br><br>
     
                   
     <!-- --------------------------------------------------------------------------------------------- -->             
    <div class="row">

        <div class="column" style="margin-left:5%; ">
            <select name="med_list" id="med_list" class="form-control">
                <option value="">Select Medicine</option>
                <?php
                 foreach($data['medicines'] as $allmedicines):
                {
                    echo '<option value="'.$allmedicines->medid.'" name="'.$allmedicines->medgenname.'">'.$allmedicines->medgenname.'</option>';

                }
                 endforeach; ?>
            </select>
            <button type="button" name="search" id="search" class="btn btn-info">Search</button>


            <table>
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
<!--                    <th>Dosage</th>-->
                    <th></th> 
                </tr>
                <tr>

                    <td style="text-align: center;"><span id="med_id"></span></td>
                    <td style="text-align: center;"><span id="medname"></span></td>
<!--                    <td style="text-align: center;"><input type="number" id="dos" class="input1"></td>-->
                    <td align="center"><button id="addbtn" class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
              </table>
            <h3>Special Notes</h3> <br>
            <textarea name="Text1" class="input2" rows="5" r></textarea>
        </div>

        <div class="column" style="margin-left:35%;padding:1px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li><h3>Prescription</h3></li>
            </ul>
            <form method="post" action="<?php echo URLROOT; ?>/doctors/viewprescriptions">
            <table style="padding: 12px;" id="medlist">
                <thead>
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <input class="input1" type="text" id="patid" name="patid" value="<?php echo $data['id'] ?>"  hidden>
                    <input class="input1" type="text" id="docid" name="docid" value="<?php echo $_SESSION['user_id'] ?>" hidden >




                </tbody>


              </table>
            <input type="submit" name="submitbutton4" value="Create Prescription" class="opbill-form-submit" style="margin-left: 200px;" >

<!--            <a href="--><?php //echo URLROOT ?><!--/doctors/viewprescriptions"><button class="opbill-form-submit" style="margin-left: 200px;">Create Prescription</button></a>-->
            <br> <br> <br> <br> <br>
<!--             <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            // var tid="";
            $('#addbtn').click(function(){
                // var inputval= $('#dos').val();
                var medname= $('#medname').text();
                var medid= $('#med_id').text();
                if(medname != ''){
                    // count ++;
                    $("#medlist tbody").append('<tr><td><input class="input1" type="text" id="medid" name="medid[]" value="'+medid+'" readonly></td><td><input class="input1" type="text" id="medname" name="medname" value="'+medname+'" readonly></td><td><input class="input1" type="text" id="meddos" name="meddos[]" placeholder="Enter Dosage" required> </td><td align="center"><button id="removebtn" class="button_button1" style="background-color: #ff9797;">Remove</button></td></tr>')
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


    <script>
        $(document).ready(function(){
            $('#search').click(function(){
                var id= $('#med_list').val();
                var mname= $('#med_list').find('option:selected').attr("name");
                if(id != '')
                {

                    $('#med_id').empty().append(id)
                    $('#medname').empty().append(mname)
                    // alert(id);
                    //$.ajax({
                    //    //url:"<?php ////echo URLROOT. "/doctors/addprescription/". $data['id'] ?>////",
                    //    method:"POST",
                    //    data:{medid:id},
                    //    dataType:"JSON",
                    //    success:function(data)
                    //    {
                    //        // $('#employee_details').css("display", "block");
                    //        $('#med_id').text(data.medid);
                    //        $('#med_name').text(data.medgenname);
                    //    }
                    //})
                }
                else
                {
                    alert("Please Select a Medicine");
                    // $('#employee_details').css("display", "none");
                }
            });
        });
    </script>