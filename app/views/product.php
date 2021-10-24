<?php
   require APPROOT . '/views/includes/indexhead.php';
?>


<body>

    
  <br>
  <br>

  <section class="product-header">
  <form class="search-container">
    <input type="text" id="search-bar" placeholder="Check Medicine Availability">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>


  <a href="<?php echo URLROOT; ?>/pages/upload"> <button class="upload-button">Upload Prescription + </button></a>
      <h5> Order your medicine to the doorsteps during
          the pandemic,<br> Simply Send your Prescription to us. </h5>

</section> 



<div class="container">
  <div class="card">
  <img src="<?php echo URLROOT ?>/public/images/pandol.png "/>
  
    <div class="card-body">
      <div class="row">
        <div class="card-title">
          <h3>Pandol</h3>
          <!-- <h3>Rs. 20 / card</h3> -->
        </div>
        <div class="view-btn">
          <a href="">In Stock</a>
          <br><br>
        </div>
      </div>
      <hr />
      <p><br>
      provide effective relief of aches and pains, such as headaches, migraines, sore throatsand dental pain. <br>
      </p>
     
    </div>
  </div>
  
</div>


<?php
   require APPROOT . '/views/includes/footer.php';
?>


</body>