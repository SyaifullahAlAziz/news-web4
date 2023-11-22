<?php
include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];


if ($_FILES['gambar_anggota']['name'] == '') {
    //jika foto kosong
    $namafile = $_POST['foto_lama'];
} else {
    // ambil data file
    $namafile = $_FILES['gambar_anggota']['name'];
    $namaSementara = $_FILES['gambar_anggota']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

$ubah = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_anggota='$nama_anggota', jabatan='$jabatan', gambar_anggota='$namafile'
WHERE id_anggota='$id_anggota'");

// var_dump($ubah);
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location.href='../?page=anggota/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='../?page=anggota/ubah'
    </script>";
}
