<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Permukaan Tabung</title>
</head>
<body>
    <h2>Kalkulator Luas Permukaan Tabung</h2>
    <p>menggunakan phi = 3,14</p>
    <form method="post" action="">
        <label for="jari">Jari-jari:</label>
        <input type="number" step="any" id="jari" name="jari" required><br><br>
        
        <label for="tinggi">Tinggi:</label>
        <input type="number" step="any" id="tinggi" name="tinggi" required><br><br>
        
        <input type="submit" value="Hitung" name="hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])){
        $jari_jari = $_POST['jari'];
        $tinggi = $_POST['tinggi'];
        $luas_permukaan1 = 2 * 3.14 * $jari_jari * ($jari_jari + $tinggi);

        echo "<br>Luas Permukaan Silinder dengan jari-jari $jari_jari dan tinggi $tinggi adalah:  $luas_permukaan1 cm^2";
    }
    ?>
</body>
</html>
