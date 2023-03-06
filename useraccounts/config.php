<?php
session_start();
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$email=$_POST['t3'];
$pho=$_POST['t5'];
$pass=$_POST['t4'];

$_SESSION["useris"]=$fname;
$doneby=$_SESSION["useris"];

$conn=mysqli_connect("localhost","root","","useraccounts");


 $sql = "INSERT INTO users (firstname,lastname,email,phone,password) VALUES ('$fname','$lname','$email','$pho','$pass')";

	 if (mysqli_query($conn, $sql)) {
		echo "<script>window.open('login.php','_self')</script>";

	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }



?>

