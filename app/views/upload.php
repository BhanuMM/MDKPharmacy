<?php
   require APPROOT . '/views/includes/indexhead.php';

  //  include "/config/config.php";

  //  if(isset($_POST['submit'])){

  //   $countfiles = count($_FILES['files'],['name']);
    
  //   $query = "INSERT INTO onlineorder(onlinefname,onlinetelno,onlineadrs,filename) VALUES(?,?,?,?)"; 
  //   $statement = $conn->prepare($query);

  //   for($i=0; $i<$countfiles; $i++)
  //   {

  //     $filename = $_FILES['files']['name'][$i];

  //     $target_file = 'upload/'.$filename;

  //     $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
  //     $file_extension = strtolower($file_extension);

  //     $valid_extension = array("png","jpeg","jpg"); 

  //     if(in_array($file_extension, $valid_extension))
  //     {
  //       if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)){
  //         $statement->execute(array($filename, $target_file));
  //     }
  //     }


  //  }
  //  echo "File upload successfully";
  // }

  if(ISSET($_POST['submit'])){
		$file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
		$allowed_ext = array("jpeg", "jpg", "gif", "png");
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$path = "upload/".$file_name;
		if(in_array($ext, $allowed_ext)){
			if(move_uploaded_file($file_temp, $path)){
				try{
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "INSERT INTO onlineorder(onlinefname,onlinetelno,onlineadrs,filename) VALUES(?,?,?,?)"; 
					$conn->exec($sql);
				}catch(PDOException $e){
					echo $e->getMessage();
				}
				
				$conn = null;
				header('location: index.php');
			}
		}else{
			echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
		}
	}

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
    
    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Your address..">
    <br>
    <br>
    	
    <label for="img">Upload Prescription</label>
    <br>
    <input type="file" id="image" name="image"  style="background-color:white;text-align:center;padding:16px 16px 16px 16px">

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