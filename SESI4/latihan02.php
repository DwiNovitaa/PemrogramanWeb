<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body> <!-- data tidak akan dimunculkan pada address bar, tetapi lewat documentnya sendiri -->
<?php
     if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        if ($user==""){
            echo"<div style='color:red; padding:5px;'>User Name atau Password Salah</div>";
        }
    }
?>
    <form action="latihan02.php" method="POST"> <!-- menggunakan post maka pada address bar tidak akan kelihatan username dan passnya -->
        <div>
        User name
        <input type="text" id="txUSER" name="txUSER"> <!-- required untuk validasi data untuk html -->
        </div>

        <div>
        Password
        <input type="password" id="txPASSKEY" name="txPASSKEY">
        </div>

        <div>
        <button type="submit">Login</button>
        <a href="daftar.php">Daftar</button>
        </div>
    </form>
</body>
</html>