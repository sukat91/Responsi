<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
  <!------------------------------------------------------------------------------------------------------------------------------->
    <!--Navbar pada Beranda-->
    <title>List Kategori</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="home.php"><strong>Kantor Serba Ada</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftarinventaris.php" >Daftar Inventaris <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle " href="bangunan.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                List Per Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="bangunan.php">Bangunan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="kendaraan.php">Kendaraan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="alattuliskantor.php">Alat Tulis Kantor</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="elektronik.php">Elektronik</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    
      <!--AKhir dari Navbar -->  
<section class="daftarinventaris" id="daftarinventaris">
    <br><br><br>
    <div class="container">
    <button class="btn btn-info"><a href=inputdata.php?kode_barang style="color:white;">+Tambah</a></button>
   <div class="konten2" style="text-align: center;">
   <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Daftar Inventaris Kendaraan</h1>
            <br><br>
            <table border="1" class="text-center" align="center" cellpadding="3" cellspacing="5" >
           
                <tr>
                    <td>No</td>
                    <td>Kode</td>
                    <td>Nama Barang</td>
                    <td>Jumlah</td>
                    <td>Satuan</td>
                    <td>Tanggal Datang</td>
                    <td>Kategori</td>
                    <td>Status</td>
                    <td>Harga Satuan</td>
                    <td>Total Harga</td>
                    <td>Aksi</td>
                 </tr>

                 <?php
					include "koneksi.php";
          $nourut=1;
          $total_harga=0;
          function convert($value)
            {
                $hasil = "Rp. " . number_format($value, 2, ',', '.');
                return $hasil;
            }
					$query = mysqli_query($sambungan, "SELECT * FROM inventaris WHERE kategori='Kendaraan'");
					while($data=mysqli_fetch_array($query)){
          
           
				?>
        
             
				<tr>
                    <td><?php echo $nourut    ?></td>
                    <td><?php echo $data['kode_barang'];    ?></td>
                    <td><?php echo $data['nama_barang'];    ?></td>
                    <td><?php echo $data['jumlah'];     ?></td>
                    <td><?php echo $data['satuan'];     ?></td>
                    <td><?php echo $data['tgl_datang'];      ?></td>
                    <td><?php echo $data['kategori'];      ?></td>
                    <td><?php echo $data['status_barang'];     ?></td>
                    <td><?php echo convert($data['harga']);     ?></td>
                    <td><?php echo convert($data['harga']*$data['jumlah']);?></td>
                   
                    <td>
                   <button class="btn btn-info"><a  style="color:white" href=editinventaris.php?kode_barang=<?php echo $data['kode_barang'];?>>Edit</a></button> 
                   <button class="btn btn-info"><a style="color:white" href=popuphapus.php?kode_barang=<?php echo $data['kode_barang'];?>>Hapus</a> </button>

                    </td>
                   
                         
                    
				</tr>
        
				<?php
        $nourut = $nourut+1;
        $total_harga = $total_harga + ($data['harga'] * $data['jumlah']);
        
					}
				?>
            </table>
            <h1 style="clear:both;margin-left:650px;margin-top:8px;font-size:1.2rem;"><?php echo "Total Inventaris = " . convert($total_harga); ?></h1>
            
   </div>
        
        </div>
</div>
</section><br><br>
      <!------------------------------------------------------------------------------------------------------------------------------->

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>