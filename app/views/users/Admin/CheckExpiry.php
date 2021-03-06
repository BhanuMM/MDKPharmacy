<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back Button-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; box-sizing:initial; ">
    <div class="welcome-card">
        <div class="welcome">
                <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
            <div class="welcome-names">
                Expiry Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/viewstock">Full Stock Details</a></li>
                    <li><a href="<?php echo URLROOT ?>/admins/checkexpiry">Expiry Details</a></li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<br><br>


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <div style="margin-left: 300px; margin-right:10%; padding:1px 16px; width: 75%;" >
        <ul style="padding-left: 0px; list-style-type: none;">
            <li Style="float: left; vertical-align: middle; display: inline;">
                
            </li>
        </ul>

<!--Tabs to switch between tables-->
        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Expired</button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Expire within one month</button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'three')">Expire within three months</button>
        </div>



<!--        Expired medicine table-->
        <div id="already" class="w3-container w3-display-container city" style="display:none; padding-left: 0; padding-right: 0;">
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
        <div id="one" class="w3-container w3-display-container city" style="display:none; padding-left: 0; padding-right: 0;">
            <table id="customers">
<!--                table headings-->
                <p>
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
            </p>
        </div>


        <!--        List of medicine which will expire within three month-->
        <div id="three" class="w3-container w3-display-container city" style="display:none; padding-left: 0; padding-right: 0;">
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