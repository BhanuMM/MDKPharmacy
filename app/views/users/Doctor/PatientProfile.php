<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>


<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/doctors/viewpatientdetails"> << </a> </span></button>
</div>

<!-- --------------------------------------------------------------------------------------------- -->

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
<!--    <div class="welcome-card">-->
<!--        <div class="welcome">-->
<!--            <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">-->
<!--            <div class="welcome-names">-->
<!--                Welcome , Mr.--><?php //echo $_SESSION['username'] ?><!-- !-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <a href="--><?php //echo URLROOT ?><!--/doctors/addprescription"><input type="button" class="button button1" style="margin-top: 1%;" value="+New Prescription" /></a>-->
     <!-- --------------------------------------------------------------------------------------------- -->             
                 
     <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Prescriptions</h3></li>
    </ul>
   
    <table id="customers">
        <tr>
          <th>Prescription Number</th>
          <th>Date</th>
          <th></th> 
        </tr>
        <tr>
          <td>Pr001</td>
          <td>2021-09-25</td>
          <td align="center"><a href="<?php echo URLROOT ?>/doctors/pastprescription"><button class="button button1">View</button></a></td>
        </tr>
        <tr>
          <td>Pr067</td>
          <td>2021-10-08</td>
          <td align="center"><a href="<?php echo URLROOT ?>/doctors/pastprescription"><button class="button button1">View</button></a></td>
        </tr>
        <tr>
          <td>Pr098</td>
          <td>2021-10-23</td>
          <td align="center"><a href="<?php echo URLROOT ?>/doctors/pastprescription"><button class="button button1">View</button></a></td>
        </tr>
      </table>