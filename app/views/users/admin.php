<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="MDK/jpg" href="../Images/MDK.jpg"/>
        <title>
            DashBoard
        </title>
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/StyleSheet.css">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/csscode.css">
    </head>
    <body style="font-family: arial;">

<!-- --------------------------------------------------------------------------------------------- -->
<div class="sidebar">
    <header>MDK HOSPITALS</header>
    <ul style="list-style-type: none; padding-left: 0px;">
        <li><a href = "../Admin/AdminDashboard.html">Dashboard</a></li>
        <li><a href = "../Admin/UserDetails.html"> Users</a></li>
        <li><a href = "../Admin/ReportDetails.html">Reports </a></li>
        <li><a href = "../Admin/SupplierDetails.html">Suppliers</a></li>
        <li><a href = "../Admin/StockDetails.html">Stocks</a></li>     
    </ul>
</div>
        
<div style="box-shadow: 1px 1px 5px #888888; background-color: #ffffff; padding-left: 10%; padding-top:0px; padding-bottom: 0px; height: 4.7%; ">
    <ul id="list2">
        <li style="padding-left: 4%; padding-right: 60%; float: left;"><button class="button"><img src="../Images/Back.png" alt="Return to Dashboard" height="15px" style="opacity: 0.5;">Back to Dashboard</button></li>
        <li><img src="../Images/Settings.png" alt="Settings" height="15px" style="opacity: 0.5;"></li>
        <li><img src="../Images/Notification.png" alt="Notifications" height="15px" style="opacity: 0.5;"></li>
        <li><img src="../Images/Message.png" alt="messages" height="15px" style="opacity: 0.5;"></li>
        <li style="color: #afafaf;"> | </li>
        <li style="color: #888888;"><?php echo $_SESSION['username'] ?></li>
        <li><img src="../Images/Drop.png" alt="View" height="8px" style="opacity: 0.5;"> </li>
        <li><img src="../Images/Profile.png" alt="Profile" height="35px" style="opacity: 0.5;"></li>
        
    </ul>
</div>


<div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; ">
    <div class="card">
        <div class="welcome">
                <img src="https://randomuser.me/api/portraits/men/20.jpg" /></li>
            <div class="welcome-names">
                Welcome <br> Mr.Admin       
            </div>
        </div>
    </div>
<!-- --------------------------------------------------------------------------------------------- -->
        
            <div style="margin-left:10%; margin-right:20%; padding:1px 16px; width: 1000px; ">
                <div class="row">
                    <div class="column">
                        <div class="card"><a href="../Admin/UserDetails.html">
                            <div class="welcome">
                                <img src="../Images/usermanagementicon.png" />
                                <div class="welcome-names">
                                    User Management         
                                </div>
                            </div>
                                <button class="button button1">View</button></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card"><a href="../Admin/ReportDetails.html">
                            <div class="welcome">
                            <img src="../Images/reportmanagementicon.png" />
                          <div class="welcome-names">
                             Report Management 
                          </div>
                        </div>
                        <button class="button button1">View</button></a>
                      </div>
                    </div>
                    <div class="column">
                      <div class="card"><a href="../Admin/SupplierDetails.html">
                        <div class="welcome">
                          <img src="../Images/suppliermanagementicon.png" />
                          <div class="welcome-names">
                           Supplier Management       
                          </div>
                        </div>
                        <button class="button button1">View</button></a>
                      </div>
                    </div>
                    <div class="column">
                        <div class="card"><a href="../Admin/StockDetails.html">
                            <div class="welcome">
                                <img src="../Images/stockmanagementicon.png" />
                                <div class="welcome-names">
                                    Stock Management         
                                </div>
                            </div>
                                <button class="button button1">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
     <!-- --------------------------------------------------------------------------------------------- -->             
                 

        


        
    
        
     
    </body>
</html>