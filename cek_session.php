<?php
 /**
     * NIM : 2257401070
     * NAMA : ALIF DINSAM
     * KELAS MI22B
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>