<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$products= get_products(4);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>فروشگاه آدیداس</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #main {
            width: 50%;
            margin: 0 auto;
        }

        .box {
            width: 800px;
            background-color: #fff;
            margin: 0 auto;
            position: relative;
            top: -40px;
            box-shadow: 0px 0px 15px 0px rgba(97, 97, 97, 1);
            float: right;
        }

        /* CONTENT */
        #content {
            width: 800px;
            background-color: #fff;
            margin: 0 auto;
            position: relative;
            top: -40px;
            box-shadow: 0px 0px 15px 0px rgba(97, 97, 97, 1);
            float: right;
        }

        /* PRODUCTS */
        #products {
            padding: 5px;
        }

        .product-item {
            width: 30%;
            background-color: #fff;
            position: relative;
            box-shadow: 0px 0px 5px 0px rgba(97, 97, 97, 1);
            display: inline-block;
            margin: 10px;

        }

        .product-item:hover {
            box-shadow: 0px 0px 7px 0px rgba(97, 97, 97, 1);

        }

        .product-item .product-image {
            text-align: center;
        }

        .product-item .product-image img {
            width: 100%;
            opacity: 0.9;
            height: 150px;
        }

        .product-item:hover .product-image img {
            opacity: 1;
        }

        .product-item .product-title {
            height: 80px;
            padding: 5px;
            position: relative;
            top: -10px;
            font-size: 14px;
        }

        .product-item .product-title a {
            color: #000;

        }

        .product-item .product-title a:hover {
            color: #404040;
        }

        .product-item .product-price {
            font-size: 16px;
            padding: 5px;
            color: green;
            font-weight: bold;
            display: inline-block;
        }

        .product-item .read-more {
            display: inline-block;
            font-size: 10px;
            position: absolute;
            left: 5px;
            bottom: 5px;
        }

        .product-item .read-more a {
            color: #666666;
        }

        .product-item .read-more a:hover {
            text-decoration: underline;
            color: #3e3e3e;
        }

        /* SIDEBAR */
        #sidebar {
            margin: 0 auto;
            position: relative;
            top: -40px;
            float: left;

        }

        /* SIDEBAR */
        .users {
            text-align: center;
            position: relative;
            top: 25px;
            margin-bottom: 50px;
        }

        .users a {
            color: #fff;
        }

        .users .login {
            background-color: #0097ec;
            padding: 3px 20px;
            border-radius: 3px;
        }

        .users .login:hover {
            background-color: #0068a8;
        }

        .users .register {
            background-color: #2E7D32;
            padding: 3px 30px;
            border-radius: 3px;
        }

        .users .register:hover {
            background-color: #256629;
        }

        .users .show-profile {
            background-color: #0097ec;
            padding: 3px 20px;
            border-radius: 3px;
        }

        .users .show-profile:hover {
            background-color: #0068a8;
        }

        #sidebar .sidebar-item {
            width: 280px;
            /*height: 200px;*/
            margin-top: 25px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(97, 97, 97, 1);

        }

        .sidebar-item ul {
            padding: 0;
            margin: 0;
        }

        .sidebar-item ul li {
            list-style: none;
            padding: 5px;
            border-bottom: 1px solid #ccc;
            font-size: 13px;
            height: 35px;
            vertical-align: 10px;
        }

        .sidebar-item ul li img {
            width: 60px;
            margin-left: 5px;
            float: right;
            border-radius: 3px;
        }

        .sidebar-item ul li a {
            color: #303030;
        }

        .sidebar-item ul li a:hover {
            color: #000;
            text-decoration: underline;
        }

    </style>
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
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">فروشگاه آدیداس</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">خانه</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- shop page Section Start Here -->
    <div class="shop-page padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                            <div id="content">
                                <div id="products">

                                    <?php while ($product = mysqli_fetch_array($products)) { ?>
                                        <div class="product-item">
                                            <div class="product-image"><a href="product.php?product-id=<?php echo $product['id'] ?>"><img src="assets/images/product/<?php echo $product['product_image'] ?>" alt=""></a></div>
                                            <div class="product-title"><a href="product.php?product-id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></div>
                                            <div class="product-price"><?php echo $product['product_price'] ?> تومان</div>
                                            <div class="read-more"><a href="product.php?product-id=<?php echo $product['id'] ?>">جزئیات محصول</a></div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
<!--                            --><?php //require_once 'sections/sidebar.php' ?>

                    </div>
                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-search primary-bg px-3">
                                <div class="widget-header">
                                    <h5>Search keywords</h5>
                                </div>
                                <form action="/" class="search-wrapper">
                                    <input type="text" name="s" placeholder="Your Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>

                            <div class="widget widget-category primary-bg px-3">
                                <div class="widget-header">
                                    <h5>All Categories</h5>
                                </div>
                                <div class="widget-wrapper">
                                    <ul class="lab-ul shop-menu">
                                        <li>
                                            <a href="#0">Apple</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Apple 1</a></li>
                                                <li><a href="#">Apple 2</a></li>
                                                <li><a href="#">Apple 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Orange</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Orange 1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Tomato</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Tomato 1</a></li>
                                                <li><a href="#">Tomato 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Honey</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Honey 1</a></li>
                                                <li><a href="#">Honey 2</a></li>
                                                <li><a href="#">Honey 3</a></li>
                                                <li><a href="#">Honey 4</a></li>
                                                <li><a href="#">Honey 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Banana</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Banana 1</a></li>
                                                <li><a href="#">Banana 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Blueberry</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Blueberry 1</a></li>
                                                <li><a href="#">Blueberry 2</a></li>
                                                <li><a href="#">Blueberry 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#0">Lettuce</a>
                                            <ul class="lab-ul shop-submenu">
                                                <li><a href="#">Lettuce 1</a></li>
                                                <li><a href="#">Lettuce 2</a></li>
                                                <li><a href="#">Lettuce 3</a></li>
                                                <li><a href="#">Lettuce 4</a></li>
                                                <li><a href="#">Lettuce 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget widget-post primary-bg px-3">
                                <div class="widget-header">
                                    <h5>Latests Products</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/shop/02.jpg"
                                                    alt="product"></a>
                                        </div>
                                        <div class="post-content ps-3">
                                            <a href="blog-single.html">
                                                <h6>Organic Orange</h6>
                                            </a>
                                            <div class="rating">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>$59.9</h6>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/shop/03.jpg"
                                                    alt="product"></a>
                                        </div>
                                        <div class="post-content ps-3">
                                            <a href="blog-single.html">
                                                <h6>Organic Orange</h6>
                                            </a>
                                            <div class="rating">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>$59.9</h6>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/shop/04.jpg"
                                                    alt="product"></a>
                                        </div>
                                        <div class="post-content ps-3">
                                            <a href="blog-single.html">
                                                <h6>Organic Orange</h6>
                                            </a>
                                            <div class="rating">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>$59.9</h6>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="blog-single.html"><img src="assets/images/shop/05.jpg"
                                                    alt="product"></a>
                                        </div>
                                        <div class="post-content ps-3">
                                            <a href="blog-single.html">
                                                <h6>Organic Orange</h6>
                                            </a>
                                            <div class="rating">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>$59.9</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page Section ENding Here -->

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