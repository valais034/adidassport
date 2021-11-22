<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$products = get_products(6);
$cart_items = get_cart_items();
$cart_total = cart_total();
$number_of_cart_items = mysqli_query($db, "SELECT * FROM cart");
$cart_total_final = $cart_total+30;
if (is_login()) {
$user_data = get_userdata();
}
?>

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


    <header class="header-section" >
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="<?php echo PATH; ?>">
                            <img src="assets/images/logo/01.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="<?php echo PATH; ?>">صفحه اصلی</a>
                            </li>
                            <li><a href="<?php echo PATH; ?>/shop.php">محصولات</a></li>

                            <li>
                                <a href="#0">مدل های جدید</a>
                                <ul class="submenu">
                                    <li><a href="speaker-details.php">جزئیات مدل های جدید</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo PATH; ?>/gallery.php">گالری تصاویر</a></li>
                            <li>
                                <a href="<?php echo PATH; ?>/blog.php">بلاگ</a>
                            </li>
                            <li><a href="contact.php">تماس با ما</a></li>
                        </ul>
                        <div class="cart-ticket">
                            <div class="cart-icon">
                                <a href="#">
                                    <i class="icofont-bag"></i>
                                    <span><?php echo mysqli_num_rows($number_of_cart_items);?>
                                    </span>
                                </a>

                                <div class="cart-content">
                                    <?php foreach ($cart_items as $cart_item) { ?>
                                    <ul class="cart-list">
                                        <li class="cart-item">
                                            <div class="cart-inner">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/product/<?php echo $cart_item['product_image'] ?>" alt="product">
                                                </div>
                                                <div class="cart-details">
                                                    <h6><a href="product.php?product-id=<?php echo $cart_item['id'] ?>" target="_blank"><?php echo $cart_item['product_name'] ?></a> </h6>
                                                    <p>تعداد: 1 <span><?php echo $cart_item['product_price'] ?> تومان</span></p>
                                                    <div class="close-btn">
                                                        <a href="?delete-from-cart=<?php echo $cart_item['id'] ?>" onclick="return confirm('آیا میخواهید این محصول را از سبد خرید خود حذف کنید؟')"><i class="icofont-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <a href="<?php echo PATH; ?>/cart.php" class="lab-btn">
                                        ادامه خرید
                                    </a>
                                </div>
                            </div>

                            <a class="lab-btn" href="<?php echo PATH; ?>/users/login.php" >پنل کاربری</a>

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


