<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>تماس با ما</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/jCirclize.min.css">
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
                <h4 class="ph-title">با ما در تماس باشید</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">خانه</a></li>
                    <li><a class="active">تماس با ما</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>جهت کسب اطلاعات همین حالا با ما تماس بگیرید.</h4>
                                <p class="mb-5">تیم آدیداس اسپورت هر روزه از ساعت 9 الی 17 پاسخگوی تمامی سوالات شما در حوزه نمایندگی، محصولات و... می باشند. این مجموعه سعی در کسب رضایت شما مشتریان می باشد.</p>
                                <form action="#" method="POST" id="commentform" class="comment-form">
                                    <input type="text" name="name" class="" placeholder="نام*">
                                    <input type="email" name="email" class="" placeholder="ایمیل*">
                                    <input type="text" name="number" class="" placeholder="شماره تماس*">
                                    <input type="email" name="subject" class="" placeholder="موضوع*">
                                    <textarea name="text" id="role" cols="30" rows="9"
                                        placeholder="پیام*"></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>ارسال پیام</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>اطلاعات تماس</h5>
                                <p>جهت تماس با مجموعه آدیداس اسپورت از طریق راه های زیر با ما در تماس باشید.</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/01.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">آدرس دفتر نمایندگی ها:</span>
                                            <p>سعادت آباد، خ علامه شمالی، نبش 14 غربی، پلاک 20، واحد 5</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/02.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">شماره تلفن:</span>
                                            <p>+98 21 22068905</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/03.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">ارسال ایمیل:</span>
                                            <p>admin@adidassport.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/04.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">وب سایت:</span>
                                            <p>www.adidassport.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.227736753981!2d90.38698831452395!3d23.739256984594892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sCodexCoder!5e0!3m2!1sbn!2sbd!4v1610134370994!5m2!1sbn!2sbd"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us Section ENding Here -->





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