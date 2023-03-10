<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>












<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FashionStore | Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@300;400;700&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">
	<link rel="icon" href="images/p.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="header">
	 <div class="container">
		<div class="navbar" id="navbar">
			<div class="logo"><a>Fa<span>Show</span>n</a></div>
			<nav>
				<ul class="menu" id="menu-items">
						<li><a href="">HOME</a></li>
						<li><a href="">PRODUCT</a></li>
						<li><a href="">ABOUT</a></li>
						<li><a href="">CONTACT</a></li>
						<li><a href="">ACCOUNT</a></li>
				</ul>
			</nav>
			<i class="fas fa-shopping-cart"></i>
			<img  class= "button"src="https://img.icons8.com/material-outlined/24/000000/menu--v1.png"/ onclick="menutoggle()">
		</div>
	 </div>
	</div>
	<div class="accout-page">
	    <div class="container">
	       <div class="row">
	           <div class="col-2">
	              <div class="form-container">
						<form action="" method="POST" class="login-email">
				            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
							<div class="input-group">
								<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
							</div>
							<div class="input-group">
								<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
							</div>
							<div class="input-group">
								<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				            </div>
				            <div class="input-group">
								<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
							</div>
							<div class="input-group">
								<button name="submit" class="btn">Register</button>
							</div>
							<p class="login-register-text">Have an account? <a href="index.php">Login Here</a></p>
						</form>
	              </div>
	           </div>
	       </div>
	</div>
	</div>

	<!------footer------>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download our app</h3>
					<p>Download App for Android and ios mobile  phone</p>					
				</div>
				<div class="footer-col-2">
					<img src="images/p.png" width="60px" height="50px">
					<p>Our purpose</p>					
				</div>
				<div class="footer-col-3">
					<h3>links</h3>
					<ul>
						<li><a href="">Return policy</a></li>
						<li><a href="">Site map</a></li>
						<li><a href="">Legal terms</a></li>
					</ul>				
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
					</ul>				
				</div>
			</div>
			<hr>
			<p class="copyright"><i class="far fa-copyright"></i>FaShown All Rights Reserved.</p>
		</div>
	</div>
	<script>
		var menu = document.getElementById("menu-items");

		menu.style.maxHeight = "0px";

		function menutoggle(){
				if(menu.style.maxHeight=="0px"){
						menu.style.maxHeight=="200px";
				}
				else{
					menu.style.maxHeight=="0px";
				}
		}
	</script>
	<script>
		$('.i-btn').click(function(){
	
			$('.container .menu').toggleClass("mystyle"); 
			$('.i-btn i').toggleClass("mystyle"); 


});
	</script>
	<script src="test.js"></script>
</body>
</html>