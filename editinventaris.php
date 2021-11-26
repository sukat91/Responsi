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

    <title>Edit Data Inventaris</title>
  </head>
  <body>
<section class="editinventaris" id="editinventaris">
   
    <div class="container">
   <div class="konten2">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Edit Data Inventaris</h1>
            <br><br>

            <?php
            include 'koneksi.php';
			$kode_barang=$_GET['kode_barang'];
            $query = mysqli_query($sambungan, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'");
            while($hasil = mysqli_fetch_array($query)){
            ?>

            <form method="POST" action="prosesedit.php">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
							<label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
						</div>
                        <div class="col-md-8">
                            <input class="form-control" style="width:75%; margin-right:25% " type="text" name="kode_barang" value="<?php echo $hasil['kode_barang'];?>" aria-label="readonly input example" readonly>
                        </div>
				    </div>
	
                    <div class="row">
                        <div class="col-md-3">
						    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label></td>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="nama_barang" value="<?php echo $hasil['nama_barang'];?>">
                        </div>
                    </div>	
					
                    <div class="row">
                        <div class="col-md-3">
						    <label for="exampleFormControlInput1" class="form-label">Jumlah</label></td>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="jumlah" value="<?php echo $hasil['jumlah'];?>">
                        </div>
                    </div>

					<div class="row">
                        <div class="col-md-3">
						    <label for="exampleFormControlInput1" class="form-label">Satuan</label></td>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="satuan" value="<?php echo $hasil['satuan'];?>">
                        </div>
                    </div>

					<div class="row">
                        <div class="col-md-3">
						    <label for="exampleFormControlInput1" class="form-label">Tanggal Datang</label></td>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="tgl_datang" value="<?php echo $hasil['tgl_datang'];?>">
                        </div>
                    </div>

					<div class="row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                        </div>
                        <div class="col-md-8">
                            <select id="inputState"  style="width:75%" class="form-control" name="kategori" value="<?php echo $hasil['kategori'];?>">
                                <option selected>Pilih..</option>
                                <option>Bangunan</option>
                                <option>Kendaraan</option>
                                <option>Alat Tulis Kantor</option>
                                <option>Elektronik</option>
                            </select>
                        </div>  
                    </div>
						
				
					
						<div class="row">
                            <div class="col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                            </div>
						
						  <div class="col-md-8">
                            <div class="pilihan" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="status_barang" value="<?php echo $hasil['status_barang'];?>"> 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status_barang"  value="Baik">
                                        <label class="form-check-label" for="inlineRadio1">Baik</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status_barang"  value="Perawatan">
                                        <label class="form-check-label" for="inlineRadio2">Perawatan</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status_barang" value="Rusak">
                                        <label class="form-check-label" for="inlineRadio3">Rusak</label>
                                    </div>
                            </div>
                          </div>
                        </div>

                  
						<div class="row">
                            <div class="col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Harga Satuan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" style="width:75%; margin-right:25%"id="exampleFormControlInput1" name="harga" value="<?php echo $hasil['harga'];?>">
                            </div>
						</div>
					
			
                </div>
					
				<br>
                <button type="submit" class="btn btn-info"  style="margin-left: 7%" name="simpan">Simpan</button>
                <button class="btn btn-info"> <a href="daftarinventaris.php" style="color:white;">Kembali</a> </button>
                <br><br>
            </form>
				<?php
					}
				?>
            
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