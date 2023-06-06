<?php
include_once("konfigurasi.php");
$psn="";
if(isset($_POST["txUSER"])){
    $usern=$_POST["txUSER"];
    $passw=$_POST["txPASS1"];
    $sqlcek="SELECT passkey FROM tbuser WHERE username='$usern';";
    $cnm= mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Gagal koneksi ke dbms");
    $hasil=mysqli_query($cnm,$sqlcek);
    $cek=mysqli_fetch_array($hasil);
        if($cek['passkey']== md5($passw)){
            $psn="Login Berhasil";
        }else{
            $psn="Kata Sandi Atau Password Salah, Silahkan Masukkan Username dan Password Ulang";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <?php
        if(!$psn=="")
        echo"<div>.$psn.</div>";
    ?>
<form action="formlogin.php" method="POST">
        <h3>From Login</h3>
        <div>
            Username
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>