<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Data Berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="berita/proses_tambah.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Judul Kategori</label>
                                    <select name="id_kategori" id="" class="form-control" required>
                                        <option value="">Silahkan Pilih Judul Kategori</option>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                        while ($kategori = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $kategori['id_kategori'] ?>" <?= $kategori['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
                                                <?= $kategori['judul_kategori'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                    <select name="" id="">
                                        <option value="">Pilih</option>

                                        <option value="">1</option>
                                        `
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Judul Berita</label>
                                    <input type="text" name="judul_berita" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal_berita" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Isi Berita</label>
                                    <textarea name="isi_berita" id="editor" cols="30" rows="3" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar Berita</label>
                                    <input type="file" name="gambar_berita" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
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