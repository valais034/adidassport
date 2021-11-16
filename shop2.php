<?php require_once 'inc/config.php';
require_once 'sections/header.php';

?>
<?php
$products= get_products(4);
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kagont</title>
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
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/01.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>

                            <li>
                                <a href="#0">Features</a>
                                <ul class="submenu">
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="registration.html">Sign Up</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a class="active" href="shop2.php">Shop</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming-soon</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#0">Speakers</a>
                                <ul class="submenu">
                                    <li><a href="speakers.html">All Speakers</a></li>
                                    <li><a href="speaker-details.html">Speaker Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <div class="cart-ticket">
                            <div class="cart-icon">
                                <a href="#">
                                    <i class="icofont-bag"></i>
                                    <span>3</span>
                                </a>

                                <div class="cart-content">
                                    <ul class="cart-list">
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_01.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_02.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/menu_cart_03.jpg" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="#">Product Text Here</a></h6>
                                                    <p>Quantity: 1 <span>$56</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="lab-btn">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                            <a href="pricing-plan.html" class="ticket-btn lab-btn ">
                                <span>Purchase Ticket</span>
                            </a>
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Event Shop Page</h4>
                <ul class="lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a class="active">Shop</a></li>
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
                        <article>
                            <div class="shop-title d-flex flex-wrap justify-content-between">
                                <p>Showing 01 - 12 of 139 Results</p>
                                <div class="product-view-mode">
                                    <a class="active" data-target="grids"><i class="fas fa-th"></i></a>
                                    <a data-target="lists"><i class="fas fa-th-list"></i></a>
                                </div>
                            </div>

                            <div class="shop-product-wrap grids row justify-content-center">
                                <?php while ($product = mysqli_fetch_array($products)) { ?>

                                <div class="col-lg-4 col-sm-6 col-12">

                                    <div class="product-item">


                                            <div class="product-thumb">
                                                <a href="product.php?product-id=<?php echo $product['id'] ?>"><img src="assets/images/product/<?php echo $product['product_image'] ?>" alt=""></a>
                                            <div class="product-action-link">
                                                <a href="assets/images/shop/01.jpg" data-rel="lightcase"><i
                                                        class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                <a href="#"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Text Here</a></h6>
                                            <div class="rating mb-1">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>$200</h6>
                                        </div>


                                    </div>
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <img src="assets/images/shop/02.jpg" alt="shope">
                                            <div class="product-action-link">
                                                <a href="assets/images/shop/02.jpg" data-rel="lightcase"><i
                                                        class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                <a href="#"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Title Here</a></h6>
                                            <div class="rating mb-1">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <h6>
                                                $200
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo</p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="paginations">
                                <ul class="lab-ul d-flex flex-wrap justify-content-center">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">2</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a class="dot">...</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">5</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
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
                            <p>&copy;2021 <a href="index.html">Kagont</a> -Best For Event HTML Template.</p>
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