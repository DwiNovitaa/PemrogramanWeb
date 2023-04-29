<?php
    session_start();
//(!) yang berada didepan isset berarti nonisset
    if(!isset($_SESSION["login"])){
        header("location: formlogin.php");
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
        <li>Data Mahasiswa</li>
        <li>Data Matakuliah</li>
        <li>Data Dosen</li>
        <li>Data User</li>
        <li>[username] - logout</li>
    </ul>

    <div>
        <?php
        echo $konten;
        ?>
    </div>

</body>
</html>