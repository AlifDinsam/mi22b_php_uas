<?php 
    /**
     * NIM : 2257401070
     * NAMA : ALIF DINSAM
     * KELAS : MI22B
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_alifdinsam";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>