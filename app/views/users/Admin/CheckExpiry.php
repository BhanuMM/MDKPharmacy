<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> <<</a> </span></button>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div style="margin-left: 350px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h4><b> Check Expiry Details</b></h4></li>
                    <!-- <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Supplier ID"></li></form> -->
                </ul>
<p></p>
<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Expired</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Expire within one month</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Expire within three months</button>
</div>

<div id="already" class="w3-container w3-display-container city">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
    <table id="customers">
        <tr>
            <th>Medicine ID</th>
            <th>Supplier Agency Name</th>
            <th>Brand Name</th>
            <th>Generic Name</th>
            <th>Expired Quantity</th>
            <th>Purchased Date</th>
            <th>Expiry Date</th>
        </tr>


        <?php foreach($data['expstock'] as $allstocks): ?>
            <tr>
                <td><?php echo $allstocks->medid; ?></td>
                <td><?php echo $allstocks->medimporter; ?></td>
                <td><?php echo $allstocks->medbrand; ?></td>
                <td><?php echo $allstocks->medgenname; ?></td>
                <td><?php echo $allstocks->quantity; ?></td>
                <td><?php echo $allstocks->purchdate; ?></td>
                <td><?php echo $allstocks->expdate; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
                </p>
</div>

<div id="one" class="w3-container w3-display-container city" style="display:none">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
    <table id="customers">
        <tr>
            <th>Medicine ID </th>
            <th>Supplier Agency Name</th>
            <th>Brand Name</th>
            <th>Generic Name</th>
            <th>Expired Quantity</th>
            <th>Purchased Date</th>
            <th>Expiry Date</th>
        </tr>

        <?php foreach($data['expone'] as $allexstocks): ?>
            <tr>
                <td><?php echo $allexstocks->medid; ?></td>
                <td><?php echo $allexstocks->medimporter; ?></td>
                <td><?php echo $allexstocks->medbrand; ?></td>
                <td><?php echo $allexstocks->medgenname; ?></td>
                <td><?php echo $allexstocks->quantity; ?></td>
                <td><?php echo $allexstocks->purchdate; ?></td>
                <td><?php echo $allexstocks->expdate; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
                </p>
</div>

<div id="three" class="w3-container w3-display-container city" style="display:none">
<!--  <span onclick="this.parentElement.style.display='none'"-->
<!--  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <p>
    <table id="customers">
        <tr>
            <th>Medicine ID</th>
            <th>Supplier Agency Name</th>
            <th>Brand Name</th>
            <th>Generic Name</th>
            <th>Expired Quantity</th>
            <th>Purchased Date</th>
            <th>Expiry Date</th>
        </tr>
        <?php foreach($data['expthree'] as $allexpstocks): ?>
            <tr>
                <td><?php echo $allexpstocks->medid; ?></td>
                <td><?php echo $allexpstocks->medimporter; ?></td>
                <td><?php echo $allexpstocks->medbrand; ?></td>
                <td><?php echo $allexpstocks->medgenname; ?></td>
                <td><?php echo $allexpstocks->quantity; ?></td>
                <td><?php echo $allexpstocks->purchdate; ?></td>
                <td><?php echo $allexpstocks->expdate; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </p>
</div>

    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-blue";
        }
    </script>

</body>
</html>






            </div>

           
        </div>

    </body>
</html>