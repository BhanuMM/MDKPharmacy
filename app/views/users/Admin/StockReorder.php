<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> <<</a> </span></button>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div style="margin-left: 350px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
                <ul style="padding-left: 0px; list-style-type: none;">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h4><b> Stock Reorder Details</b></h4></li>
                    <!-- <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" style="height: 35px;" placeholder="Supplier ID"></li></form> -->
                </ul>
<p></p>
<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Out of Stock</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Low Stock</button>
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
    </tr>
    <tr>
      <td>M1</td>
      <td>Hayleys Lifesciences Pvt(Ltd)</td>
      <td>Omez</td>
      <td>Omeprazole</td>
    </tr>  
    <tr>
      <td>M2</td>
      <td>Mediquipment Limited</td>
      <td>panadol</td>
      <td>Paracetamol</td>
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
        <th>Remaining Quantity</th>
    </tr>
    <tr>
      <td>M2</td>
      <td>IJ Medicals</td>
      <td>panadol</td>
      <td>Paracetamol</td>
      <td>90</td>
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