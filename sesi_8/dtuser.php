<?php
    session_start();
    if(!isset($_SESSION["login"])){ #tidak diset
        header("location: login.php"); #diarahan ke form login
    }
    include("konfigurasi.php");
    $cnm= mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Gagal koneksi ke dbms");
    #Melakukan seleksi
    $jdpage="Daftar";
    $pg="user-list.php";

    if(isset($_POST["act"])){
        $act=$_POST["act"];
        switch($act){
            case "store";
                $pass1=$_POST["txPASS1"];
                $pass2=$_POST["txPASS2"];
                if($pass1==$pass2){
                    $nama=$_POST["txNAMA"];
                    $email=$_POST["txEMAIL"];
                    $username=$_POST["txUSER"];
                    $iduser=md5($email);
                    $sql="INSERT INTO tbuser(nama, email, username, passkey, iduser) VALUES('$nama','$email','$username','".md5($pass1)."','".md5($nama)."');";
                    $hasil=mysqli_query($cnm,$sql);
                }
                break;
            case "update";
                $pass1=$_POST["txPASS1"];
                $pass2=$_POST["txPASS2"];
                if($pass1==$pass2){
                    $nama=$_POST["txNAMA"];
                    $email=$_POST["txEMAIL"];
                    $username=$_POST["txUSER"];
                    $iduser=$_POST["iduser"];
                    $sql="UPDATE tbuser SET nama='$nama',email='$email',username='$username',passkey='$pass1',iduser='$iduser' WHERE iduser='$iduser';";
                    $hasil=mysqli_query($cnm,$sql);
                }
                break;
            case "destroy";
                $iduser=$_POST["iduser"];
                $sql="DELETE FROM tbuser WHERE iduser='$iduser';";
                $hasil=mysqli_query($cnm,$sql);
                break;
        }
        echo "<script>window.location.href='dtuser.php';</script>";
    }

    if(isset($_GET["Aksi"])){
        $aksi=$_GET["Aksi"];
        switch($aksi){
            case "new":
                $jdpage="Menambah";
                $pg="user-new.php";
                break;
            case "edit":
                $jdpage="Ubah";
                $pg="user-edit.php";
                break;
            case "del":
                $jdpage="Hapus";
                $pg="user-delete.php";
                break;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=[$jdpage]?> - Data User</title>
</head>
<body>
    <ul>
        <li>DataMahasiswa</li>
        <li>DataMatakuliah</li>
        <li>DataDosen</li>
        <li><a href="dtuser.php"></a>DataUser</li>
        <li>[username] - Logout</li>
    </ul>
    <div>
        <?php 
        include($pg);
        ?>
    </div>
</body>
</html>