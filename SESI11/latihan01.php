<?php
    $data[0]["nama"] = "Komang Adi"; //key: nama value: Komang Adi
    $data[0]["alamat"] = "Jl. Utama 5 Blok A17";
    $data[0]["tgl_lahir"] = "2021-11-28";
    $data[0]["hobi"] = ["bermain musik", "bermain MLBB"];
    $data[0]["no_tlp"] = "085123456789";

    $data[1]["nama"] = "Nyoman Adi";
    $data[1]["alamat"] = "Jl. Utama 5 Blok A20";
    $data[1]["tgl_lahir"] = "2021-03-23";
    $data[1]["hobi"] = "bernyanyi";
    $data[1]["no_tlp"] = "085123456789";

    header("Content-Type: application/json; charset-utf-8");
    echo json_encode($data); //echo tidak bisa menjalankan array maka memerlukan json_code untuk menjelankan
