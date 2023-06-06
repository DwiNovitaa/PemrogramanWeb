<h3>Hapus Data User</h3>
<?php
    $id=$_GET["p1"];
    $sql="SELECT tu.nama,tu.email,tu.username,tu.iduser FROM tbuser tu WHERE tu.iduser='".$iduser."';";
    $hasil=mysqli_query($cnm,$sql);
    if(mysqli_num_row($hasil)>0){
        $h=mysqli_fetch_assoc($hasil);
?>
<h3>Menghapus User <?=$h["username"]?></h3>
<form action="dtuser.php" method="post"> 
    <input type="hidden" name="act" value="destroy">
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
        <button type="submit">Hapus Data</button>
        <a href="dtuser.php">Batal</a> 
    </div>
</form>
<?php
    }else{
        echo "<script>window.location.href='dtuser.php';</script>";
    }
?>