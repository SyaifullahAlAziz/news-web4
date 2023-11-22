<?php
include "../koneksi.php";

$judul_kategori = $_POST['judul_kategori'];

$tambah = mysqli_query($koneksi, "INSERT INTO tb_kategori (judul_kategori) 
VALUES('$judul_kategori')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location.href='../?page=kategori/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='../?page=kategori/tambah'
    </script>";
}
