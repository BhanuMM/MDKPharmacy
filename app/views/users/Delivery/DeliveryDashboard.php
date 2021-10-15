<?php
require APPROOT . '/views/includes/Deliveryhead.php';
?>

<!-- --------------------------------------------------------------------------------------------- -->
        
            <div style="margin-left:17%; margin-right:2%; padding:1px 16px; width: 1175px; ">
                        <div class="card">
                            <div class="welcome">
                                <img src="https://randomuser.me/api/portraits/men/20.jpg" />
                                <div class="welcome-names">
                                    Welcome <br> Mr.<?php echo $_SESSION['username'] ?>
                                </div>
                            </div>
                        </div>
                   
     <!-- --------------------------------------------------------------------------------------------- -->             
                 
     <ul style="padding-left: 0px; list-style-type: none; overflow: auto;">
        <li Style="float: left; vertical-align: middle; display: inline;"><h3>Assigned Deliveries</h3></li>
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
          <td><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button class="button button1">View</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button class="button button1">View</button></td>
        </tr>
      </table>

     
    </body>
</html>