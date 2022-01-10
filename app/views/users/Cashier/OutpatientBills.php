<?php
require APPROOT . '/views/includes/Cashierhead.php';
?>
<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/cashiers/cashierdashboard"> << </a> </span></button>
</div>  
<div style="margin-left: 265px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="row">
        <div class="column" style="margin-left:5%; padding:1px 16px;">
        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Create Outpatient Bills</h3></li>
        <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/cashiers/outpatientbills">
            <table>
                <tr>
                <th><li Style="float: right; vertical-align: middle; display: inline;">
                <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left:5px; height: 35px; width: 200px;" placeholder="Medicine Name"></li>
                </th>
                <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                </tr>
            </table>
        </form>
</ul>
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
                <tr>
                    <th>M002</th>
                    <td>Panadeine</td>
                    <td style="text-align: center;">23</td>
                    <td align="center"><button class="button button1" style="background-color: #97ff9c;">ADD</button></td>
                </tr>
                <tr>
                    <th>M042</th>
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
                    <th>Medicine ID</th>
                    <th>Medicine</th>
                    <th style="width: 75px;">Qty</th>
                    <th style="width: 75px;">Unit Price</th>
                    <th style="width: 75px;">Total</th>
                    <th></th> 
                </tr>
                <tr>
                    <th>M001</th>
                    <td>Paracetamol</td>
                    <td><input  style="width: 75px;" type="number" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td><input  style="width: 75px;" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M042</th>
                    <td>Omeprazole</td>
                    <td><input style="width: 75px;" type="number" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M003</th>
                    <td>Abacavir</td>
                    <td><input style="width: 75px;" type="number" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M064</th>
                    <td>Vitamin-C</td>
                    <td><input style="width: 75px;" type="number" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
                <tr>
                    <th>M035</th>
                    <td>Amoxicillin</td>
                    <td><input style="width: 75px;" type="number" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td><input style="width: 75px;" class="input1"></td>
                    <td align="center"><button class="button button1" style="background-color: #ff9797;">Remove</button></td>
                </tr>
              </table>
            <a href="<?php echo URLROOT ?>/Cashiers/outpatientsingle"><button class="opbill-form-submit" style="margin-left: 335px;">Create Bill</button></a>
            <br>
            <br>
            
        </div>
    </div>  
</div>