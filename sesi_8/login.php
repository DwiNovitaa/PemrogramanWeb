<?php
    include_once("konfigurasi.php");
    $psn="";
    if(isset($_POST["txUSER"])){
        $user=$_POST["txUSER"];
        $pwd=$_POST["txPASS"];
        #debug untuk melihat username dan password yang dimasukkan
        //echo "DEBUG: username".$user;
        //echo " PASSWORD".$pwd;
        $sql="SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';"; #tu adalah alias tbuser
        $cnm= mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Gagal koneksi ke dbms");
        $hasil=mysqli_query($cnm,$sql);
        $jdata=mysqli_num_rows($hasil); 
        //echo " DEBUG: jdata=>".$jdata; untuk jumlah data
        if($jdata>0){
            $h=mysqli_fetch_assoc($hasil); #menguraikan data yang didapatkan dari hasil
            //echo "DEBUG:<br>Nama: ".$h["email"]; #sesuai nama kolom pada databse, yaitu "nama"
            if(md5($pwd)==$h["passkey"]){
                //echo"DEBUG: password sama";
                $_SESSION["Login"]=$h["iduser"];
                $_SESSION["user"]=$h["username"];
                echo "<script>window.location.href='dtuser.php';</script>";
            }else{
                $psn = "Akses Ditolak";
            }
        }else{
            $psn = "Akses Ditolak";
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
<div><?=$psn;?></div>
<form action="login.php" method="POST">
        <h3>From Login</h3>
        <div>
            Username
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="txPASS">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>