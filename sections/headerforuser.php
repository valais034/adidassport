<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مانگو</title>
    <link rel="stylesheet" href="<?php echo PATH; ?>styles/styles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script type="text/javascript" src="relative/path/to/your/javascript.js"></script>
<script>
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</head>
<body>
    
    
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <header class="header-section" style="position: relative">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.php">
                            <img src="../assets/images/logo/01.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="index.php">صفحه اصلی</a>
                            </li>

                            <li>
                                <a href="#0">صفحات</a>
                                <ul class="submenu">
                                    <li><a href="gallery.html">گالری</a></li>
                                    <li><a href="../users/login.php">ورود کاربران</a></li>
                                    <li><a href="../users/registration.php">ثبت نام کاربران</a></li>
                                    <li><a href="pricing-plan.html">قیمت ها</a></li>
                                    <li><a href="shop.html">فروشگاه</a></li>
                                    <li><a href="shop-single.html">صفحه تکی محصول</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="404.html">صفحه 404</a></li>
                                    <li><a href="coming-soon.html">به زودی</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#0">مدل های جدید</a>
                                <ul class="submenu">
                                    <li><a href="speakers.html">تمامی مدل های 2021</a></li>
                                    <li><a href="speaker-details.html">جزئیات مدل های جدید</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">بلاگ</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">بلاگ</a></li>
                                    <li><a href="blog-single.html">صفحه تکی بلاگ</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">تماس با ما</a></li>
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
                                                    <h6><a href="#">نام محصول</a></h6>
                                                    <p>تعداد: 1 <span>56000</span></p>
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
                                                    <h6><a href="#">نام محصول</a></h6>
                                                    <p>تعداد: 1 <span>60000</span></p>
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
                                                    <h6><a href="#">نام محصول</a></h6>
                                                    <p>تعداد: 1 <span>62000</span></p>
                                                    <div class="close-btn">
                                                        <a href="#"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="lab-btn">
                                        ادامه خرید
                                    </a>
                                </div>
                            </div>
                            <a href="profile/index.php" class="ticket-btn lab-btn ">
                                <span>پروفایل کاربری</span>
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


