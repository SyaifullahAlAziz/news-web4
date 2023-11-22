<?php
include "../koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];

// ambil data file
$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
// pindahkan file
$terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_admin (username,password,nama_lengkap,foto,level) 
VALUES('$username', '$password', '$nama_lengkap', '$namafile', '$level')");
// var_dump($_POST);
// var_dump($tambah);
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location.href='../?page=admin/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='../?page=admin/tambah'
    </script>";
}
