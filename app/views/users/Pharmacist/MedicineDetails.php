<?php
require APPROOT . '/views/includes/Pharmacisthead.php';
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 72%; ">
        <div class="welcome-card">
            <div class="welcome">
                    <!-- <img src="https://randomuser.me/api/portraits/men/20.jpg" width="100%" alt=""> -->
                <div class="welcome-names">
                View Online Prescription                 <p>
                    <ul class="breadcrumb" style="margin-top: -30px;">
                        <li><a href="<?php echo URLROOT ?>/pharmacists/pharmacistdashboard">Dashboard</a></li>
                        <li>Online Prescriptions</li>
                        <li>View Online Prescription</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    
</div>

<div style="margin-left: -4.5%; margin-right: 2%;"> 

      
<ul style="padding-left: 0px; list-style-type: none;  ">
    <!-- <li Style="float: left; vertical-align: middle; display: inline;"><h3 style="margin: 0px;"> User Details</h3></li> -->
    <form method="post" class="data" style="float: left; display: inline; margin-top: 2%; margin-left: 76%;" action="<?php echo URLROOT; ?>/pharmacists/viewmedicineavailability">
        <table>
            <tr>
                <th>
                    <li>
                        <input type="text" id="UISearchbar" name="UISearchbar" style="border-radius: 5px; height: 35px; width: 200px;" placeholder="Medicine Name"> 
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


                <table id="customers" style="width: 72%; margin-left:21%;">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Importer Name</th>
                      <th>Remaining Quantity</th>
                      <th>Selling Price</th>
                    </tr>
                    <?php foreach($data['med'] as $allmed): ?>

                        <tr>
                            <td><?php echo $allmed->medid;  ?></td>
                            <td><?php echo $allmed->medgenname; ?></td>
                            <td><?php echo $allmed->medbrand;  ?></td>
                            <td><?php echo $allmed->medimporter; ?></td>
                            <td><?php echo $allmed->quantity; ?></td>
                            <td><?php echo  $allmed->medsellprice ?></td>
                           
                        </tr>
                        
                        <?php endforeach; ?>

                  </table>
            </div>

           
        </div>

    </body>
</html>