<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
               Current Deliveries                 <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li>Current Deliveries </li>
                       
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<div style="margin-left: 340px; margin-top:25px; margin-right:0%; padding:1px 16px; width: 70%; ">
<span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>

                

<div style="margin-left: -4.5%; margin-right: 2%;"> 

      
<ul style="padding-left: 0px; list-style-type: none;  ">
    <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
    <form method="post" class="data" style="float: left; display: inline; margin-top: 2%; margin-left: 73.5%;" action="<?php echo URLROOT; ?>/deliverys/viewcurrentdeliveries">
        <table>
            <tr>
                <th>
                    <li>
                        <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Telephone Number"> 
                    </li>
                </th>
                <th>
                    <button style="margin-top:5px; border-radius:5px; height: 40px; border-radius: 5px; padding-bottom:-10px;" class="form-submit"><i class="fa fa-search"></i></button>
                </th>
            </tr>
        </table>
    </form>
</ul>
</div>

                <table id="customers" style="width: 102%; margin-left:-3%;">
                    <tr>
                      <th>Pres ID</th>
                      <th>Customer Name</th>
                      <th>Telephone</th>
                      <th>Address</th>
                      <th>View</th>
                    </tr>
                    <?php foreach($data['del'] as $alldel): ?>

                    <tr>
                    <td><?php echo $alldel->onlinepresid ?></td>
                    <td><?php echo $alldel->onlinefname ?></td>
                    <td><?php echo $alldel->onlinetelno ?></td>
                    <td><?php echo $alldel->onlineadrs ?></td>
                    <td><div style="margin-top:10%; margin-bottom:10%;"><a class="updateBtn" href="<?php echo URLROOT. "/deliverys/viewcurrentsingle/".$alldel->onlinepresid ?>"> View Bill</a></div></td>
            </tr>
                    <?php endforeach; ?>
                  </table>

            </div>

           
        </div>
</div>

    </body>
</html>