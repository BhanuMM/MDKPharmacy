<?php
   require APPROOT . '/views/includes/indexhead.php';
?>


<body>

    
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
    
    <div class="row">
    <div class="products-col">
    <div class="container">
  <div class="card">
  <img src="<?php echo URLROOT ?>/public/images/pandol.png "/>
  
    <div class="card-body">
      <div class="row">
        <div class="card-title">
          <h3>Panadol</h3>
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
    </div>
    <div class="products-col">
    <div class="container">
  <div class="card">
  <img src="<?php echo URLROOT ?>/public/images/panadol-syrup.jpg " />
  
    <div class="card-body">
      <div class="row">
        <div class="card-title">
          <h3>Panadol Syrup</h3>
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
    </div>
   


    </section>



<?php
   require APPROOT . '/views/includes/footer.php';
?>


</body>