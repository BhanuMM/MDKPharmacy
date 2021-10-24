<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<!-- --------------------------------------------------------------------------------------------- -->

<div style="margin-left: 300px; margin-top: 1%; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="patient-card">
        <div class="welcome">
            <div class="patientdetails">
                Name: Ruwan Perera <br>
                Age: 42 years <br>
                Gender: Male <br>
            </div>
        </div>
    </div> <br><br>
     
                   
     <!-- --------------------------------------------------------------------------------------------- -->             
    <div class="row">

        <div class="column" style="margin-left:5%; ">
        <form class="searchmed-search-container">
         <input type="text" id="searchmed-search-bar" placeholder="Search Medicine">
        <a href="#"><img class="searchmed-search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form><br><br><br>

            <table>
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Remaining Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>M001</th>
                    <td>Paracetamol</td>
                    <td style="text-align: center;">50</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
              </table>
        </div>

        <div class="column" style="margin-left:35%;padding:1px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li><h3>Added Medicine List</h3></li>
            </ul>
            <table style="padding: 12px;">
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>M001</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M002</th>
                    <td>Omeprazole</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M003</th>
                    <td>Amoxicillin</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M004</th>
                    <td>Vitamin-C</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
              </table>
            <a href="<?php echo URLROOT ?>/doctors/viewprescriptions"><button class="form-submit" style="margin-left: 260px;">Create Prescription</button></a>
            <br> <br> <br> <br> <br>
<!--              <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            
        </div>
    </div>