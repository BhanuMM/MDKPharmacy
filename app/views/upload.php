<?php
   require APPROOT . '/views/includes/indexhead.php';

  ?>

<!DOCTYPE html>
<html>


<body>
<div class="upload">
<h3>Upload Your Prescription</h3><br><br>


    <form method="post" class="data" enctype='multipart/form-data' action="<?php echo URLROOT; ?>/pages/upload">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your name..">

    <label for="contact">Contact Number</label>
    <input type="text" id="contact" name="contact" placeholder="Your contact number..">
        <span class="invalidFeedback" style="color: red; font-size: 10pt;" >
                    <?php echo $data['telError']; ?>
                 <br>   </span>
    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Your address..">
    <br>
    <br>
    	
    <label for="img">Upload Prescription</label>
    <br>
    <input type="file" id="imagefile" name="imagefile"  style="background-color:white;text-align:center;padding:16px 16px 16px 16px" required>

    <!-- accept="image/*" -->

    <br><br>


  
    <input type="submit"name="submit" value="Submit">
  </form>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>

</body>
</html>



</body>
</html>