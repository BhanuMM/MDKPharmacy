<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
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
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Expired within one month</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Expired within three months</button>
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
    <tr>
      <th>M1</th>
      <th>Hayleys Lifesciences Pvt(Ltd)</th>
      <th>Omez</th>
      <th>Omeprazole</th>
      <th>500</th>
      <th>2020-10-06</th>
      <th>2021-10-06</th>
    </tr>  
    <tr>
      <th>M2</th>
      <th>Mediquipment Limited</th>
      <th>panadol</th>
      <th>Paracetamol</th>
      <th>1000</th>
      <th>2020-01-06</th>
      <th>2021-10-25</th>
    </tr>
    
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
    <tr>
      <th>M2</th>
      <th>IJ Medicals</th>
      <th>panadol</th>
      <th>Paracetamol</th>
      <th>1000</th>
      <th>2020-11-06</th>
      <th>2021-11-20</th>
    </tr>
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
    <tr>
      <th>M2</th>
      <th>Mediquipment Limited</th>
      <th>panadol</th>
      <th>Paracetamol</th>
      <th>1000</th>
      <th>2020-01-06</th>
      <th>2022-01-20</th>
    </tr>
    <tr>
      <th>M2</th>
      <th>IJ Medicals</th>
      <th>Omez</th>
      <th>Omeprazole</th>
      <th>1000</th>
      <th>2020-11-06</th>
      <th>2022-01-20</th>
    </tr>
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