
<?php require_once '../inc/config.php';

//mysqli_query($db,"INSERT INTO `users`(`display_name`, `email`, `password`) VALUES ('reza','reza@gmail.com','123456')");
if (is_login()) {
  redirect('profile');
}
require_once '../sections/header.php';

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>آدیداس اسپورت</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/x-icon/01.png">

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                <h4 class="ph-title">ثبت نام کابران</h4>
                <ul class="lab-ul">
                    <li><a href="../index.php">صفحه اصلی</a></li>
                    <li><a href="#"></a></li>
                    <li><a class="active">ثبت نام</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
<!--    <div class="forms-box">-->
<!--        --><?php
//        if ($message) {
//            ?>
<!--            <div class="success-message">--><?php //echo $message ?><!--</div>-->
<!--            --><?php
//        }
//        if ($error) {
//            ?>
<!--            <div class="error-message">--><?php //echo $error ?><!--</div>-->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
    <!-- Registration section start Here -->

    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <div class="forms-box">
                    <?php
                    if ($message) {
                        ?>
                        <div class="success-message"><?php echo $message ?></div>
                        <?php
                    }
                    if ($error) {
                        ?>
                        <div class="error-message"><?php echo $error ?></div>
                        <?php
                    }
                    ?>
                <h3 class="title">ثبت نام کاربران</h3>
                <form class="account-form" action="registration.php" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="نام کاربری" name="name" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email"  required placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"  required placeholder="رمز عبور" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="password-conf"  required placeholder="تکرار رمز عبور">
                    </div>
                    <div class="form-group">
<!--                        <button class="d-block lab-btn"><span>Get Started Now</span></button>-->
<!--                        <input type="submit" name="do-register" value="ساخت حساب کاربری جدید">-->
                        <button class="d-block lab-btn" name="do-register"><span>ثبت نام</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">قبلا ثبت نام کرده اید؟ <a href="login.php">ورود</a></span>
<!--                    <span class="or"><span>یا</span></span>-->
<!--                    <h5 class="subtitle">ورود توسط شبکه اجتماعی</h5>-->
<!--                    <ul class="social-media social-color justify-content-center d-flex lab-ul">-->
<!--                        <li>-->
<!--                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Registration section end Here -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/fontawesome.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/circularProgressBar.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/lightcase.js"></script>
    <script src="../assets/js/functions.js"></script>

    <div class="clear"></div>
    <?php require_once '../sections/footer.php' ?>
</body>

</html>