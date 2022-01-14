
<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>
<br>
<div style="margin-left:20%; padding:1px 16px; width: 40%">
    <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/pharmacists/viewonlineorders"> << </a> </span></button>
</div>  

  
<div style="margin-left: 300px; margin-top:250px; margin-right:0%; padding:1px 16px; width: 70%; ">

<div class="split left">

<div class="centered"> 
<img src="<?php echo URLROOT ?>/public/images/OnlinePrescriptions/<?php echo $data['orderimg']?>"  alt="<?php echo $data['orderimg']?>" width="400"  style="margin-left:350px; z-index=-1;">
</div>
  </div>



<div class="split right">
<!-- <div class="centered"> -->

<div class="row" style="margin-top:120px; margin-left:20%;">
<h3 >Patient Details</h3><br><br>
            <div class="table-patientdetails2"> 
        
            <table>
            <tr> 
                <th> Name:</th>
                <td><?php echo $data['name'] ?> </td>
                <th>Age: </th>
                <td><?php echo $data['dob'] ?> </td>
            </tr>
            <tr>
                <th>Gender: </th>
                <td><?php echo $data['gender'] ?></td>
                <th>Tel No:  </th>
                <td><?php echo $data['tel'] ?></td>
            </tr>
            </table>
            <br><br>
        Please confirm the prescription to continue ? 
        <br><br>
        <?php foreach($data['orders'] as $allorders): ?>
                        
                         <a style="background-color: #4BB543; ; color:white; padding:8px 30px; text-decoration: none; border-radius: 8px;" href="<?php echo URLROOT. "/pharmacists/onlineorderprepare/".$allorders->onlineoid ?>"> Confirm </a>
                        
                         <a style="background-color: #d11a2a;; ; color:white; padding:8px 38px; text-decoration: none; margin-left:30px; border-radius: 8px;" href="<?php echo URLROOT. "/pharmacists/onlineorderprepare/".$allorders->onlineoid ?>"> Reject </a>
                    <?php endforeach; ?>
          
    </div> 
    
  </div>
  
</div>