<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan Berita.xls");
    ?>

    <center>
        <h3>Laporan Berita</h3>
    </center>


    <!-- <ul>
        <li>NIP : <?= $user->nip ?></li>
        <li>Nama : <?= $user->nama_lengkap ?></li>
        <li>Jabatan : <?= $user->jabatan ?></li>
    </ul> -->

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul Berita</th>
                <th>Tanggal Berita</th>
                <th>Isi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            include "../koneksi.php";
            $query = mysqli_query($koneksi, " SELECT * FROM tb_berita 
            JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
            WHERE MONTH(tanggal_berita)='$_POST[bulan]' AND YEAR(tanggal_berita)='$_POST[tahun]' ");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['judul_kategori'] ?></td>
                    <td><?= $data['judul_berita'] ?></td>
                    <td><?= $data['tanggal_berita'] ?></td>
                    <td><?= $data['isi_berita'] ?></td>
                    <td><img src="../assets_admin/images/<?= $data['gambar_berita'] ?>" width="100px" alt=""></td>
                    <td>
                        <iframe src="../assets_admin/images/<?= $data['gambar_berita'] ?>" frameborder="0"></iframe>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</body>

</html>