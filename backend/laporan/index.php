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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form--group">
                                        <label for="">Tanggal Mulai</label>
                                        <input type="date" name="mulai" class="form-control" value="<?= isset($_POST['filter']) ? $_POST['mulai'] : '' ?>" required>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <div class="form--group">
                                        <label for="">Tanggal Akhir</label>
                                        <input type="date" name="akhir" class="form-control" value="<?= isset($_POST['filter']) ? $_POST['akhir'] : '' ?>" required>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group">
                                        <label for="" style="color:white;">.</label> <br>
                                        <button class="btn btn-primary" type="submit" name="filter">Filter</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" style="color:white;">.</label> <br>
                                        <button onclick="cetak()" type="button" class="btn btn-info btn-block"><i class="fa fa-print"> </i> Cetak Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function cetak() {
                                $('#myForm').attr('action', 'laporan/cetak.php');
                                $('#myForm').attr('target', '_blank');
                                $('#myForm').submit();

                            }
                        </script>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if (isset($_POST['filter'])) {
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                                        WHERE tanggal_berita BETWEEN '$_POST[mulai]' AND '$_POST[akhir]'
                                        ORDER BY id_berita DESC");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                                        ORDER BY id_berita DESC");
                                    }
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['judul_kategori'] ?></td>
                                            <td><?= $data['judul_berita'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($data['tanggal_berita'])) ?></td>
                                            <td><?= $data['isi_berita'] ?></td>
                                            <td><img src="assets/images/<?= $data['gambar_berita'] ?>" width="100px" alt=""></td>
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