<?php
     /**
     * NIM : 2257401070
     * NAMA : ALIF DINSAM
     * KELAS : MI22B
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>