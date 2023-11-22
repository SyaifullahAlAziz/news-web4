<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "<script>
    alert('Harap Login Terlebih Dahulu')
    window.location.href='login/index.php'
    </script>";
}

include "koneksi.php";
include "layout/header.php";
include "layout/sidebar.php";
include "content.php";
include "layout/footer.php";
