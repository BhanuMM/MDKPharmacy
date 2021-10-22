<?php
   require APPROOT . '/views/includes/indexhead.php';
?>

<section>
  <div class="slide-show-container">
    <div class="wrapper-one">
      <div class="wrapper-text"></div>
    </div>
    <div class="wrapper-two">
      <div class="wrapper-text"></div>
    </div>
    <div class="wrapper-three">
      <div class="wrapper-text"></div>
    </div>
  </div>
</section>

    <!-- About Us -->

    <section id="about" class="about">
        <div class="about-left">
            <h1>About Us</h1><br><br>
            <h2>Ensuring the Best in the Industry</h2><br>
            <p>MDK Hospitals is the most accredited hospital in the Sri Lankan<br> healthcare sector. Since 2011, MDK Hospitals has revolutionized<br> the healthcare industry through infrastructure development <br>and advancement of products and services, with a view to deliver<br> healthcare that is on par with global medical standards.
            </p>


        </div>

        <div class="about-right">
            <img src="<?php echo URLROOT ?>/public/images/c1.jpg" >
        </div>





    </section>


    
    <section id="op" class="op">
        <div class="op-right">
            <h1>Online Pharmacy</h1><br><br>
            <h2>Order your medicine to the doorsteps during <br>the pandemic</h2><br>
            <p>MDK Hospitals is committed to provide compassionate care <br> and excellent service that transcends conventional healthcare.<br> Easily order your medicines by uploading your prescriptions<br> to the MDK Hospitals online website and recieve your medicine <br> to your doorstep <br><br><br>

            <a href="<?php echo URLROOT; ?>/pages/product"><button class="button"><span>Visit now</span></button></a>
            </p>
            


        </div>

        <div class="op-left">
            <img src="<?php echo URLROOT ?>/public/images/deliveryman.jpg">
        </div>

    </section>


    <!-- facilities -->
    <section id="fac" class= "fac">
    <h1>Our Facilities</h1>
    <p>MDK Hospitals is committed to provide <br>compassionate care
and excellent service that transcends conventional healthcare.
    </p>
    <div class="row">
    <div class="fac-col">
        <h3>Surgery</h3>
        <p>MDK Hospitals has become a regional leader in complex fields of surgeries with their cutting edge technology. With the help of the expertise in different sectors, our staff offers a total care approach to our people.
        </p>
    </div>
    <div class="fac-col">
        <h3>Dental</h3>
        <p>With a dedicated team of local specialist dentists,  highly trained nurses and access to the most up-to-date technology, MDK hospital is able to provide the best dental service in the area. </p>
    </div>
    <div class="fac-col">
        <h3>Pharmacy</h3>
        <p>MDK Hospitals Pharmacies promote rational use of medicine by providing a well-defined dispensing process with the help of professional, qualified staff in conveniently located, safe and reliable outlets. </p>
    </div>
    </div>


    </section>

    
    <!-- location -->

    <section id="location" class= "location">
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4554387451667!2d80.06169371460474!3d6.714141722780812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24b7291210f21%3A0xac1a58f519a84bf2!2sMDK%20Hospital!5e0!3m2!1sen!2slk!4v1634207145593!5m2!1sen!2slk" width="1500" height="450"  style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
    </section>
    <br>
    <br>
    <BR>

    <?php
   require APPROOT . '/views/includes/footer.php';
?>


    

    
    
    



    <!-- JavaScript-->

    <script>
      function hashNoHistory(link){
        var a = document.createElement("a");
        a.href = link.href;
        location.replace(a.href);
        return false;
}

        
    </script>

    
</body>
</html>