<?php
if (!isset($_SESSION['user_id']) && ($_SESSION['urole']!="admin")){
    header('location: ' . URLROOT . '/users/logout');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>
        MDK Pharmacy
    </title>
<!--    <link rel="stylesheet" href="--><?php //echo URLROOT ?><!--/public/css/StyleSheet.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo URLROOT ?><!--/public/css/csscode.css">-->

    <style>
      
    .btn {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
    }

/* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }

    <style>
        .bill-body{
            padding: 16px;
            border: 1px solid gray;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        .centered{
            position:absolute;
            left:5%;
            top:0;
        }

        body {
            margin: 0;
            padding-top: 5%;
            padding-bottom: 5% ;
        }
        @media print {
            .pagebreak { page-break-before: always; } /* page-break-after works, as well */
            /*tr.vendorListHeading {*/
            /*    background-color: #1a4567 !important;*/
            /*    -webkit-print-color-adjust: exact;*/
            /*}*/
            /*.vendorListHeading th {*/
            /*    color: white !important;*/
            /*}*/
            /*@page {*/
            /*    margin-top: 0;*/
            /*    margin-bottom: 0;*/
            /*    margin-left: 0;*/
            /*    margin-right: 0;*/
            /*}*/
            body {
                padding-top: 5%;
                padding-bottom: 5% ;
            }
            .heading{
                background-color: #0a0a2e !important;
                position:absolute;
                top:0;
                width:100%;
                padding-top: 3%;
                padding-bottom: 3%;
                -webkit-print-color-adjust: exact;
            }
        }
        .heading{
            background-color: #0a0a2e !important;
            position:absolute;
            top:0;
            width:100%;
            padding-top: 10%;
            z-index: -1;
            padding-bottom: 20%;
            -webkit-print-color-adjust: exact;
        }
        .page-number:before {
            content: "Page: " counter(page);}
        @media print {
            .pagebreak {
                clear: both;
                page-break-after: always; } /* page-break-after works, as well */
        }
        * {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 83.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Report */
.close2{
  position: absolute;
  margin-top: -25px;
  right: 14px;
  margin-right: 320px;
  font-size: 36px;
  transform: rotate(45deg);
  cursor:pointer;
}

.close3{
  position: absolute;
  margin-top: -25px;
  right: 14px;
  margin-right: 520px;
  font-size: 36px;
  transform: rotate(45deg);
  cursor:pointer;
}

.close4{
  position: absolute;
  margin-top: -25px;
  right: 14px;
  margin-right: 320px;
  font-size: 36px;
  transform: rotate(45deg);
  cursor:pointer;
}

.close5{
  position: absolute;
  margin-top: -25px;
  right: 14px;
  margin-right: 320px;
  font-size: 36px;
  transform: rotate(45deg);
  cursor:pointer;
}


.close6{
  position: absolute;
  margin-top: -25px;
  right: 14px;
  margin-right: 320px;
  font-size: 36px;
  transform: rotate(45deg);
  cursor:pointer;
}

.reportBtn{
  background-color: white;
  color:#0a0a2e;
  padding:15px 50px;
  text-decoration: none;
  border-color: #0a0a2e;
  border-radius: 8px; 
  cursor:pointer;
}
    </Style>
</head>
<body style="font-family: poppins; margin: 0px;" >
<!--onload="javascript:window.print()"-->