<h3>Menambahkan User Baru</h3>
<form action="dtuser.php" method="post"> 
    <input type="hidden" name="act" value="store">
    <div>
        Nama Lengkap
        <input type="text" name="txNAMA">
    </div>
    <div>
        Email
        <input type="text" name="txEMAIL">
    </div>
    <div>
        username
        <input type="text" name="txUSER">
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
        <button type="submit">Buat Data Baru</button>
        <a href="dtuser.php">Batal</a> 
    </div>

</form>