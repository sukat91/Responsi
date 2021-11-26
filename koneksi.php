<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "responsi";

    $sambungan = new mysqli($hostname, $username, $password, $database);
    if($sambungan -> connect_error){
        die ('Gagal terhubung ke database :'. $connect->connect_error);
    }

?>