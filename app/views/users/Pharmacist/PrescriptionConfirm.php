
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
<br><br><br>
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
                <td><?php echo $data['ordername'] ?> </td>
                <th>Tel No: </th>
                <td><?php echo $data['ordertelno'] ?> </td>
            </tr>
            <tr>
                <th>Address: </th>
                <td><?php echo $data['orderadrs'] ?></td>
                <th>Order ID:  </th>
                <td><?php echo $data['orderid'] ?></td>
            </tr>
            </table>
            <br><br>
        Please confirm the prescription to continue ? 
        <br><br>
        
        <form method="post" class="data"  action="<?php echo URLROOT. "/pharmacists/rejectorder/"?>">
                        
                        <a id="reject" style="background-color: #d11a2a;; ; color:white; cursor:pointer; padding:8px 38px; text-decoration: none; margin-right:30px; z-index: 3; border-radius: 8px;"> Reject  </a>
                        
                        <!-- Reason for rejection block -->

                        <div class="reject-reason" style="display:none; background-color:#f2f2f2; padding:10px 30px 30px 30px; margin-right:20%;" >
                        <div id="close" class="close" style="margin-right:17%; margin-top:-1%;">+</div>
                        <h5>
                        Reason for the Rejection : 
                        </h5>
                        <input class="input1" type="text" id="orderid" name="orderid" value="<?php echo $data['orderid'] ?>"  hidden>

                        
                        <select style="padding:8px 18px; border-radius: 8px;" name="reject" id="reject">
                            <option value="Image is not clear">Image is not clear</option>
                            <option value="Telephone number is not working">Telephone number is not working</option>
                            <option value="Scam">Scam</option>
                            
                        </select>

                        <button class="form-submit" style="padding:8px 30px;">Submit</button>

                        </div></div>
                      
                      

        </form>
        
         <div style = "margin-top: 5%; z-index: 0">
        <a id="confirmBtn" style="background-color: #4BB543; ; color:white; padding:8px 30px; text-decoration: none; 
         border-radius: 8px;" href="<?php echo URLROOT. "/pharmacists/onlineorderprepare/".$data['orderid'] ?>"> Confirm </a>

        </div>



        <script>
        document.getElementById('reject').addEventListener('click',function(){
            document.querySelector('.reject-reason').style.display = 'block';
            document.getElementById("#reject").required = true;

        });
        
        document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.reject-reason').style.display = 'none';
            document.getElementById("reject").required = false;
        })

        </script>



                        

                         <!-- <div class="ps-btn" style="margin-top:1%"> -->

<br>


                        

                          
</form>    


</div>
                        
                   
          
    </div> 
    
  </div>
  
</div>