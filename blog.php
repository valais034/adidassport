<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$posts= get_posts(6);
$post_cats = get_post_cats();
$number_of_posts = mysqli_query($db, "SELECT * FROM posts");
$sidebar_posts = get_posts(3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kagont</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fav icon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- preloader start here -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- preloader ending here -->


	<!-- ==========Header Section Starts Here========== -->
	<!-- ==========Header Section Ends Here========== -->


	<!-- Page Header Section Start Here -->
	<section class="page-header padding-tb">
		<div class="overlay"></div>
		<div class="container">
			<div class="page-header-content-area">
				<h4 class="ph-title">بلاگ</h4>
				<ul class="lab-ul">
					<li><a href="index.php">خانه</a></li>
					<li><a class="active">بلاگ</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Page Header Section Ending Here -->

<!--    <div class="shop-page padding-tb">-->
<!--        <div class="container">-->
<!--            <div class="section-wrapper">-->
<!--                <div class="row justify-content-center">-->
<!--                    <div class="col-lg-9 col-12">-->
<!--                        <article>-->
<!--                            <div class="shop-title d-flex flex-wrap justify-content-between">-->
<!--                                <p>نمایش --><?php //echo mysqli_num_rows($posts) ?><!-- از --><?php //echo mysqli_num_rows($posts) ?><!-- محصول</p>-->
<!--                                <div class="product-view-mode">-->
<!--                                    <a class="active" data-target="grids"><i class="fas fa-th"></i></a>-->
<!--                                    <a data-target="lists"><i class="fas fa-th-list"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="shop-product-wrap grids row justify-content-center">-->
<!--                                --><?php //while ($post = mysqli_fetch_array($posts)) { ?>
<!---->
<!--                                    <div class="col-lg-4 col-sm-6 col-12">-->
<!---->
<!--                                        <div class="product-item">-->
<!---->
<!---->
<!--                                            <div class="product-thumb">-->
<!--                                                <a href="product.php?product-id=--><?php //echo $post['id'] ?><!--"><img src="assets/images/product/--><?php //echo $post['post_image'] ?><!--" alt=""></a>-->
<!--                                                <div class="product-action-link">-->
<!--                                                    <a href="assets/images/product/--><?php //echo $post['post_image'] ?><!--" data-rel="lightcase"><i-->
<!--                                                                class="icofont-eye"></i></a>-->
<!--                                                    <a href="#"><i class="icofont-heart-alt"></i></a>-->
<!--                                                    <a href="product.php?product-id=--><?php //echo $post['id'] ?><!--"><i class="icofont-cart-alt"></i></a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="product-content">-->
<!--                                                <h6><a href="product.php?product-id=--><?php //echo $post['id'] ?><!--">--><?php //echo $post['post_title'] ?><!--</a></h6>-->
<!--                                                <div class="rating mb-1">-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                </div>-->
<!--                                                <span></span>-->
<!--                                            </div>-->
<!---->
<!---->
<!--                                        </div>-->
<!--                                        <div class="product-list-item">-->
<!--                                            <div class="product-thumb">-->
<!--                                                <img src="assets/images/product/--><?php //echo $post['post_image'] ?><!--" alt="shope">-->
<!--                                                <div class="product-action-link">-->
<!--                                                    <a href="assets/images/product/--><?php //echo $post['post_image'] ?><!--" data-rel="lightcase"><i-->
<!--                                                                class="icofont-eye"></i></a>-->
<!--                                                    <a href="#"><i class="icofont-heart-alt"></i></a>-->
<!--                                                    <a href="product.php?product-id=--><?php //echo $post['id'] ?><!--"><i class="icofont-cart-alt"></i></a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="product-content">-->
<!--                                                <h6><a href="product.php?product-id=--><?php //echo $post['id'] ?><!--">--><?php //echo $post['post_title'] ?><!--</a></h6>-->
<!--                                                <div class="rating mb-1">-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                    <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                </div>-->
<!--                                                <span> تومان</span>-->
<!--                                                <p>--><?php //echo $post['post_desc'] ?><!--</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //} ?>
<!--                            </div>-->
<!---->
<!--                            <div class="paginations">-->
<!--                                <ul class="lab-ul d-flex flex-wrap justify-content-center">-->
<!--                                    <li>-->
<!--                                        <a href="#"><i class="icofont-rounded-double-left"></i></a>-->
<!--                                    </li>-->
<!--                                    <li class="d-none d-sm-block">-->
<!--                                        <a href="#">1</a>-->
<!--                                    </li>-->
<!--                                    <li class="d-none d-sm-block">-->
<!--                                        <a href="#">2</a>-->
<!--                                    </li>-->
<!--                                    <li class="d-none d-sm-block">-->
<!--                                        <a class="dot">...</a>-->
<!--                                    </li>-->
<!--                                    <li class="d-none d-sm-block">-->
<!--                                        <a href="#">5</a>-->
<!--                                    </li>-->
<!--                                    <li class="d-none d-sm-block">-->
<!--                                        <a href="#"><i class="icofont-rounded-double-right"></i></a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </article>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-7 col-12">-->
<!--                        <aside>-->
<!--                            <div class="widget widget-search primary-bg px-3">-->
<!--                                <div class="widget-header">-->
<!--                                    <h5>Search keywords</h5>-->
<!--                                </div>-->
<!--                                <form action="/" class="search-wrapper">-->
<!--                                    <input type="text" name="s" placeholder="Your Search...">-->
<!--                                    <button type="submit"><i class="icofont-search-2"></i></button>-->
<!--                                </form>-->
<!--                            </div>-->
<!---->
<!--                            <div class="widget widget-category primary-bg px-3">-->
<!--                                <div class="widget-header">-->
<!--                                    <h5>All Categories</h5>-->
<!--                                </div>-->
<!--                                <div class="widget-wrapper">-->
<!--                                    <ul class="lab-ul shop-menu">-->
<!--                                        <li>-->
<!--                                            <a href="#0">Apple</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Apple 1</a></li>-->
<!--                                                <li><a href="#">Apple 2</a></li>-->
<!--                                                <li><a href="#">Apple 3</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Orange</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Orange 1</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Tomato</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Tomato 1</a></li>-->
<!--                                                <li><a href="#">Tomato 2</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Honey</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Honey 1</a></li>-->
<!--                                                <li><a href="#">Honey 2</a></li>-->
<!--                                                <li><a href="#">Honey 3</a></li>-->
<!--                                                <li><a href="#">Honey 4</a></li>-->
<!--                                                <li><a href="#">Honey 5</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Banana</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Banana 1</a></li>-->
<!--                                                <li><a href="#">Banana 2</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Blueberry</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Blueberry 1</a></li>-->
<!--                                                <li><a href="#">Blueberry 2</a></li>-->
<!--                                                <li><a href="#">Blueberry 3</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#0">Lettuce</a>-->
<!--                                            <ul class="lab-ul shop-submenu">-->
<!--                                                <li><a href="#">Lettuce 1</a></li>-->
<!--                                                <li><a href="#">Lettuce 2</a></li>-->
<!--                                                <li><a href="#">Lettuce 3</a></li>-->
<!--                                                <li><a href="#">Lettuce 4</a></li>-->
<!--                                                <li><a href="#">Lettuce 5</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="widget widget-post primary-bg px-3">-->
<!--                                <div class="widget-header">-->
<!--                                    <h5>Latests Products</h5>-->
<!--                                </div>-->
<!--                                <ul class="lab-ul widget-wrapper">-->
<!--                                    <li class="d-flex flex-wrap justify-content-between">-->
<!--                                        <div class="post-thumb">-->
<!--                                            <a href="blog-single.html"><img src="assets/images/shop/02.jpg"-->
<!--                                                                            alt="product"></a>-->
<!--                                        </div>-->
<!--                                        <div class="post-content ps-3">-->
<!--                                            <a href="blog-single.html">-->
<!--                                                <h6>Organic Orange</h6>-->
<!--                                            </a>-->
<!--                                            <div class="rating">-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                            </div>-->
<!--                                            <h6>$59.9</h6>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="d-flex flex-wrap justify-content-between">-->
<!--                                        <div class="post-thumb">-->
<!--                                            <a href="blog-single.html"><img src="assets/images/shop/03.jpg"-->
<!--                                                                            alt="product"></a>-->
<!--                                        </div>-->
<!--                                        <div class="post-content ps-3">-->
<!--                                            <a href="blog-single.html">-->
<!--                                                <h6>Organic Orange</h6>-->
<!--                                            </a>-->
<!--                                            <div class="rating">-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                            </div>-->
<!--                                            <h6>$59.9</h6>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="d-flex flex-wrap justify-content-between">-->
<!--                                        <div class="post-thumb">-->
<!--                                            <a href="blog-single.html"><img src="assets/images/shop/04.jpg"-->
<!--                                                                            alt="product"></a>-->
<!--                                        </div>-->
<!--                                        <div class="post-content ps-3">-->
<!--                                            <a href="blog-single.html">-->
<!--                                                <h6>Organic Orange</h6>-->
<!--                                            </a>-->
<!--                                            <div class="rating">-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                            </div>-->
<!--                                            <h6>$59.9</h6>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li class="d-flex flex-wrap justify-content-between">-->
<!--                                        <div class="post-thumb">-->
<!--                                            <a href="blog-single.html"><img src="assets/images/shop/05.jpg"-->
<!--                                                                            alt="product"></a>-->
<!--                                        </div>-->
<!--                                        <div class="post-content ps-3">-->
<!--                                            <a href="blog-single.html">-->
<!--                                                <h6>Organic Orange</h6>-->
<!--                                            </a>-->
<!--                                            <div class="rating">-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                                <span><a href="#"><i class="far fa-star"></i></a></span>-->
<!--                                            </div>-->
<!--                                            <h6>$59.9</h6>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </aside>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Blog Section Start Here -->
	<div class="blog-section blog-page padding-tb aside-bg">
		<div class="container">

            <div class="section-wrapper">
				<div class="row justify-content-center">

					<div class="col-lg-8 col-12">

                        <article>
                            <?php while ($post = mysqli_fetch_array($posts)) { ?>
                            <div class="post-item-2">
								<div class="post-inner">
									<div class="post-thumb rounded">
										<a href="post.php">
                                            <a href="post.php?post-id=<?php echo $post['id'] ?>"><img src="assets/images/post/<?php echo $post['post_image'] ?>" alt=""></a>
										</a>
									</div>
									<div class="post-content">
										<a href="post.php">
											<h3><a href="post.php?post-id=<?php echo $post['id'] ?>"><?php echo $post['post_title'] ?></a></h3>
										</a>
										<ul class="lab-ul post-date">
											<li><span><i class="icofont-ui-calendar"></i> October 9, 2019 10:59 am
												</span></li>
											<li><span><i class="icofont-user"></i><a href="#">Robot Smith</a></span>
											</li>
											<li><span><i class="icofont-speech-comments"></i><a href="#">09
														Comments</a></span></li>
										</ul>
<!--										<p>--><?php //echo substr($post['post_desc'],0,25) ?><!--...</p>-->
										<p><?php
                                            mb_internal_encoding('UTF-8');
                                            echo  mb_substr($post['post_desc'],0,180)
                                            ?>...</p>
										<a href="post.php?post-id=<?php echo $post['id'] ?>" class="lab-btn">ادامه مطلب</a>
									</div>

                                </div>
                                <?php } ?>
							</div>




							<div class="paginations">
								<ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
									<li>
										<a href="#"><i class="icofont-rounded-double-left"></i></a>
									</li>
									<li>
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li class="d-none d-sm-block">
										<a href="#">3</a>
									</li>
									<li>
										<a href="#"><i class="icofont-rounded-double-right"></i></a>
									</li>
								</ul>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-7 col-12">
						<aside class="ps-lg-4">
							<div class="widget widget-search">
								<div class="widget-header">
									<h5>جستجو در نوشته ها</h5>
								</div>
								<form action="/" class="search-wrapper">
									<input class="rounded" type="text" name="s" placeholder="جستجو...">
									<button type="submit"><i class="icofont-search-2"></i></button>
								</form>
							</div>

							<div class="widget widget-category">
								<div class="widget-header">
									<h5>دسته بندی نوشته ها</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span>کل نوشته ها</span><span><?php echo mysqli_num_rows($number_of_posts);?></span></a>
									</li>
                                    <?php while ($post_cat = mysqli_fetch_array($post_cats)) { ?>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><?php echo $post_cat['posts_cat_name'] ?></span><span><?php echo mysqli_num_rows($number_of_posts);?></span></a>
                                        <?php } ?>

                                    </li>





								</ul>
							</div>

							<div class="widget widget-post">
								<div class="widget-header">
									<h5>نوشته های اخیر</h5>
								</div>
                                <?php while ($sidebar_post = mysqli_fetch_array($sidebar_posts)) { ?>
								<ul class="lab-ul widget-wrapper">
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb rounded">
                                            <a href="post.php?post-id=<?php echo $sidebar_post['id'] ?>"><img src="assets/images/post/<?php echo $sidebar_post['post_image'] ?>" alt=""></a>
										</div>
										<div class="post-content ps-3">
											<a href="post.php">
												<h6><a href="post.php?post-id=<?php echo $sidebar_post['id'] ?>"><?php echo $sidebar_post['post_title'] ?></a></h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
                                    <?php } ?>

                                </ul>

                            </div>

<!--							<div class="widget widget-instagram">-->
<!--								<div class="widget-header">-->
<!--									<h5>Instagram</h5>-->
<!--								</div>-->
<!--								<ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/01.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/02.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/03.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/04.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/05.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/06.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/07.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/08.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--									<li><a class="rounded" href="#"><img src="assets/images/gallery/09.jpg"-->
<!--												alt="gallery-img"></a></li>-->
<!--								</ul>-->
<!--							</div>-->

<!--							<div class="widget widget-archive">-->
<!--								<div class="widget-header">-->
<!--									<h5>Our Archive</h5>-->
<!--								</div>-->
<!--								<ul class="lab-ul widget-wrapper list-bg-none">-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>January</span><span>2021</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>February</span><span>2021</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>March</span><span>2019</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>August</span><span>2018</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>September</span><span>2017</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>October</span><span>2016</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>November</span><span>2014</span></a>-->
<!--									</li>-->
<!--									<li>-->
<!--										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i-->
<!--													class="icofont-ui-calendar"></i>December</span><span>2013</span></a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</div>-->

<!--							<div class="widget widget-tags">-->
<!--								<div class="widget-header">-->
<!--									<h5>Our Popular tags</h5>-->
<!--								</div>-->
<!--								<ul class="lab-ul widget-wrapper">-->
<!--									<li><a href="#">envato</a></li>-->
<!--									<li><a href="#">themeforest</a></li>-->
<!--									<li><a href="#">codecanyon</a></li>-->
<!--									<li><a href="#">videohive</a></li>-->
<!--									<li><a href="#">audiojungle</a></li>-->
<!--									<li><a href="#">3docean</a></li>-->
<!--									<li><a href="#">envato</a></li>-->
<!--									<li><a href="#">themeforest</a></li>-->
<!--									<li><a href="#">codecanyon</a></li>-->
<!--								</ul>-->
<!--							</div>-->
						</aside>
					</div>
                </div>
			</div>
		</div>
	</div>
	<!-- Blog Section ENding Here -->





	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
			class="pluse_2"></span></a>
	<!-- scrollToTop ending here -->



	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/fontawesome.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/circularProgressBar.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/functions.js"></script>

    <div class="clear"></div>
    <!-- Footer Section start here -->
    <?php require_once 'sections/footer.php' ?>
    <!-- Footer Section end here -->
</body>

</html>