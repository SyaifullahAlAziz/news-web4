<?php

include "../koneksi.php";

$id = $_GET['id_kategori'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='$id'");

if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location.href='../?page=kategori/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    window.location.href='../?page=kategori/index'
    </script>";
}
