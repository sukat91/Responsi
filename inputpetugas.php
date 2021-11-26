<?php

    include "koneksi.php";
    $username  =$_POST['username'];
    $password =$_POST['password'];
    $nama_lengkap =$_POST['nama_lengkap'];
    $email =$_POST['email'];
    $no_tlp =$_POST['no_tlp'];

    $query=mysqli_query($sambungan, "INSERT INTO petugas VALUES ('$username','$password','$nama_lengkap','$email','$no_tlp')")
    or die(mysqli_error($sambungan));

    if($query)
    {   
        header("location:index.php");
    }
    else 
    {
        echo ("Maaf, proses input gagal, silahkan coba kembali!");
    }	
?>