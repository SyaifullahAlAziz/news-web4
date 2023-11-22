<?php
include "../koneksi.php";

$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];

// ambil data file
$namafile = $_FILES['gambar_anggota']['name'];
$namaSementara = $_FILES['gambar_anggota']['tmp_name'];
// pindahkan file
$terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_anggota (nama_anggota,jabatan,gambar_anggota) 
VALUES('$nama_anggota', '$jabatan', '$namafile')");
// var_dump($_POST);
// var_dump($tambah);
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location.href='../?page=anggota/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='../?page=anggota/tambah'
    </script>";
}
