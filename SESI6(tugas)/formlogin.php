<?php
    include_once("konfigurasi.php");
    $psn = "";
    if(isset($_POST["txUSER"])){
        $username=$_POST["txUSER"];
        $password=$_POST["txPASS1"];
        $sql1="SELECT passkey FROM tbuser WHERE username='$username';";
        $cnm= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke dbms");
        $hasil= mysqli_query($cnm, $sql1);
        $sql= mysqli_fetch_array($hasil);
            if($sql['passkey']== md5($password)){
                $psn="Login Berhasil";
            }else{
                $psn="Kata sandi atau Password salah, silahkan masukkan username dan password ulang";
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
    if(!$psn==""){
        echo "<div>".$psn."</div>";
    }
?>
<div>
    User Name
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