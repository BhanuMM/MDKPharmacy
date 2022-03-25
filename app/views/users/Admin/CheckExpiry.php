<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back Button-->
<div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> <<</a>
            </span>
        </button>
    </div>


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div style="margin-left: 350px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
        <ul style="padding-left: 0px; list-style-type: none;">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h4>
                    <b> Check Expiry Details</b>
                </h4>
            </li>
        </ul>

<!--Tabs to switch between tables-->
        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Expired</button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Expire within one month</button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Expire within three months</button>
        </div>



<!--        Expired medicine table-->
        <div id="already" class="w3-container w3-display-container city">
            <p>
                <table id="customers">
<!--    Table Headings-->
                    <tr>
                        <th>Medicine ID</th>
                        <th>Supplier Agency Name</th>
                        <th>Brand Name</th>
                        <th>Generic Name</th>
                        <th>Expired Quantity</th>
                        <th>Purchased Date</th>
                        <th>Expiry Date</th>
                    </tr>

<!--    Table Data-->
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


<!--        List of medicine which will expire within one month-->
        <div id="one" class="w3-container w3-display-container city" style="display:none">
            <table id="customers">
<!--                table headings-->
                <tr>
                    <th>Medicine ID </th>
                    <th>Supplier Agency Name</th>
                    <th>Brand Name</th>
                    <th>Generic Name</th>
                    <th>Expired Quantity</th>
                    <th>Purchased Date</th>
                    <th>Expiry Date</th>
                </tr>

<!--                Table data-->
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
        </div>


        <!--        List of medicine which will expire within three month-->
        <div id="three" class="w3-container w3-display-container city" style="display:none">
            <p>
                <table id="customers">
<!--                Table headings-->
                    <tr>
                        <th>Medicine ID</th>
                        <th>Supplier Agency Name</th>
                        <th>Brand Name</th>
                        <th>Generic Name</th>
                        <th>Expired Quantity</th>
                        <th>Purchased Date</th>
                        <th>Expiry Date</th>
                    </tr>

<!--Table data-->
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
    </div>

<!--Javascript code-->
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