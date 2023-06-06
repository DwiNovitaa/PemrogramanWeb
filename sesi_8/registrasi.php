<?php
    include_once("konfigurasi.php");
    $psn="";
    if(isset($_POST["txNAMA"])){
        $pass1=$_POST["txPASS1"];
        $pass2=$_POST["txPASS2"];
        if($pass1==$pass2){
            $nama=$_POST["txNAMA"];
            $email=$_POST["txEMAIL"];
            $user=$_POST["txUSER"];
            
            #menambahkan data (CRUD)
            $sql= "INSERT INTO tbuser(nama,email,username,passkey,iduser) VALUES('$nama','$email','$user','".md5($pass1)."','".md5($nama)."');";
            #koneksi dan registrasi
            $cnm= mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Gagal koneksi ke dbms");
            $hasil=mysqli_query($cnm,$sql);
            if($hasil){
                $psn="Registrasi User Sukses, Silahkan Login Dengan User Tersebut";
            }else{
                $psn="Registrasi Gagal, Silahkan Diulangi";
            }
        }else{
            $psn="Password 1 tidak sama dengan konfirmasi password";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <?php
        if(!$psn=="")
        echo"<div>.$psn.</div>";
    ?>
    <!-- form registrasi -->
    <form action="registrasi.php" method="POST">
        <div>
            Nama Lengkap User
            <input type="text" name="txNAMA">
        </div>
        <div>
            Email
            <input type="email" name="txEMAIL">
        </div>
        <div>
            Username
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1">
        </div>
        <div>
            Password<sup>konfirmasi</sup>
            <input type="text" name="txPASS2">
        </div>
    
        <div>
            <button type="submit">Registrasi</button>
        </div>
    </form>


</body>
</html>