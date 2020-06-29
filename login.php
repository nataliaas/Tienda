<?php
session_start();
$email='nataliaans7@gmail.com';
$username='natalia';
$password='12345';

if ($_GET['email']==$email and $_GET['password']==$password){
    $_SESSION["username"]=$username;
    header('location:main.php');
}else{
    header('location:sesionfail1.php');
}
?>
