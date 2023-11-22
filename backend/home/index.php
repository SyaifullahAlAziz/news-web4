<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <?php
            $query = mysqli_query($koneksi, "SELECT COUNT(id_admin) AS jumlah_admin FROM tb_admin");
            $admin = mysqli_fetch_array($query);

            $query2 = mysqli_query($koneksi, "SELECT COUNT(id_anggota) AS jumlah_anggota FROM tb_anggota");
            $anggota = mysqli_fetch_array($query2);

            $query3 = mysqli_query($koneksi, "SELECT COUNT(id_berita) AS jumlah_berita FROM tb_berita");
            $berita = mysqli_fetch_array($query3);

            $query4 = mysqli_query($koneksi, "SELECT COUNT(id_kategori) AS jumlah_kategori FROM tb_kategori");
            $kategori = mysqli_fetch_array($query4);

            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href="?page=admin/index">
                                <div class="stat-text">Admin </div>
                            </a>
                            <div class="stat-digit"> <?= $admin['jumlah_admin'] ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href="?page=anggota/index">
                                <div class="stat-text">Anggota</div>
                            </a>
                            <div class="stat-digit"><?= $anggota['jumlah_anggota'] ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href="?page=berita/index">
                                <div class="stat-text">Berita</div>
                            </a>
                            <div class="stat-digit"> <?= $berita['jumlah_berita'] ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href="?page=kategori/index">
                                <div class="stat-text">Kategori</div>
                            </a>
                            <div class="stat-digit"><?= $kategori['jumlah_kategori'] ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->