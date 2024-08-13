<?php
     /**
     * NIM : 2257401030
     * NAMA : dian candra
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>