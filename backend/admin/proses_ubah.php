<?php
include "../koneksi.php";

$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];


if ($_FILES['foto']['name'] == '') {
    //jika foto kosong
    $namafile = $_POST['foto_lama'];
} else {
    // ambil data file
    $namafile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

$ubah = mysqli_query($koneksi, "UPDATE tb_admin SET username='$username', password='$password', 
nama_lengkap='$nama_lengkap', foto='$namafile', level='$level'
WHERE id_admin='$id_admin'");

// var_dump($ubah);
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location.href='../?page=admin/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='../?page=admin/ubah'
    </script>";
}
