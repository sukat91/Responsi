<?php 
	include 'koneksi.php';

	$kode_barang  = $_GET['kode_barang'];

	$query = mysqli_query($sambungan, "DELETE FROM inventaris WHERE kode_barang='$kode_barang'");

	if($query){
		header("location:daftarinventaris.php");
	}
	else{
		echo "Data gagal dihapus";
	}   
?>