<?php
echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];


$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

 

if($num == 1){
	S_SESSION['username'];
	header('location:index.html');
}else{
	header('location:login:php');
		
}


?>