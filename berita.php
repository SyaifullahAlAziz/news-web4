<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                    if (isset($_POST['search'])) {
                        $keyword = $_POST['keyword'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita 
                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                        WHERE judul_berita LIKE '%$keyword%'");
                    } elseif (isset($_GET['judul_kategori'])) {
                        $judul_kategori = $_GET['judul_kategori'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                        WHERE judul_kategori='$judul_kategori'");
                    } else {
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita
                        JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
                        ORDER BY id_berita DESC");
                    }
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="backend/assets_admin/images/<?= $data['gambar_berita'] ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="?page=detail_berita&slug=<?= $data['slug'] ?>">
                                    <h2><?= $data['judul_berita'] ?></h2>
                                </a>
                                <p><?= substr($data['isi_berita'], 0, 100) ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?= $data['judul_kategori'] ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    <?php } ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="keyword" placeholder='Cari Berita...' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Berita...'">
                                    <div class="input-group-append">
                                        <button class="btns" type="submit" name="search"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <?php
                            //Menampilkan Data Kategori dan Hitung Jumlah Kategori
                            $query = mysqli_query($koneksi, "SELECT *, (SELECT COUNT(*) FROM tb_berita 
                                WHERE id_kategori=tb_kategori.id_kategori) 
                                AS jumlah_kategori FROM tb_kategori");

                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?= $data['judul_kategori'] ?></p>
                                        <p>(<?= $data['jumlah_kategori'] ?>)</p>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 3");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="media post_item">
                                <img src="backend/assets_admin/images/<?= $data['gambar_berita'] ?>" width="100px" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?= $data['judul_berita'] ?>...</h3>
                                    </a>
                                    <p><?= date('M d, Y', strtotime($data['tanggal_berita'])) ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->