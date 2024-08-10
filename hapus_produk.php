<?php 
    /**
     * NIM : 2257401070
     * NAMA : ALIF DINSAM
     * KELAS : MI22B
     */ 
    session_start();
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM produk WHERE produk. kode_produk = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "Barang Berhasil dihapus";
        header('location: produk.php');

    } else {
        $_SESSION['error'] = "Barang Gagal dihapus";
        header('location: produk.php');
    }
?>