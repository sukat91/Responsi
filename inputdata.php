<!doctype html>

<html lang="en">
  <head>
      <title>Input Data Inventaris</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  <!------------------------------------------------------------------------------------------------------------------------------->
    <!--Navbar pada Beranda-->
  </head>
  <body>

        <!-----awal input data-------------------------------------------------------------------------------------------------------------------------->
        <section class="inputdata" id="inputdata">
            <div class="container">
                <div class="konten2">
                <form method="POST" action="koneksiinputdata.php">
                <div class="form-group">
                    <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Tambah Data Inventaris</h1><br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Kode Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-md-3">
                            <label>Nama Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-3">
                            <label>Jumlah</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <label>Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="satuan" class="form-control" placeholder="Satuan">
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-md-3">
                            <label>Tanggal Datang</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="tgl_datang" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                           <label>Kategori</label>
                        </div>
                        <div class="col-md-4">
                            <select id="inputState" class="form-control" name="kategori">
                                <option selected>Pilih..</option>
                                <option value="Bangunan">Bangunan</option>
                                <option value="Kendaraan">Kendaraan</option>
                                <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                <option value="Elektronik">Elektronik</option>
                            </select>
                            
                     </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-3">
                                <label>Status</label>
                            </div>

                            <div class="col-md-4">
              
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
                            <label>Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="harga" class="form-control" placeholder="Harga">
                        </div>
                    </div>
                    <br>
     
                <button type="submit" class="btn btn-info"  style="margin-left: 7%" name="simpan">Simpan</button>
                <button class="btn btn-info"> <a href="daftarinventaris.php" style="color:white;">Kembali</a> </button>
<br><br>

            </form>
                </div>
           
        </div>
        </section><br><br>
<!--AKhir inputdata----------------------------------------------------------------------------------------------------->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>