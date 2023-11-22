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
                        <h4 class="card-title">Form Tambah Data Anggota</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="anggota/proses_tambah.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Nama Anggota</label>
                                    <input type="text" name="nama_anggota" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar Anggota</label>
                                    <input type="file" name="gambar_anggota" class="form-control" required>
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