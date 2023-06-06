<h3>Daftar User</h3>
<table>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Username</th>
        <th><a href="dtuser.php?aksi=new">Data Baru</a></th> 
    </tr>
</table>
<?php
    $sql="SELECT tu.nama, tu.email, tu.username, tu.iduser FROM tbuser tu order by tu.nama DESC;";
    $hasil=mysqli_query($cnm,$sql);
    while($h=mysqli_fetch_assoc($hasil)){
        echo "<tr>
            <th>$cx</th>
            <th>".$h["nama"]."</th>
            <th>".$h["email"]."</th>
            <th>".$h["username"]."</th>
            <th><a href=\"dtuser.php?aksi=edit&p1=".$h["iduser"]."\">Edit</a><a href=\"dtuser.php?aksi=del&p1=".$h["iduser"]."\">Hapus</a></th> 
        </tr>";
        $cx++;
    }
?>