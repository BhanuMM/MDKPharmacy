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
                <li Style="float: left; vertical-align: middle; display: inline;"><input type="text" placeholder="Search Medicine"></li>
            </ul>
            <table id="customers">
                <tr>
                    <th>Medicine Number</th>
                    <th>Medicine</th>
                    <th>Remaining Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button1">ADD</button></td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button1">ADD</button></td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button1">ADD</button></td>
                </tr>
              </table>
        </div>

        <div class="column" style="margin-left:25%;padding:1px 16px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <li Style="float: left; vertical-align: middle; display: inline;"><h3>Added Medicine List</h3></li>
            </ul>
            <table id="customers">
                <tr>
                    <th>#</th>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>1</th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button4">Remove</button></td>
                </tr>
                <tr>
                    <th>2</th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button4">Remove</button></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button4">Remove</button></td>
                </tr>
                <tr>
                    <th>4</th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button4">Remove</button></td>
                </tr>
                <tr>
                    <th>5</th>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="button button4">Remove</button></td>
                </tr>
              </table>
              <p><input type="button" style="margin-left: 10%;" class="button button1" value="Create Prescription" /></p>
            
        </div>
    </div>  
    </body>
</html>