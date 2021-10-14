<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDK Pharmacy</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/landingstyle.css">


</head>
<body>
    <div class="header"> 
        <!--top bar ( time/contact) -->
        <div class="top-header">
            <div class="text-left">
                <p>Opening Hours: 6.00 Am - 11.00 Pm (Mon - Sat)</p>
            </div>
            <div class="text-right">
                Call Us At +94 011 752 8659
            </div>
        </div>
        <!--logo and menu-->
        <nav>
            <div class="logo">
                <a href = "index.html"><img src="<?php echo URLROOT ?>/public/images/logo1.png"> </a>
            </div>
            
        <div class="nav-links" id="navLinks">

        <!--font awesome for closing-->
        <!-- <i class="fas fa-times" onclick="hideMenu()"></i> -->

            <div class="nav-align">

           
            <ul>

                <li><a href="./index/LinkId=location">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href=>Pharmacy</a></li>
                <!-- <li><a href="">Surgeries</a></li> -->
                <li><a href="">Facilities</a></li>
                <li><a href="">Location</a></li>

                <li><a href="<?php echo URLROOT; ?>/users/login">Log In</a></li>
            </ul>
            
          </div>
        </div> 

        <!--font awesome for bars-->
        <i class="fas fa-bars" onclick="showMenu()"></i>

    </nav>

</div>
