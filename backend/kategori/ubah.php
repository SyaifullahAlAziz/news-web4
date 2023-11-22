<?php
$id = $_GET['id_kategori'];
$ubah = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id'");
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
                        <h4 class="card-title">Form Ubah Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="kategori/proses_ubah.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">

                                <div class="form-group">
                                    <label for="">Judul Kategori</label>
                                    <input type="text" name="judul_kategori" class="form-control" value="<?= $data['judul_kategori'] ?>" required>
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