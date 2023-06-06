<h3>Menambahkan User Baru</h3>
<?php
    $id=$_GET["p1"];
    $sql="SELECT tu.nama,tu.email,tu.username,tu.iduser FROM tbuser tu WHERE tu.iduser='".$iduser."';";
    $hasil=mysqli_query($cnm,$sql);
    if(mysqli_num_row($hasil)>0){
        $h=mysqli_fetch_assoc($hasil);
?>
<h3>Menambahkan User <?=$h["username"]?></h3>
<form action="dtuser.php" method="post"> 
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="iduser" value="<?=$h=["iduser"];?>">
    <div>
        Nama Lengkap
        <input type="text" name="txNAMA" value="<?=$h=["nama"];?>">
    </div>
    <div>
        Email
        <input type="text" name="txEMAIL" value="<?=$h=["email"];?>">
    </div>
    <div>
        username
        <input type="text" name="txUSER"  value="<?=$h=["username"];?>">
    </div>
    <div>
        Password
        <input type="password" name="txPASS1">
    </div>
    <div>
        verifikasi Password
        <input type="password" name="txPASS2">
    </div>
    <div>
        <button type="submit">Ubah Data</button>
        <a href="dtuser.php">Batal</a> 
    </div>
</form>
<?php
    }else{
        echo "<script>window.location.href='dtuser.php';</script>";
    }
?>