<!DOCTYPE html>
<html>
    <head>
        <title>
            037-HartantaSembiring-IF-D
        </title>
    </head>
    <body>
        <center>
    <?php

if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! Username dan Password salah !";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }
}
?>
<section class="login" id="login">
<link rel="stylesheet" type="text/css" href="style.css">
 <h2 style="margin-top:50px">Silakan Login Dulu</h2>
    <form action="ceklogin.php" method="POST">
        <div class="box">
            <div class="inputan">
        Username 
        <input style="margin-left:5px" type="text" name = "username" placeholder="Masukkan Username"><br><br>
        Password 
        <input style="margin-left:8px" type="password" name = "password" placeholder="Masukkan Password"><br><br>

        <button><a href="signup.php">Sign Up</a> </button>
        <button type ="Submit" name ="submit"> login</button><br>
            </div>
        
        </div>
       
    
    
</form>
    </center>
</section>
 
    </body>
</html>