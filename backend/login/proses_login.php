<?php

include "../koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek data form ke database
    $admin = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");


    if (mysqli_num_rows($admin) > 0) {
        //pecah data user ke array object
        $data = mysqli_fetch_assoc($admin);

        //simpan datanya ke session
        session_start();
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];
        $_SESSION['level'] = $data['level'];

        echo "<script>
    alert('Login Berhasil')
    window.location.href='../index.php'
    </script>";
    } else {
        echo "<script>
    alert('Username Atau Password Salah')
    window.location.href='index.php'
    </script>";
    }
}
