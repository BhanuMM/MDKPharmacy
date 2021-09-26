<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="MDK/jpg" href="./Images/MDK.jpg"/>
        <title>
            User Registration
        </title>
        <link rel="stylesheet" href="StyleSheet.css">
    </head>
    <body style="font-family: arial;">

<!-- --------------------------------------------------------------------------------------------- -->
<div class="sidebar">
    <header>MDK HOSPITALS</header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "./AdminDashboard.php">Dashboard</a></li>
        <li><a href = "#">Prescriptions </a></li>
        <li><a href = "#">Patients </a></li>
        <li><a href = "#">Profile Settings</a></li>    
    </ul>
</div>
<!-- --------------------------------------------------------------------------------------------- -->

        <!-- <ul id="list">
            <li><a class="active" href="#home">MDK HOSPITAL</a></li>
            <li><a href="./UserDetails.html">Dashboard </a></li>
            <li><a href="#contact">Inbox</a></li>
            <li><a href="#about">Calender</a></li>
            <li><a href="#about">Help Center</a></li>
            <li><a href="#about">Settings</a></li>
        </ul> -->
        
        <div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 80%; padding-top:0px; padding-bottom: 0px; height: 55px; ">
            <ul id="list2">
                <li><img src="./Images/Settings.png" alt="Settings" height="15px" style="opacity: 0.5;"></li>
                <li><img src="./Images/Notification.png" alt="Notifications" height="15px" style="opacity: 0.5;"></li>
                <li><img src="./Images/Message.png" alt="messages" height="15px" style="opacity: 0.5;"></li>
                <li style="color: #afafaf;"> | </li>
                <li style="color: #888888;">UCSC</li>
                <li><img src="./Images/Drop.png" alt="View" height="8px" style="opacity: 0.5;"> </li>
                <li><img src="./Images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>
                
            </ul>

        </div>
        <div class="row">
            <form method="post" action="userreg.php">
            <!-- <div style="margin-left:20%; padding:1px 16px;"> -->
                <div class="column" style="margin-left:17%; padding:1px 16px;">
                <h2 style="margin-top: 3%;">
                    User Registration
                </h2>
                <h5>
                    Full Name
                </h5>
                <input class="input1" type="text" id="Rfname" name="Rfname" placeholder="John Doe" required>
                <h5>
                    NIC
                </h5>
                <input class="input1" type="text" id="Rnic" name="Rnic" size=12 placeholder="123456789 V" required>
                <h5>
                    Phone Number
                </h5>
                <input class="input1" type="text"  id="Rtelno" name="Rtelno" size=10 placeholder="+94761234567">
                <h5>
                    Email :
                </h5>
                <input class="input1"  type="text" id="Remail" name="Remail" size=40 placeholder="Johndoe@mdk.com" >
                <h5>
                    Address
                </h5>
                <input type="text" class="input2" id="Radrs" name="Radrs" placeholder="222/B, Bakers' Street, Colombo 07.">
                
                <br><br>

               
            </div>

            <div class="column" style="margin-left:10%;padding:1px 16px;">
                <br><br>
                <h5>
                    Username
                </h5>
                <input class="input1" id="Runame" name="Runame" size=40 type="text" placeholder="John" required>
                <h5>
                    User Role
                </h5>
                <select id="Rrole" name="Rrole" required>
                    <option value="Doctor">Doctor</option>
                    <option value="Admin">Admin</option>
                    <option value="Pharmacist">Pharmacist</option>
                     <option value="Receptionist">Receptionist</option>
                     <option value="counsellor">counsellor</option>
                     <option value="Delivery">Delivery</option>
                </select>
                
                <h5>
                    Password
                </h5>
                <input class="input1" type="password" id="Rpass" name="Rpass" placeholder="****************" required>
                <h5>
                    Re-Enter Password
                </h5>
                <input type="password" id="Reentpass" name="Reentpass" class="input1" placeholder="****************" required>
                <br><br><br>
                <input type="reset" class="button button1" value="Refresh">
<input type="submit" name="submitbutton1" class="button button1" Value="Register">
            </div>
        </form>
        </div>

    </body>
</html>