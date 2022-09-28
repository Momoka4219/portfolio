<?php


$server = "localhost";
$username = "u897665274_onemomo421";
$password = "Jlysljgfea8*";
$dbname = "u897665274_registar";


$con = mysqli_connect($server,$username,$password,$dbname);

if($con === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}




?>