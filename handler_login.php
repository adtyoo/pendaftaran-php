<?php
include_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = $koneksi
    ->query("SELECT * FROM pengguna where email = '$email' && password = '$password'")
    ->fetch_assoc();

session_start();
$_SESSION['user_login'] = $user;
header("Location: dashbor.php");

?>