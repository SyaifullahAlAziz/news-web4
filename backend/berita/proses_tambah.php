<?php
include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tanggal_berita = $_POST['tanggal_berita'];
$isi_berita = $_POST['isi_berita'];

$slug = str_replace('+', '-', urlencode($judul_berita));

// ambil data file
$namafile = $_FILES['gambar_berita']['name'];
$namaSementara = $_FILES['gambar_berita']['tmp_name'];
// pindahkan file
$terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_berita (id_kategori,judul_berita,slug,tanggal_berita,isi_berita,gambar_berita) 
VALUES('$id_kategori', '$judul_berita', '$slug', '$tanggal_berita', '$isi_berita', '$namafile')");
// var_dump($_POST);
// var_dump($tambah);
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location.href='../?page=berita/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='../?page=berita/tambah'
    </script>";
}
