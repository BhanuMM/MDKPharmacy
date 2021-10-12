<?php
   require APPROOT . '/views/includes/indexhead.php';
?>

<section>
  <div class="slide-show-container">
    <div class="wrapper-one">
      <div class="wrapper-text">Providing the Best Health Care Facilities</div>
    </div>
    <div class="wrapper-two">
      <div class="wrapper-text">Full Body Checkups at a considerable rates</div>
    </div>
    <div class="wrapper-three">
      <div class="wrapper-text">First Ever MRC scanner in the Private Sector</div>
    </div>
  </div>
</section>

    <!-- About Us -->

    <section class="about">
        <div class="about-left">
            <h1>About Us</h1><br><br>
            <h2>Ensuring the Best in the Industry</h2><br>
            <p>MDK Hospitals is the most accredited hospital in the Sri Lankan<br> healthcare sector. Since 2002, Lanka Hospitals has revolutionized<br> the healthcare industry through infrastructure development <br>and advancement of products and services, with a view to deliver<br> healthcare that is on par with global medical standards.
            </p>


        </div>

        <div class="about-right">
            <img src="<?php echo URLROOT ?>/public/images/c1.jpg">
        </div>





    </section>


    
    <section class="op">
        <div class="op-right">
            <h1>Online Pharmacy</h1><br><br>
            <h2>Order your medicine to the doorsteps during <br>the pandemic</h2><br>
            <p>MDK Hospitals is the most accredited hospital in the Sri Lankan<br> healthcare sector. Since 2002, Lanka Hospitals has revolutionized<br> the healthcare industry through infrastructure development <br>and advancement of products and services, with a view to deliver<br> healthcare that is on par with global medical standards.<br><br>

                <button class="button"><span>Visit now</span></button>
            </p>
            


        </div>

        <div class="op-left">
            <img src="<?php echo URLROOT ?>/public/images/c2.jpg">
        </div>

    </section>


    <!-- facilities -->
    <section class= "fac">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Incidunt placeat perferendis, quaerat earum rem excepturi <br> accusantium delectus magni omnis laboriosam quia nihil velit illum quos tempora at ea qui itaque!
    </p>
    <div class="row">
    <div class="fac-col">
        <h3>Surgery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, explicabo quia incidunt omnis labore cum est assumenda temporibus provident neque reprehenderit sunt, qui reiciendis quaerat exercitationem mollitia pariatur hic. Quo!</p>
    </div>
    <div class="fac-col">
        <h3>Dental</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, explicabo quia incidunt omnis labore cum est assumenda temporibus provident neque reprehenderit sunt, qui reiciendis quaerat exercitationem mollitia pariatur hic. Quo!</p>
    </div>
    <div class="fac-col">
        <h3>Pharmacy</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, explicabo quia incidunt omnis labore cum est assumenda temporibus provident neque reprehenderit sunt, qui reiciendis quaerat exercitationem mollitia pariatur hic. Quo!</p>
    </div>
    </div>


    </section>

    
    <!-- footer -->
    <!-- <section class= "footer">
        <div class="footer-row">
            <div class="logo">
                <a href = "index.html"><img src="<?php echo URLROOT ?>/public/images/logo1.png"> </a>
            </div>
            <br>
           <h1>MDK Hospitals</h1>
            <p>committed to provide compassionate care <br>and excellent service that transcends <br>conventional healthcare.
            </p>
            <div class="footer-menu">
             <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Facilities</a></li>
                <li><a href="">Pharmacy</a></li>
                <li><a href="">Surgeries</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Staff Login</a></li>
             </ul> 
            </div>
        </div>
    </section> -->

    <section class= "footer">

    <div class="footer-row">
    <div class="footer-col">
            <div class="logo">
                <a href = "index.html"><img src="<?php echo URLROOT ?>/public/images/logo1.png"> </a>
            </div>
              <h3>MDK Hospital</i></h3>
        <p>Providing the best <br> health care <br> since 1999</p>
    </div>

    <div class="footer-col">
               <p><ul>
                <li><a href="">Facilities</a></li>
                <li><a href="">Pharmacy</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Staff Login</a></li>
             </ul> </p>
    </div>

    <div class="footer-col">
        <h3>Contact Us</h3>
        <br>
        <p>No 149, Sri Ariyavilasa Rd, <br> Horana 12400</p>
        <p> TEL : 0347 888 888 </p>


    </div>


  
   
    </div>


    </section>

    
    
    



    <!-- JavaScript-->
<!-- 
    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
    </script> -->

    
</body>
</html>