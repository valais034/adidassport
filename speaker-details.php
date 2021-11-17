<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$products= get_products(6);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>مدل های جدید آدیداس</title>
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
                <h4 class="ph-title">محصولات جدید آدیداس</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">خانه</a></li>
                    <li><a href="#">محصولات </a></li>
                    <li><a class="active">محصولات جدید</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Scholar single section start Here -->
    <div class="scholar-single-section padding-tb padding-b">
        <div class="container">
            <?php while ($product = mysqli_fetch_array($products)) { ?>
            <div class="section-wrapper rounded">

                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="scholar-left">
                                <div class="scholar-single-item">
                                    <div class="scholar-single-thumb">
                                        <a href="product.php?product-id=<?php echo $product['id'] ?>"><img src="assets/images/product/<?php echo $product['product_image'] ?>" alt=""></a>
                                    </div>
                                    <div class="scholar-single-content">
                                        <span class="h7">امتیازات این محصول</span>
                                        <div class="skill-bar d-flex">
                                            <div class="skill-item">
                                                <div class="pie" data-pie='{ "index": 3, "percent": 80, "colorSlice": "#df01ae", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                                "fontSize": "1.125rem","fontColor":"#ffffff" }'></div>
                                                <span>کیفیت ساخت</span>
                                            </div>
                                            <div class="skill-item">
                                                <div class="pie" data-pie='{ "index": 6, "percent": 70, "colorSlice": "#df01ae", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                                "fontSize": "1.125rem","fontColor":"#ffffff" }'>
                                                </div>
                                                <span>طراحی</span>
                                            </div>
                                            <div class="skill-item">
                                                <div class="pie" data-pie='{ "index": 4, "percent": 60, "colorSlice": "#df01ae", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                                "fontSize": "1.125rem","fontColor":"#ffffff" }'>
                                                </div>
                                                <span>قیمت</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <div class="scholar-intro">
                                    <h5><a href="product.php?product-id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></h5>
                                    <span class="d-inline-block">دسته بندی: <?php echo $product['product_cat'] ?></span>
                                    <p>توضیحاتی درباره این محصول: <?php echo $product['product_desc'] ?></p>
                                </div>
                                <div class="scholar-info">
                                    <span class="h7 mb-3"></span>
                                    <p class="mb-4"><?php echo $product['product_desc'] ?></p>
                                    <div class="scholar-other-info">
                                        <ul class="lab-ul">
                                            <li><span class="info-title">تاریخ عرضه: </span><span class="info-details">:
                                                    16 آذر 1400</span></li>
                                            <li><span class="info-title">کشور ساخت:</span><span class="info-details">:
                                                    ویتنام</span></li>
                                            <li><span class="info-title">کیفیت ساخت:</span><span class="info-details">+++A</span></li>
                                            <li><span class="info-title">برند:</span><span class="info-details">:
                                                    Adidas</span></li>
                                            <li><span class="info-title">نوع کفش:</span><span class="info-details">:
                                                    ورزشی رانینگ</span></li>
                                            <li><span class="info-title">مشاهده تیزر:</span>
                                                <div class="info-details">
                                                    <ul class="lab-ul d-flex">
                                                        <li>: <a href="#" class="twitter"><i
                                                                    class="icofont-twitter"></i></a>
                                                        </li>
                                                        <li><a href="#" class="behance"><i
                                                                    class="icofont-behance"></i></a>
                                                        </li>
                                                        <li> <a href="#" class="instagram"><i
                                                                    class="icofont-instagram"></i></a></li>
                                                        <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                                        </li>
                                                        <li><a href="#" class="linkedin"><i
                                                                    class="icofont-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="scholar-award">
                                    <span class="h7">جوایز کسب شده:</span>
                                    <ul class="all-awards lab-ul d-flex">
                                        <li class="single-award">
                                            <img src="assets/images/team/award/01.png" alt="award">
                                            <p>برترین طراحی 2021</p>
                                        </li>
                                        <li class="single-award">
                                            <img src="assets/images/team/award/02.png" alt="award">
                                            <p>برترین رنگ بندی 2021</p>
                                        </li>
                                        <li class="single-award">
                                            <img src="assets/images/team/award/03.png" alt="award">
                                            <p>طراحی خلاقانه 2021</p>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>


    </div>
    <!-- Scholar single section end Here -->





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