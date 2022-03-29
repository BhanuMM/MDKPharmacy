<?php
   require APPROOT . '/views/includes/indexhead.php';
?>


<body>

<?php
if(isset($_GET['msg'])){
    echo ('<script>alert("Prescription Successfully Submited")</script>'); // print_r($_GET);
}
?>
  <!-- <br>
  <br>

<br><br><br> -->

<br><br>


<div class="hero-image">
  
<a href="<?php echo URLROOT; ?>/pages/upload"> <button class="upload-button1">Upload Prescription + </button></a>
</section> 
  <!-- <div class="hero-text">

  </div> -->
</div>
<br> 
<br><br>
<section class="product-header">

<form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/pages/product">
  <table>
    <tr>
    <th><li Style="float: right; vertical-align: middle; display: inline;">
    <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 400px; height: 50px; width: 300px;" placeholder="Check Medicine Availability"></li>
    </th>
    <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
    </tr>
  </table>
</form>
<p></p>

<br>
<table style="width: 72%; margin-left:21%;">
                    <tr>
                    
                      <th>Generic Name</th>
                      <th>Selling Price</th>
                      <th>Brand</th>
                      <th>Importer</th>
                      <th>Remaining Quantity</th>
                    </tr>
                    <?php foreach($data['med'] as $allmed): ?>

                        <tr>
                           
                            <td><?php echo $allmed->medgenname; ?></td>
                            <td><?php echo $allmed->medsellprice;  ?></td>
                            <td><?php echo $allmed->medbrand; ?></td>
                            <td><?php echo $allmed->medimporter; ?></td>
                            <td><?php echo  $allmed->quantity ?></td>
                           
                        </tr>
                        
                        <?php endforeach; ?>

</table>

<br><br><br>

<!-- 

  <a href="<?php echo URLROOT; ?>/pages/upload"> <button class="upload-button">Upload Prescription + </button></a> -->
</section> 

    <!--also include css of facilities in index page-->




<?php
   require APPROOT . '/views/includes/footer.php';
?>


</body>