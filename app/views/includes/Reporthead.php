<?php
if (!isset($_SESSION['user_id']) && ($_SESSION['urole']!="admin")){
    header('location: ' . URLROOT . '/users/logout');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="MDK/jpg" href="<?php echo URLROOT ?>/public/images/MDK.jpg"/>
    <title>
        DashBoard
    </title>
<!--    <link rel="stylesheet" href="--><?php //echo URLROOT ?><!--/public/css/StyleSheet.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo URLROOT ?><!--/public/css/csscode.css">-->
    <Style>
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
            padding-top: 3%;
            padding-bottom: 3%;
            -webkit-print-color-adjust: exact;
        }
        .page-number:before {
            content: "Page: " counter(page);}
        @media print {
            .pagebreak {
                clear: both;
                page-break-after: always; } /* page-break-after works, as well */
        }
    </Style>
</head>
<body style="font-family: poppins; margin: 0px;" >
<!--onload="javascript:window.print()"-->