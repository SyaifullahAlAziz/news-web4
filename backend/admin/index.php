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
                        <h4 class="card-title">Basic Datatable</h4>
                        <a href="?page=admin/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table-bordered" style="min-width: 845px; color:black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Lengkap</th>
                                        <th>Foto</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_admin
                                    ORDER BY id_admin DESC");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['username'] ?></td>
                                            <td><?= $data['password'] ?></td>
                                            <td><?= $data['nama_lengkap'] ?></td>
                                            <td><img src="assets/images/<?= $data['foto'] ?>" width="100px" alt=""></td>
                                            <td>
                                                <?php if ($data['level'] == 'admin') : ?>
                                                    <span class="badge bg-primary"><?= $data['level'] ?></span>
                                                <?php else : ?>
                                                    <span class="badge bg-success"><?= $data['level'] ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="?page=admin/ubah&id_admin=<?= $data['id_admin'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="admin/hapus.php?id_admin=<?= $data['id_admin'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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