<?php
    #menghubungkan file konfigurasi ke koneksidb
    include("konfigurasi.php");
    
    #nama koneksi=cnm
    $cmn = mysqli_connect(DBHOST,DBUSER,DBPASS); #(host,username,password,database,port)
    #mengecek apakah terkoneksi
    if ($cmn) {
        echo "koneksi sukses";
        #"CREATE DATABASE(spasi)"
        $sql1 = "CREATE DATABASE ".DBNAME; #create database sql dengan nama sql=sql1

        $hasil=mysqli_query($cmn,$sql1); 
        if ($hasil) {
            echo "Database".DBNAME."Berhasil Dibuat"; 
        }else {
            echo "Database".DBNAME."Gagal Dibuat";
        }

    }else {
        echo "koneksi gagal".mysqli_connect_error();
    }