<?php require_once 'inc/config.php';
if (is_login()) {
    redirect('profile');
}
require_once 'sections/header.php';
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
    <!-- ==========Header Section Ends Here========== -->

    <!-- Page Header Section Start Here -->
<!--    <section class="page-header padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Login for Event</h4>
                <ul class="lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a class="active">login</a></li>
                </ul>
            </div>
        </div>
    </section>
-->    <!-- Page Header Section Ending Here -->

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">ورود به آدیداس اسپورت</h3>
                <form class="account-form">
                    <div class="form-group">
                        <input type="text" placeholder="نام کاربری" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="رمز عبور" name="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">یادآوری رمز عبور</label>
                            </div>
                            <a href="#">فراموشی رمز</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="d-block lab-btn"><span>ورود</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">اکانت ندارید؟ <a href="registration.html"> ثبت نام</a></span>
                    <span class="or"><span>یا</span></span>
                    <h5 class="subtitle">لوگین با شبکه های اجتماعی</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->





    <?php require_once 'sections/footer.php' ?>
</body>

</html>