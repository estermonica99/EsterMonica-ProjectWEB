<?php
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:Home/index.php");
}else{
	 echo "<SCRIPT>
        alert('Username atau Password Salah')
        window.location.replace('index.php');
    </SCRIPT>";
}
 
?>