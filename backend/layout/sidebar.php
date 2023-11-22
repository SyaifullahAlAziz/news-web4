<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <?php if ($_SESSION['level'] == 'admin') : ?>
                <li><a href="index.php" aria-expanded="false"><i class="fa fa-home"></i><span class="nav-text">Home</span></a></li>
                <li><a href="?page=admin/index" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-text">Admin</span></a></li>
                <li><a href="?page=anggota/index" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-text">Anggota</span></a></li>
                <li><a href="?page=berita/index" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="nav-text">Berita</span></a></li>
                <li><a href="?page=kategori/index" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="nav-text">Kategori</span></a></li>
                <li><a href="?page=laporan/index" aria-expanded="false"><i class="fa fa-print"></i><span class="nav-text">Laporan</span></a></li>
            <?php else : ?>
                <li><a href="index.php" aria-expanded="false"><i class="fa fa-home"></i><span class="nav-text">Home</span></a></li>
                <li><a href="?page=berita/index" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="nav-text">Berita</span></a></li>
                <li><a href="?page=kategori/index" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="nav-text">Kategori</span></a></li>
            <?php endif; ?>
        </ul>
    </div>


</div>
<!--**********************************
            Sidebar end
        ***********************************-->