<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <?php
    if(isset($_GET["txUSER"])){
        $user = $_GET["txUSER"];
        if ($user==""){
            echo"<div style='color:red; padding:5px;'>User Name Belum diisikan</div>";
        }
    }
        
    ?>
    <form action="latihan01.php" method="GET"> <!-- get untuk merequest, data yg dimasukkan ke form akan dimunculkan di address bar -->
        <div>
        User name
        <input type="text" id="txUSER" name="txUSER">
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