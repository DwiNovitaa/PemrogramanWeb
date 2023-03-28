<?php
    $buah = array("salak", "duku", "rambutan", "apel");

    print_r($buah); //untuk menampilkan pola array

echo "<hr>";

    //perulangan foreach
    foreach($buah as $nval){
        echo "Buah ".$nval. "<br>";
    }

    //menggunakan list
    echo "<hr>";
    echo "<ol>";
    foreach($buah as $nval){
        echo "<li>".$nval. "</li>";
    }
    echo "</ol>";

