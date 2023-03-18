<?php
//area Script PHP
    $pg = 1;
    if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
    }
    switch($pg){
        case 1:
            $konten = "<h1>Page 1</h1>";
            $judulpage = "Page 1";
            break;
        case 2:
            $konten = "<h1>Page 2</h1>";
            $judulpage = "Page 2";
            break;
        case 3:
            $konten = "<h1>Page 3</h1>";
            $judulpage = "Page 3";
            break;
        default:
        $konten = "<h1>Page error</h1>";
        $judulpage = "Unknown Page";
            break;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<ul class="nav">
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="?pg=1">Page 1</a></li>
    <li class="nav-item"><a class="nav-link" aria-current="page href="?pg=2">Page 2</a></li>
    <li class="nav-item"><a class="nav-link" aria-current="page href="?pg=3">Page 3</a></li>
</ul>

    <?=$konten?>
</body>
</html>