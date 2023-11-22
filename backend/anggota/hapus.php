<?php

include "../koneksi.php";

$id = $_GET['id_anggota'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id_anggota='$id'");

if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location.href='../?page=anggota/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    window.location.href='../?page=anggota/index'
    </script>";
}
