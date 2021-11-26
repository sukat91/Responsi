
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

<?php
session_start();
$username = $_SESSION['username'];



if (isset($_POST["logout"])) {
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php?pesan=logout");
}
?>

