<?php
  include 'koneksi.php';
  session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("Location:index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>


  <title>Hapus</title>

 
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="popup"
  style="
  text-align:center;
  weidth: 1%;
  ">
    <?php
        $kode_barang =$_GET['kode_barang'];
        $query=mysqli_query($sambungan," SELECT * from inventaris where kode_barang = '$kode_barang'");
        $data=mysqli_fetch_array($query);
    ?>

    <br>

        <div class="container"
        
        style="background-color:white;
        margin-top:10%; 
        margin-left:35%;
        text-align:center;
        width:30%;
        border:2px solid;">
            <nav> 
             Hapus Data Inventaris     
            </nav><br>
        Yakin ingin menghapus
        <?php echo " " . $data['nama_barang'] . " ?<br>" ?>
        <br>
            <div class="mantapp">
                <button> 
                <a style="background-color: white" href=hapusinventaris.php?kode_barang=<?php echo $data['kode_barang'];?> role="button">Hapus</a>
                </button>
                <?php echo " " ?>
                
                <button>
                <a style="background-color: white" type="reset"  href="daftarinventaris.php" role="button">Batal</a>
                </button>
              
            </div>
        <br><br>
    </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>