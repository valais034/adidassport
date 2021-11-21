<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
if ($_GET['post-id']) {
    $post_id = $_GET['post-id'];
    $post_info = mysqli_fetch_array(get_post_by_id($post_id));
}


$pcomments = get_comments_by_product_id($post_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>پست ها</title>
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

	<!-- Page Header Section Start Here -->
	<section class="page-header padding-tb">
		<div class="overlay"></div>
		<div class="container">
			<div class="page-header-content-area">
				<h4 class="ph-title"><?php echo $post_info['post_title'] ?></h4>
				<ul class="lab-ul">
					<li><a href="index.php">خانه</a></li>
					<li><a class="active">بلاگ</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Page Header Section Ending Here -->

	<!-- Blog Section Start Here -->
	<div class="blog-section blog-page padding-tb aside-bg">
		<div class="container">
			<div class="section-wrapper">
				<div class="row justify-content-center pb-15">
					<div class="col-lg-8 col-12">
						<article>
							<div class="post-item-2">
								<div class="post-inner">
									<div class="post-thumb rounded">
                                        <img src="assets/images/post/<?php echo $post_info['post_image'] ?>" alt="">
									</div>
									<div class="post-content">
										<h3><?php echo $post_info['post_title'] ?></h3>
										<ul class="lab-ul post-date">
											<li><span><i class="icofont-ui-calendar"></i> October 9, 2019 10:59 am
												</span></li>
											<li><span><i class="icofont-user"></i><a href="#">Robot Smith</a></span>
											</li>
											<li><span><i class="icofont-speech-comments"></i><a href="#">09
														Comments</a></span></li>
										</ul>
										<p>
                                            <?php echo $post_info['post_desc'] ?>
                                        </p>


										<div class="tags-area">
											<ul class="tags lab-ul justify-content-center">
												<li>
													<a href="#">Event</a>
												</li>
												<li>
													<a href="#" class="active">NoneProfit</a>
												</li>
												<li>
													<a href="#">Admission</a>
												</li>
												<li>
													<a href="#">Exams</a>
												</li>
											</ul>
											<ul class="share lab-ul justify-content-center">
												<li>
													<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
												</li>
												<li>
													<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="article-pagination">
								<div class="prev-article">
									<a href="#"><i class="icofont-rounded-double-left"></i>Previous Article</a>
									<p>Evisculate Parallel Processes via Technica
										Sound Models Authoritative</p>
								</div>
								<div class="next-article">
									<a href="#">Next Article <i class="icofont-rounded-double-right"></i></a>
									<p>Qvisculate Parallel Processes via Technica
										Sound Models Authoritative</p>
								</div>
							</div>
							<div class="authors rounded">
								<div class="author-thumb">
									<img src="assets/images/blog/author2.png" alt="author">
								</div>
								<div class="author-content">
									<h6>Rassel Hossain</h6>
									<p>Competently conceptualize alternative synergy and technically and niche
										markets. Efficiently impact technically sound outsourcing rath
										tnclicks-and-mortar best practices.</p>
									<div class="social-media">
										<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
										<a href="#" class="behance"><i class="icofont-behance"></i></a>
										<a href="#" class="instagram"><i class="icofont-instagram"></i></a>
										<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
										<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
									</div>
								</div>
							</div>

							<div id="comments" class="comments rounded">
								<h6 class="comment-title h7">02 Comment</h6>
								<ul class="lab-ul comment-list">
									<li class="comment" id="li-comment-1">
										<div class="com-item">
											<div class="com-thumb">
												<img alt="" src="assets/images/team/05.jpg"
													srcset="assets/images/team/05.jpg" class="avatar avatar-90 photo"
													height="90" width="90">
											</div>
											<div class="com-content">
												<div class="com-title">
													<div class="com-title-meta">
														<a href="#" rel="external nofollow" class="h7">Linsa
															Faith</a>
														<span> October 5, 2018 at 12:41 pm </span>
													</div>
													<span class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#"
															aria-label="Reply to Masum"><i
																class="icofont-reply-all"></i>Reply</a>
													</span>
												</div>
												<p>The inner sanctuary, I throw myself down among the tall grass bye the
													trckli stream and, as I lie close to the earth</p>
												<div class="reply-btn"></div>
											</div>
										</div>
										<ul class="lab-ul comment-list">
											<li class="comment" id="li-comment-2">
												<div class="com-thumb">
													<img alt="" src="assets/images/team/06.jpg"
														srcset="assets/images/team/06.jpg"
														class="avatar avatar-90 photo" height="90" width="90">
												</div>
												<div class="com-content">
													<div class="com-title">
														<div class="com-title-meta">
															<a href="#" rel="external nofollow" class="h7">James
																Jusse</a>
															<span> October 5, 2018 at 12:41 pm </span>
														</div>
														<span class="reply">
															<a rel="nofollow" class="comment-reply-link" href="#"
																aria-label="Reply to Masum"><i
																	class="icofont-reply-all"></i>Reply</a>
														</span>
													</div>
													<p>A wonderful serenity has taken possession of my entire soul, like
														these sweet mornings spring which I enjoy with my whole heart
													</p>
												</div>
											</li>
										</ul>
								</ul>
							</div>

							<div id="respond" class="comment-respond rounded">
								<h6 class="h7">Leave a Comment</h6>
								<div class="add-comment">
									<form action="#" method="post" id="commentform" class="comment-form">
										<input name="name" type="text" value="" placeholder="Name*">
										<input name="email" type="text" value="" placeholder="Email*">
										<input name="url" type="text" value="" placeholder="Website*" class="w-100">
										<textarea id="comment-reply" name="comment" rows="7"
											placeholder="Type Here Your Comment*"></textarea>
										<button type="submit" class="lab-btn"><span>Send Comment</span></button>
									</form>
								</div>
							</div>

						</article>
					</div>
					<div class="col-lg-4 col-md-7 col-12">
						<aside class="ps-lg-4">
							<div class="widget widget-search">
								<div class="widget-header">
									<h5>Search Your keywords</h5>
								</div>
								<form action="/" class="search-wrapper">
									<input class="rounded" type="text" name="s" placeholder="Search Here...">
									<button type="submit"><i class="icofont-search-2"></i></button>
								</form>
							</div>

							<div class="widget widget-category">
								<div class="widget-header">
									<h5>Post Categories</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Show
												all</span><span>18</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Business</span><span>20</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Creative</span><span>25</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Inspiation</span><span>30</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>News</span><span>28</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Photography</span><span>20</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-rounded-double-right"></i>Smart</span><span>26</span></a>
									</li>
								</ul>
							</div>

							<div class="widget widget-post">
								<div class="widget-header">
									<h5>Recent Post</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb rounded">
											<a href="post.php"><img src="assets/images/product/01.jpg"
																	alt="product"></a>
										</div>
										<div class="post-content ps-3">
											<a href="post.php">
												<h6>Poor People’s Campaign
													Our Resources</h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb rounded">
											<a href="post.php"><img src="assets/images/product/02.jpg"
																	alt="product"></a>
										</div>
										<div class="post-content ps-3">
											<a href="post.php">
												<h6>Boosting Social For NGO
													And Charities </h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb rounded">
											<a href="post.php"><img src="assets/images/product/03.jpg"
																	alt="product"></a>
										</div>
										<div class="post-content ps-3">
											<a href="post.php">
												<h6>Poor People’s Campaign
													Our Resources</h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb rounded">
											<a href="post.php"><img src="assets/images/product/04.jpg"
																	alt="product"></a>
										</div>
										<div class="post-content ps-3">
											<a href="post.php">
												<h6>Boosting Social For NGO
													And Charities </h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
								</ul>
							</div>

							<div class="widget widget-instagram">
								<div class="widget-header">
									<h5>Instagram</h5>
								</div>
								<ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
									<li><a class="rounded" href="#"><img src="assets/images/gallery/01.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/02.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/03.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/04.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/05.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/06.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/07.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/08.jpg"
												alt="gallery-img"></a></li>
									<li><a class="rounded" href="#"><img src="assets/images/gallery/09.jpg"
												alt="gallery-img"></a></li>
								</ul>
							</div>

							<div class="widget widget-archive">
								<div class="widget-header">
									<h5>Our Archive</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>January</span><span>2021</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>February</span><span>2021</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>March</span><span>2019</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>August</span><span>2018</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>September</span><span>2017</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>October</span><span>2016</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>November</span><span>2014</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i
													class="icofont-ui-calendar"></i>December</span><span>2013</span></a>
									</li>
								</ul>
							</div>

							<div class="widget widget-tags">
								<div class="widget-header">
									<h5>Our Popular tags</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li><a href="#">envato</a></li>
									<li><a href="#">themeforest</a></li>
									<li><a href="#">codecanyon</a></li>
									<li><a href="#">videohive</a></li>
									<li><a href="#">audiojungle</a></li>
									<li><a href="#">3docean</a></li>
									<li><a href="#">envato</a></li>
									<li><a href="#">themeforest</a></li>
									<li><a href="#">codecanyon</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Section ENding Here -->

	<!-- Footer Section start here -->
	<footer class="footer-section" style="background-image: url(assets/images/bg-images/footer-bg.png);">
		<div class="footer-top">
			<div class="container">
				<div class="row g-3 justify-content-center g-lg-0">
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="footer-top-item lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/footer/footer-top/01.png" alt="Phone-icon">
								</div>
								<div class="lab-content">
									<span>Phone Number : +88019 339 702 520</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="footer-top-item lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/footer/footer-top/02.png" alt="email-icon">
								</div>
								<div class="lab-content">
									<span>Email : admin@Kagont.com</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="footer-top-item lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/footer/footer-top/03.png" alt="location-icon">
								</div>
								<div class="lab-content">
									<span>Address : 30 North West New York 240</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-middle padding-tb">
			<div class="container">
				<div class="row shape-c">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="footer-middle-item-wrapper">
							<div class="footer-middle-item mb-5 mb-lg-0">
								<div class="fm-item-title">
									<h5>About Kagont</h5>
								</div>
								<div class="fm-item-content">
									<p class="mb-30">Energistica coordinate highly eficient procesr
										improvement viaing awesome</p>
									<img class="rounded footer-abt-img" src="assets/images/footer/footer-middle/01.jpg"
										alt="about-image">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="footer-middle-item-wrapper">
							<div class="footer-middle-item mb-5 mb-lg-0">
								<div class="fm-item-title">
									<h5>our Recent news</h5>
								</div>
								<div class="fm-item-content">
									<div class="fm-item-widget lab-item">
										<div class="lab-inner">
											<div class="lab-thumb">
												<a href="#"> <img src="assets/images/footer/footer-middle/02.jpg"
														alt="footer-widget-img"></a>
											</div>
											<div class="lab-content">
												<h6><a href="#">Evisculate Economicy Sound
														Technologies Before.</a></h6>
												<p>July 23, 2021</p>
											</div>
										</div>
									</div>
									<div class="fm-item-widget lab-item">
										<div class="lab-inner">
											<div class="lab-thumb">
												<a href="#"><img src="assets/images/footer/footer-middle/03.jpg"
														alt="footer-widget-img"></a>
											</div>
											<div class="lab-content">
												<h6><a href="#">Globally initiate Global Niche
														Awesome Markets For.</a></h6>
												<p>December 23, 2021</p>
											</div>
										</div>
									</div>
									<div class="fm-item-widget lab-item">
										<div class="lab-inner">
											<div class="lab-thumb">
												<a href="#"><img src="assets/images/footer/footer-middle/04.jpg"
														alt="footer-widget-img"></a>
											</div>
											<div class="lab-content">
												<h6><a href="#">Authorita Underwhni Tactica
														Growth Stratege Create
													</a></h6>
												<p>July 29, 2021</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="footer-middle-item-wrapper">
							<div class="footer-middle-item-3 mb-5 mb-lg-0">
								<div class="fm-item-title">
									<h5>OUR NEWSLETTER</h5>
								</div>
								<div class="fm-item-content">
									<p>Kagont is a event organization supported
										by community leaders</p>
									<form>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Enter email">
										</div>
										<button type="submit" class="lab-btn">Send Massage <i
												class="icofont-paper-plane"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-bottom-content text-center">
							<p>&copy;2021 <a href="index.php">Kagont</a> -Best For Event HTML Template.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section end here -->



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
</body>

</html>