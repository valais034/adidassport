<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>صفحه خطای 404</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
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
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">صفحه خطای 404</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">خانه</a></li>
                    <li><a href="#">صفحات</a></li>
                    <li><a class="active">404</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- ==========404 Section start Here========== -->
    <section class="fore-zero padding-tb padding-b">
        <div class="container">
            <div class="section-wrapper">
                <div class="zero-item">
                    <div class="zero-thumb">
                        <img src="assets/images/404.png" alt="404">
                    </div>
                    <div class="zero-content">
                        <h2>متاسفانه صفحه مورد نظر شما یافت نشد...</h2>
                        <p>احتمالا در درج لینک یا ورودی به مشکل خورده اید <i class="icofont-worried"></i></p>
                        <a href="index.php" class="lab-btn"><span>برگشت به خانه <i
                                    class="icofont-double-right"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========404 Section ends Here========== -->

    <!-- Footer Section start here -->
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

    <div class="clear"></div>
    <!-- Footer Section start here -->
    <?php require_once 'sections/footer.php' ?>
    <!-- Footer Section end here -->
</body>

</html>