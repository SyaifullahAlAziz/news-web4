<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>

<body>
    <center>
        <h3>Laporan Berita <br> <?= $_POST['mulai'] ?> s/d <?= $_POST['akhir'] ?></h3>
    </center>

    <table border="1" style="width:100%; border-collapse:collapse; color:black;">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Kategori</th>
                <th>Judul Berita</th>
                <th>Tanggal Berita</th>
                <th>Isi Berita</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $no = 1;
            if (isset($_POST['mulai']) && $_POST['akhir']) {
                $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                                        WHERE tanggal_berita BETWEEN '$_POST[mulai]' AND '$_POST[akhir]'
                                        ORDER BY id_berita DESC");
            } else {
                echo "<script>
                alert('Harap Pilih Tanggal Terlebih Dahulu')
                window.location.href='?page=laporan/index'
                </script>";
            }
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['judul_kategori'] ?></td>
                    <td><?= $data['judul_berita'] ?></td>
                    <td><?= date('d-m-Y', strtotime($data['tanggal_berita'])) ?></td>
                    <td><?= $data['isi_berita'] ?></td>
                    <td><img src="../assets_admin/images/<?= $data['gambar_berita'] ?>" width="100px" alt=""></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>