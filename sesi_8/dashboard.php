<?php
    session_start();
    if(!isset($_SESSION["login"])){ #tidak diset
        header("location: login.php"); #diarahan ke form login
    }
    
    $konten="";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        echo $konten
        ?>
    </div>
</body>
</html>