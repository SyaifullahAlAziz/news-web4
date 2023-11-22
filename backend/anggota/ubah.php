<?php
$id = $_GET['id_anggota'];
$ubah = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id'");
$data = mysqli_fetch_array($ubah);
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
                        <h4 class="card-title">Form Ubah Data Anggota</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="anggota/proses_ubah.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_anggota" value="<?= $data['id_anggota'] ?>">

                                <div class="form-group">
                                    <label for="">Nama Anggota</label>
                                    <input type="text" name="nama_anggota" class="form-control" value="<?= $data['nama_anggota'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="<?= $data['jabatan'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar anggota</label> <br>
                                    <img src="assets/images/<?= $data['gambar_anggota'] ?>" width="100px" alt="">
                                    <input type="hidden" name="foto_lama" value="<?= $data['gambar_anggota'] ?>">
                                    <input type="file" name="gambar_anggota" class="form-control">
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