<?php
$id = $_GET['id_admin'];
$ubah = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$id'");
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
                        <h4 class="card-title">Form Ubah Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="admin/proses_ubah.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">

                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?= $data['username'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?= $data['password'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $data['nama_lengkap'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Foto</label> <br>
                                    <img src="assets/images/<?= $data['foto'] ?>" width="100px" alt="">
                                    <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">level</label>
                                    <select name="level" id="" class="form-control" required>
                                        <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        <option value="author" <?= $data['level'] == 'author' ? 'selected' : '' ?>>Author</option>
                                    </select>
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