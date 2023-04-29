<?php
//mengkoneksikan ke database
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASS = "";
$DBPORT = "3306";
$DBNAME = "dbmahasiswa";
$koneksi = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME, $DBPORT);

$err = "";
$username = "";

if(isset($_POST['txUSER'])){
    $username = $_POST['txUSER'];
    $passkey = $_POST['txPASS1'];

    if($username == '' or $passkey == ''){
        $err .= "<li>Silahkan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "SELECT passkey FROM tbuser WHERE username='$username'";
        $sql = mysqli_query($koneksi,$sql1);
        $r1 = mysqli_fetch_array($sql);

        if($r1['passkey']== md5($passkey)){
            $err="Login Berhasil";
        }else{
            $err="Login Gagal";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php if($err){ ?>
        <div id="login-alert" class="alert alert-danger">
            <ul><?php echo $err ?></ul>
        </div>
    <?php } ?>
    <form id="loginpage" class="form-horizontal" action="" method="post" role="form">
    <div>
        User Name
        <input type="text" name="txUSER">
    </div>
    <div>
        Password 
        <input type="password" name="txPASS1">
    </div>
    
    <div>
        <button type="submit">Login</button>
    </div>
</body>
</html>

