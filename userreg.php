<?php
include "./conn.php";

$nic= ($_POST['Rnic']);
$f_name = ($_POST['Rfname']);
$tel_no = ($_POST['Rtelno']); 
$email = ($_POST['Remail']); 
$adrs = ($_POST['Radrs']); 
$uname = ($_POST['Runame']); 
$role=($_POST['Rrole']); 
$pswrd = ($_POST['Rpass']);


if($pswrd== $_POST['Reentpass']){

  $hashed_password = password_hash($pswrd, PASSWORD_DEFAULT);
  $sql = "INSERT INTO staff (nic,sname,email,adrs,telno,uname,upswrd,srole) VALUES('$nic','$f_name', '$email','$adrs','$tel_no','$uname','$hashed_password','$role')";

if (mysqli_query($conn, $sql)) {
  // echo "New record successfully";
  echo '<script> alert("Success!");</script>';
  echo '<script> location.href="./UserRegistration.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}else{
  echo '<script> alert("Passwords Does not Match!");</script>';
  echo '<script> location.href="./UserRegistration.php"</script>';
}


mysqli_close($conn);
?>