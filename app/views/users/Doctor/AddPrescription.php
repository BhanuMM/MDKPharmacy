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
            <select name="employee_list" id="employee_list" class="form-control">
                <option value="">Select Medicine</option>
                <?php
                 foreach($data['medicines'] as $allmedicines):
                {
                    echo '<option value="'.$allmedicines->medid.'">'.$allmedicines->medgenname.'</option>';

                }
                 endforeach; ?>
            </select>
            <button type="button" name="search" id="search" class="btn btn-info">Search</button>


            <table>
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th></th> 
                </tr>
                <tr>

                    <td style="text-align: center;"><span id="med_id"></span></td>
                    <td style="text-align: center;"><span id="med_name"></span></td>
                    <td style="text-align: center;"><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
              </table>
        </div>

        <div class="column" style="margin-left:35%;padding:1px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li><h3>Prescription</h3></li>
            </ul>
            <table style="padding: 12px;">
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th></th> 
                </tr>

                <tr>
                    <th>M001</th>
                    <td>Paracetamol</td>
                    <td>32</td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
<!--                <tr>-->
<!--                    <th>M002</th>-->
<!--                    <td>Omeprazole</td>-->
<!--                    <td><input type="number" class="input1"></td>-->
<!--                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th>M003</th>-->
<!--                    <td>Amoxicillin</td>-->
<!--                    <td><input type="number" class="input1"></td>-->
<!--                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th>M004</th>-->
<!--                    <td>Vitamin-C</td>-->
<!--                    <td><input type="number" class="input1"></td>-->
<!--                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>-->
<!--                </tr>-->
              </table>
            <a href="<?php echo URLROOT ?>/doctors/viewprescriptions"><button class="opbill-form-submit" style="margin-left: 200px;">Create Prescription</button></a>
            <br> <br> <br> <br> <br>
<!--              <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#search').click(function(){
                var id= $('#employee_list').val();
                if(id != '')
                {
                    $.ajax({
                        url:"<?php echo URLROOT. "/doctors/addprescription/". $data['id'] ?>",
                        method:"POST",
                        data:{id:id},
                        dataType:"JSON",
                        success:function(data)
                        {
                            // $('#employee_details').css("display", "block");
                            $('#med_id').text(data.medid);
                            $('#med_name').text(data.medgenname);
                        }
                    })
                }
                else
                {
                    alert("Please Select a Medicine");
                    // $('#employee_details').css("display", "none");
                }
            });
        });
    </script>