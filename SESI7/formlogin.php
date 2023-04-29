<?php
    include("konfigurasi.php");

    $psn = "";
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];
        //echo "DEBUG: username: ".$user;  untuk menampilkan username dan password yang diinput pada halaman login
        //echo " Password: ".$pwd;

        $sql="SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';";
        $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Koneksi ke dbms");
        $hasil = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hasil); //menghitung jumlah data
        //echo "DEBUG: jdata=>".$jdata;
        if($jdata>0){
            $h = mysqli_fetch_assoc($hasil); //untuk menguraikan data-data yg didapatkan dari hasil
            //echo "DEBUG:<br>Email: " . $h["email"];     //dapat diubah sesuai kolom yang ada pada database
            if(md5($pwd) == $h["passkey"]){
                //echo "DEBUG: password sama";
                $psn = "Login Berhasil";
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
    <title>Form Login</title>
</head>
<body>
    
    <div><?=$psn;?></div>
     
    <form method="POST" action="formlogin.php">
    <h3>Form Login</h3>
    <div>
        User Name
        <input type="text" name="txUSER">
    </div>
    <div>
        Password 
        <input type="password" name="txPASS">
    </div>
    
    <div>
        <button type="submit">Login</button>
    </div>
</body>
</html>