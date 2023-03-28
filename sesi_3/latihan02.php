<?php
//perulangan dengan while
    $nawal=0;
    $nakhir=10;

    //format while (kondisi perulangan akan terus berjalan hingga tidak memenuhi kondisi) jika tidak diisi $i++

    //pengecekan diawal
    while ($nawal < $nakhir) {
        echo "Perulangan ke-".$nawal. "<br>";
        $nawal++; //diberi ++ agar nilai dari nawal ditambah 1
    }

    echo "<hr>";

    //pengecekan diakhir, pasti akan ada 1 kali eksekusi
    $nawal=0;

    do{
        echo "Perulangan ke-".$nawal. "<br>";
        $nawal++;
    }while($nawal < $nakhir); //perulangan akan dilakukan apabila bernilai false