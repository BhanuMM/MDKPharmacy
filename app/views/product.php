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
<div class="card" style="height: 200px;">
<?php foreach($data['med'] as $allmed): ?>
  <h1><?php echo $allmed->medgenname; ?></h1>
  <p class="price">Rs.<?php echo  $allmed->medsellprice ?></p>
  <p>Brand: <?php echo $allmed->medbrand;  ?></p>
  <p>Importer: <?php echo $allmed->medimporter; ?></p>
  <p>Remaining Quantity: <?php echo $allmed->quantity; ?></p>
  <?php endforeach; ?>
</div>


<!-- 

  <a href="<?php echo URLROOT; ?>/pages/upload"> <button class="upload-button">Upload Prescription + </button></a> -->
</section> 

    <!--also include css of facilities in index page-->

    <section id="products" class= "products">
    <?php 
      if(isset($_POST['post']))
      {
        $productsQuery = "SELECT medgenname,medbrand,medimporter,medsellprice FROM medicine";
        $productsQuery_run = $conn->query($productsQuery);

      if($productsQuery_run)
      {
        while($products = $productsQuery_run->fetch(PDO::FETCH_OBJ))
        {
          echo ' <tr> 
                    <th> '.$products->medgenname.' </th>
                    <th> '.$products->medbrand.' </th>
                    <th> '.$products->medimporter.' </th>
                    <th> '.$products->medsellprice.' </th>
                </tr> ';
                    
        }

      }
      }
    
  ?>


    </section>



<?php
   require APPROOT . '/views/includes/footer.php';
?>


</body>