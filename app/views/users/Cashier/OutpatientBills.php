<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="row">
        <div class="column" style="margin-left:5%; padding:1px 16px;">
            <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
                <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                    <li Style="float: right; vertical-align: middle; display: inline;">
                        <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Search Bills"></li></form>
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
                    <td>Panadeine</td>
                    <td style="text-align: center;">23</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Omeprazole</td>
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
                    <td>Omeprazole</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Abacavir</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>Vitamin-C</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>5</th>
                    <td>Amoxicillin</td>
                    <td><input type="number" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
              </table>
            <a href="<?php echo URLROOT ?>/Cashiers/outpatientsingle"><button class="button button1" style="margin-left: 81%;">Create Bill</button></a>
            
        </div>
    </div>  
</div>