<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan JavaScript</title>
</head>
<body>

    <script>
        document.write("Belajar <strong>Script</strong> JavaScript<br>");  //SAMA SEPERTI ECHO PADA PHP
        document.write("<center><b>SEA GAMES MLBB Ladies</b></center>");
        document.write('<marquee><i><b>ALTER EGO</b></i></marquee><br>');

        //mendefinisikan variabel ada 2: let(private) var(global)
        var bil1 = 5;
        var bil2 = 7;
        var hasil = bil1+bil2; //(+) sebagai proses aritmatika
        document.write("Hasil Penjumlahan dari "+bil1+" dengan "+bil2+" adalah "+hasil); //(+) untuk menyambungkan atau menggabungkan variabel

        //Perulangan
        for(let i=0; i<10; i++){
            document.write("<br>Perulangan ke-"+i);
        }

    </script>

</body>
</html>