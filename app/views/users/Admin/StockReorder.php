<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>


<!--Back Button-->
<div style="margin-left: 23%; margin-top: 10px; padding:1px 16px; width: 71%">
        <button class="prebtn" style="margin-right: 200px;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewstock"> << </a>
            </span></button>
    </div>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <div style="margin-left: 350px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
            <ul style="padding-left: 0px; list-style-type: none;">
                <li Style="float: left; vertical-align: middle; display: inline;">
                    <h4>
                        <b> Stock Reorder Details</b>
                    </h4>
                </li>
            </ul>

<!--    Tabs to switch between-->
    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'already')">Out of Stock</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'one')">Low Stock</button>
    </div>

    <div id="already" class="w3-container w3-display-container city">

<!--        View Out of stock table-->
        <p>
            <table id="customers">
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
    <div id="one" class="w3-container w3-display-container city" style="display:none">
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