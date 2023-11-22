<?php
include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$judul_kategori = $_POST['judul_kategori'];

$ubah = mysqli_query($koneksi, "UPDATE tb_kategori SET judul_kategori='$judul_kategori' WHERE id_kategori='$id_kategori'");

// var_dump($ubah);
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location.href='../?page=kategori/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='../?page=kategori/ubah'
    </script>";
}
