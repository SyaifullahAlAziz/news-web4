<?php
include "../koneksi.php";

$id_kategori = $_POST['id_kategori'];
$id_berita = $_POST['id_berita'];
$judul_berita = $_POST['judul_berita'];
$tanggal_berita = $_POST['tanggal_berita'];
$isi_berita = $_POST['isi_berita'];


if ($_FILES['gambar_berita']['name'] == '') {
    //jika foto kosong
    $namafile = $_POST['foto_lama'];
} else {
    // ambil data file
    $namafile = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

$ubah = mysqli_query($koneksi, "UPDATE tb_berita SET id_kategori='$id_kategori', judul_berita='$judul_berita', tanggal_berita='$tanggal_berita', isi_berita='$isi_berita', gambar_berita='$namafile'
WHERE id_berita='$id_berita'");

// var_dump($ubah);
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location.href='../?page=berita/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='../?page=berita/ubah'
    </script>";
}
