<?php
session_start();
require_once('config.php');

echo "helo jslogin here";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password' LIMIT 1";
$result = $conn->query($sql);


if(mysqli_num_rows($result)>0){


 while($user = mysqli_fetch_assoc($result)) {
$_SESSION['userlogin'] = $user;

 echo '1';
}

}else{
echo 'error found';
}
