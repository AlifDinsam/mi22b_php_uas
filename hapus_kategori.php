<?php 
    /**
     * NIM : 2257401070
     * NAMA : ALIF DINSAM
     * KELAS : MI22B
     */ 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM kategori WHERE kategori_brg = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');

    } else {
        echo "Gagal Hapus Barang";
    }
?>
