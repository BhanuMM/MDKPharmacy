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
                Return Stock Details
                <p>
                <ul class="breadcrumb" style="margin-top: -30px;">
                    <li><a href="<?php echo URLROOT ?>/admins/admindashboard">Dashboard</a></li>
                    <li>Full Stock Details</li>
                    <li>Return Stock Details</li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <div style="margin-left: 300px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 72%; ">
            <ul style="padding-left: 0px; list-style-type: none;">
               
            </ul>

<!--    Tabs to switch between-->
    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Out of Stock</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Low Stock</button>
    </div>

    <div id="already" class="w3-container w3-display-container city">

<!--        View Out of stock table-->
        <p>
            <table id="customers" style="margin-left:-15px; width:103%;">
<!--            Table headings-->
                <tr>
                    <th>Medicine ID</th>
                    <th>Supplier Agency Name</th>
                    <th>Brand Name</th>
                    <th>Generic Name</th>
                </tr>

<!--            Table data-->
                <?php foreach($data['zerostock'] as $outstock): ?>
                    <tr>
                        <td><?php echo $outstock->medid; ?></td>
                        <td><?php echo $outstock->medimporter; ?></td>
                        <td><?php echo $outstock->medbrand; ?></td>
                        <td><?php echo $outstock->medgenname; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </p>
    </div>

<!--    View Low Stock Table-->
    <div id="one" class="w3-container w3-display-container city" style="display:none; padding-left: 0; padding-right: 0;">
        <p>
            <table id="customers">
<!--            Table Headings-->
                <tr>
                    <th>Medicine ID </th>
                    <th>Supplier Agency Name</th>
                    <th>Brand Name</th>
                    <th>Generic Name</th>
                    <th>Remaining Quantity</th>
                </tr>

<!--            Table data-->
                <?php foreach($data['lowstock'] as $lowstock): ?>
                    <tr>
                        <td><?php echo $lowstock->medid; ?></td>
                        <td><?php echo $lowstock->medimporter; ?></td>
                        <td><?php echo $lowstock->medbrand; ?></td>
                        <td><?php echo $lowstock->medgenname; ?></td>
                        <td><?php echo $lowstock->quantity; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </p>
    </div>

<!--Javascript part-->
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