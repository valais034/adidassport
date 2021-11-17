<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<!DOCTYPE html>
<html lang="en">

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
    <!-- ==========Header Section Ends Here========== -->

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">گالری تصاویر</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">خانه</a></li>
                    <li><a href="#">مدیا</a></li>
                    <li><a class="active">گالری تصاویر</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Gallary section start here-->
    <div class="gallery-section padding-tb">
        <div class="container">
            <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
                <li class="filter-btn is-checked" data-filter="*">همه <span class="filter-item-num">09</span></li>
                <li class="filter-btn" data-filter=".eid-ul-adha">کفش ها <span class="filter-item-num">03</span>
                </li>
                <li class="filter-btn" data-filter=".eid-ul-fitr">تی شرت ورزشی <span class="filter-item-num">05</span>
                </li>
                <li class="filter-btn" data-filter=".ramadan">کلاه ورزشی <span class="filter-item-num">06</span></li>
                <li class="filter-btn" data-filter=".shab-e-barat">شلوار ورزشی <span class="filter-item-num">03</span>
                </li>
            </ul>
            <div class="grid pb-15">
                <div class="grid-item eid-ul-adha eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/01.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content p-2">
                            <a href="assets/images/gallery/mason/01.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/02.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/02.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/03.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/03.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/04.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/04.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item shab-e-barat eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/05.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/05.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item eid-ul-fitr eid-ul-adha">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/06.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/06.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/09.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/09.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/08.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/08.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-adha">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/07.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/07.jpg" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>تیتر تصویر</h5>
                            <p>توضیح تصویر</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallary section end here-->





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