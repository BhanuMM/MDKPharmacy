<?php
include "./conn.php";
session_start();

$uname = ($_POST['Runame']); 
$pswrd = ($_POST['Rpass']);

$sql = "SELECT * FROM staff WHERE uname='$uname'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if(password_verify($pswrd, $row['upswrd'])) {
        
    
        $userrole= $row['srole'];
        $_SESSION['uname']=$uname;
        $_SESSION['urole']=$userrole;
            if($userrole=='Admin'){

                echo '<script> location.href="./AdminDashboard.php"</script>';

            }
            else{

                echo '<script> alert("other user!");</script>';

            }
        
       }
           
} else {
    echo '<script> alert("Invalid User Name or Password!");</script>';
    echo '<script> location.href="./signinUI.php"</script>';
}



mysqli_close($conn);
?>