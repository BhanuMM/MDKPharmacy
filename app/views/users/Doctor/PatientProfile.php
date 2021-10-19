<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<!-- --------------------------------------------------------------------------------------------- -->

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
    <div class="welcome-card">
        <div class="welcome">
            <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt="">
            <div class="welcome-names">
                Welcome , Mr.<?php echo $_SESSION['username'] ?> !
            </div>
        </div>
    </div>
    <a href="<?php echo URLROOT ?>/doctors/addprescription"><input type="button" class="button button1" style="margin-top: 1%;" value="+New Prescription" /></a>
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
          <td></td>
          <td></td>
          <td align="center"><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td align="center"><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td align="center"><button class="button button1">View</button></td>
        </tr>
      </table>


        
    
        
     
    </body>
</html>