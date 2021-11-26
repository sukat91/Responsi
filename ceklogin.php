<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($sambungan, "SELECT * FROM petugas WHERE username = '$username'&& password = '$password'") or die (mysqli_error($sambungan));
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:home.php");
}
else{
    header("location:index.php?pesan=gagal");
}
?>