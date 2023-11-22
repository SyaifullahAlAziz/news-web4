<?php
$bulan = date('m');
$tahun = date('Y');

$bulan = [
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
];
?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="" method="post" id="myForm">
                            <div class="row" style="padding-left:30px;">
                                <div class="col-md-3">
                                    <?php $queryStr = isset($_POST['bulan']); ?>

                                    <label for="" style="font-weight:bold;">Bulan</label>
                                    <select name="bulan" id="" class="form-control" style="width:100px" required>
                                        <option value="">Silahkan Pilih Bulan</option>
                                        <?php foreach ($bulan as $bln => $value) : ?>
                                            <option value="<?= $bln ?>" <?= $queryStr == false ? ($bln == date('m') ? 'selected' : '') : ($bln == $_POST['bulan'] ? 'selected' : '')  ?>>
                                                <?= $value ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" style="color:white; font-weight:bold;">Tahun</label>
                                    <select name="tahun" id="" class="form-control" required>
                                        <option value="">Silahkan Pilih Tahun</option>
                                        <?php
                                        $tahun = 2022;
                                        ?>
                                        <?php for ($i = $tahun; $i <= date('Y') + 5; $i++) : ?>
                                            <option value="<?= $i ?>" <?= $queryStr == false ? ($i == date('Y') ? 'selected' : '') : ($i == $_POST['tahun'] ? 'selected' : '')  ?>>
                                                <?= $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark" style="margin-top:32px;">Filter</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button onclick="cetak()" type="button" class="btn btn-light" style="margin-top:32px;"><i class="fa fa-print"></i> Export to Excel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function cetak() {
                                $('#myForm').attr('action', 'berita/excel.php');
                                $('#myForm').attr('target', '_blank');
                                $('#myForm').submit();
                            }
                        </script>
                        <a href="?page=berita/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table-bordered" style="min-width: 845px; color:black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Kategori</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Berita</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                                    JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                                    ORDER BY id_berita DESC");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['judul_kategori'] ?></td>
                                            <td><?= $data['judul_berita'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($data['tanggal_berita'])) ?></td>
                                            <td><?= $data['isi_berita'] ?></td>
                                            <!-- <td><img src="assets/images/<?= $data['gambar_berita'] ?>" width="100px" alt=""></td> -->
                                            <td>
                                                <a href="assets_admin/images/38075-110174-1-PB.pdf">link</a>
                                            <td>

                                            <td>
                                                <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="berita/hapus.php?id_berita=<?= $data['id_berita'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->