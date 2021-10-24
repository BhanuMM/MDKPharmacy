<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>


  
<div style="margin-left: 300px; margin-top:250px; margin-right:0%; padding:1px 16px; width: 70%; ">

<div class="split left">
  
<div class="centered"> 
<img src="<?php echo URLROOT ?>/public/images/side.png" alt="prescription"width="400" height="500" style="margin-left:350px; z-index=-1;">
</div>
  </div>


<div class="split right">
<div class="centered">

<div class="row" style="margin-top:200%; ">
        <!-- <div class="column" style="margin-left:25%; padding:1px 16px;"> -->
        <input type="text" id="search-bar" placeholder="Search Medicine">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>

            </ul>

            <table>
                <tr>
                    <th>No.of.Items</th>
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
        </div><br><br>
       



      <!-- <div class="column">  -->
            <!-- <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li Style="float: left; vertical-align: middle; display: inline;"> -->
                  <h3>Added Medicine List</h3>
            
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
                    <td>Amoxicillin</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M003</th>
                    <td>Omeprazole</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
              </table>
            <a href="#"><button class="button button1" style="margin : 50px 0px 300px;">Create Prescription</button></a>
<!--              <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            
        </div>
    </div> 
    
  </div>
  </div>
</div>