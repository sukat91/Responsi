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

    <?php
    
    include "config.php";
    $username = $_SESSION['username'];
    $query = "SELECT * FROM petugas WHERE username='$username'";
    $hasil = mysqli_query($sambungan, $query); 
    if(mysqli_num_rows($hasil)>0){
        $dataorder = mysqli_fetch_array($hasil);
        $_SESSION["nama_lengkap"] = $dataorder["nama_lengkap"];
      } 
?>

    <title>Home</title>
  </head>
  <body>
      <div class="judul">
        <h2>Daftar Inventaris Barang <br> Kantor Serba Ada</h2>
      </div>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-info " id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="home.php"><strong>Kantor Serba Ada</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" >Beranda <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="daftarinventaris.php">Daftar Inventaris</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

            <li class="nav-item">
                <a class="nav-link" href="index.php">Log-out</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
      <!--AKhir dari Navbar -->  

      <!------------------------------------------------------------------------------------------------------------------------------->

    <!--Jumbotron untuk beranda-->
    <section class="jumbotron beranda" id="beranda">
      <div class="jumbotron">
        <div class="container">
            <p class="display-4"> SELAMAT DATANG </p><br>
            <p class="display-3"><?php echo $_SESSION['nama_lengkap']; ?></p>           
        </div>        
          </div>  
        </div>
    </section>
     
 
    <div class="footer">
                <p> &copy; Kantor Serba Ada</p>
            </div>
      <!--AKhir dari Jumbotron-->

  <!------------------------------------------------------------------------------------------------------------------------------->

            <!--Menu tentang-->

            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>