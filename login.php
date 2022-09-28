<?php

include('config1.php');

$uname = $_POST['username'];
$pass = $_POST['password'];
// $phonenumber = $_POST['phonenumber'];


$sql = "SELECT * FROM `user` WHERE username = '$uname' AND password = '$pass'";

$query = "SELECT username FROM `user` WHERE username = '$uname' AND password ='$pass'";

$result = mysqli_query($con,$sql);

$nam = mysqli_query($con,$query);

if(mysqli_num_rows($result) === 1)
{
	header("Location: afterlogin");
	
}

else{
   echo '<script type=text/JavaScript>
   		alert("Something went wrong");
   		</script>';
}


 
?>