<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<!-- --------------------------------------------------------------------------------------------- -->
        
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; ">
                        <div class="card">
                            <div class="welcome">
                                    <img src="https://randomuser.me/api/portraits/men/20.jpg" /></li>
                                <div class="welcome-names">
                                    Mr.Patient         
                                </div>
                                <p><input type="button" style="margin-left: 1000%;" class="button button1" value="Edit" /></p>
                                
                            </div>
                        </div>
                   
     <!-- --------------------------------------------------------------------------------------------- -->             
    <div class="row">
        <div class="column" style="margin-left:5%; padding:1px 16px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;"><a href="#"><img src="../Images/Search.png" alt="Search" height="15px" style="opacity: 0.5;"></a></li>
                <li Style="float: right; vertical-align: middle; display: inline; "><input class="input1" type="text" placeholder="Search Patients"></li>
            </ul>
            <table>
                <tr>
                    <th>Medicine Number</th>
                    <th>Medicine</th>
                    <th>Remaining Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>1</th>
                    <td>Paracetamol</td>
                    <td style="text-align: center;">50</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Paracetamol</td>
                    <td style="text-align: center;">23</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Paracetamol</td>
                    <td style="text-align: center;">70</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
              </table>
        </div>

        <div class="column" style="margin-left:25%;padding:1px 16px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li Style="float: left; vertical-align: middle; display: inline;"><h3>Added Medicine List</h3></li>
            </ul>
            <table style="padding: 12px;">
                <tr>
                    <th>#</th>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>1</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>5</th>
                    <td>Paracetamol</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
              </table>
            <a href="<?php echo URLROOT ?>/doctors/viewprescriptions"><button class="button button1" style="margin-left: 81%;">Create Prescription</button></a>
<!--              <input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" />-->
            
        </div>
    </div>  
    </body>
</html>