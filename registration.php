<?php

include('config1.php');

$uname = $_POST['username'];
$pass = $_POST['password'];
$phonenumber = $_POST['phonenumber'];


$sql = "INSERT INTO `user` (`username`, `password`, `phonenum`) VALUES ('$uname', '$pass', '$phonenumber');";


$result = mysqli_query($con,$sql);

if($result)
{
	?>
	<script type="text/JavaScript">
	    alert('Thank you for your registration!');
	    window.location.href="login.html";
	</script>
	<?php
}

else{
    	?>
	<script type="text/JavaScript">
	    alert('Something went wrong');
	    window.location.href="registration";
	</script>
	<?php
}

 
?>