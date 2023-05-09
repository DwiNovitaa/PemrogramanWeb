<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <button onclick="tulis()">Tampilkan Text</button>
    
    <div>
    <form action="javascript04.php" method="post"><hr>
        <div>
            Nama Lengkap
            <input type="text" name="txNAMA" id="txNAMA">
        </div>
        <button type="button" id="check" onclick="CheckNama()">Check Nama</button>
    </form>
    </div>
    
    <script src="javascript04.js"></script>
</body>
</html>