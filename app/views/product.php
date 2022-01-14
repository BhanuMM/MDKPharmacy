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
  <form class="search-container">
    <input type="text" id="search-bar" placeholder="  Check Medicine Availability">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>

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