<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$products= get_products(6);
$sidebar_products = get_products(4);
$number_of_products = mysqli_query($db, "SELECT * FROM products");
echo mysqli_num_rows($number_of_products);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>فروشگاه</title>
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
            <h4 class="ph-title">فروشگاه</h4>
            <ul class="lab-ul">
                <li><a href="index.php">خانه - </a></li>
                <li><a class="active">فروشگاه</a></li>
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
                            <p>نمایش 6 از <?php echo mysqli_num_rows($number_of_products) ?> محصول</p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grids"><i class="fas fa-th"></i></a>
                                <a data-target="lists"><i class="fas fa-th-list"></i></a>
                            </div>
                        </div>

                        <?php

                        $total_records_per_page = 6;
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $adjacents = "2";

                        $result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM products ");
                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1

                        $result = mysqli_query($db,"SELECT * FROM products LIMIT $offset, $total_records_per_page");
                        ?>
                        <div class="shop-product-wrap grids row justify-content-center">
                            <?php while($row = mysqli_fetch_array($result)) {  ?>

                                <div class="col-lg-4 col-sm-6 col-12">

                                    <div class="product-item">


                                        <div class="product-thumb">
                                            <a href="product.php?product-id=<?php echo $row['id'] ?>"><img src="assets/images/product/<?php echo $row['product_image'] ?>" alt=""></a>
                                            <div class="product-action-link">
                                                <a href="assets/images/product/<?php echo $row['product_image'] ?>" data-rel="lightcase"><i
                                                            class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                <a href="product.php?product-id=<?php echo $row['id'] ?>"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="product.php?product-id=<?php echo $row['id'] ?>"><?php echo $row['product_name'] ?></a></h6>
                                            <div class="rating mb-1">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <span><?php echo $row['product_price'] ?> تومان</span>
                                        </div>


                                    </div>
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <img src="assets/images/product/<?php echo $row['product_image'] ?>" alt="shope">
                                            <div class="product-action-link">
                                                <a href="assets/images/product/<?php echo $row['product_image'] ?>" data-rel="lightcase"><i
                                                            class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                <a href="product.php?product-id=<?php echo $row['id'] ?>"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="product.php?product-id=<?php echo $row['id'] ?>"><?php echo $row['product_name'] ?></a></h6>
                                            <div class="rating mb-1">
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                                <span><a href="#"><i class="far fa-star"></i></a></span>
                                            </div>
                                            <span><?php echo $row['product_price'] ?> تومان</span>
                                            <p><?php echo $row['product_desc'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;text-align: center'>
                            <strong>صفحه <?php echo $page_no." از ".$total_no_of_pages; ?></strong>
                        </div>

                        <div style="width:70%; margin:0 auto;align-items: center">

                            <div class="paginations">
                            <ul class="lab-ul d-flex flex-wrap justify-content-center" >

                                <li  class="d-none d-sm-block" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                                    <a style="color: blue" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>قبلی</a>
                                </li>

                                <?php
                                if ($total_no_of_pages <= 6){
                                    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                        if ($counter == $page_no) {
                                            echo "<li class='active'><a>$counter</a></li>";
                                        }else{
                                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                        }
                                    }
                                }
                                elseif($total_no_of_pages > 6){

                                    if($page_no <= 4) {
                                        for ($counter = 1; $counter < 8; $counter++){
                                            if ($counter == $page_no) {
                                                echo "<li class='active'><a>$counter</a></li>";
                                            }else{
                                                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                            }
                                        }
                                        echo "<li><a>...</a></li>";
                                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                    }

                                    elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                                        echo "<li><a href='?page_no=1'>1</a></li>";
                                        echo "<li><a href='?page_no=2'>2</a></li>";
                                        echo "<li><a>...</a></li>";
                                        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                                            if ($counter == $page_no) {
                                                echo "<li class='active'><a>$counter</a></li>";
                                            }else{
                                                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                            }
                                        }
                                        echo "<li><a>...</a></li>";
                                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                    }

                                    else {
                                        echo "<li><a href='?page_no=1'>1</a></li>";
                                        echo "<li><a href='?page_no=2'>2</a></li>";
                                        echo "<li><a>...</a></li>";

                                        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                            if ($counter == $page_no) {
                                                echo "<li class='active'><a>$counter</a></li>";
                                            }else{
                                                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                            }
                                        }
                                    }
                                }
                                ?>

                                <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                                    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>بعدی</a>
                                </li>
                                <?php if($page_no < $total_no_of_pages){
                                    echo "<li><a href='?page_no=$total_no_of_pages'>آخرین";
                                } ?>
                            </ul>




                        <div style="visibility: hidden" >
                            <ul  >
                                <li >
                                    <a></a>
                                </li>

                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-search primary-bg px-3">
                            <div class="widget-header">
                                <h5>جستجو در محصولات</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="جستجو...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-category primary-bg px-3">
                            <div class="widget-header">
                                <h5>دسته بندی ها</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="lab-ul shop-menu">
                                    <li>
                                        <a href="#0" >کفش</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">کفش چرم</a></li>
                                            <li><a href="#">کفش جیر</a></li>
                                            <li><a href="#">کفش اسپرت</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">کیف</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">کیف چرم</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">لباس</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">پیراهن</a></li>
                                            <li><a href="#">شلوار</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">کلاه</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">کلاه 1</a></li>
                                            <li><a href="#">کلاه 2</a></li>
                                            <li><a href="#">کلاه 3</a></li>
                                            <li><a href="#">کلاه 4</a></li>
                                            <li><a href="#">کلاه 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">کاپشن</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">کاپشن 1</a></li>
                                            <li><a href="#">کاپشن 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">شلوارک</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">شلوارک 1</a></li>
                                            <li><a href="#">شلوارک 2</a></li>
                                            <li><a href="#">شلوارک 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">تی شرت</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a href="#">تی شرت 1</a></li>
                                            <li><a href="#">تی شرت 2</a></li>
                                            <li><a href="#">تی شرت 3</a></li>
                                            <li><a href="#">تی شرت 4</a></li>
                                            <li><a href="#">تی شرت 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget-post primary-bg px-3">
                            <div class="widget-header">
                                <h5>آخرین محصولات</h5>
                            </div>
                            <?php while ($sidebar_product = mysqli_fetch_array($sidebar_products)) { ?>
                            <ul class="lab-ul widget-wrapper">
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="product.php?product-id=<?php echo $sidebar_product['id'] ?>"><img src="assets/images/product/<?php echo $sidebar_product['product_image'] ?>" alt=""></a>
                                    </div>
                                    <div class="post-content ps-3">
                                        <a href="post.php">
                                            <h6><a href="product.php?product-id=<?php echo $sidebar_product['id'] ?>"><?php echo $sidebar_product['product_name'] ?></a></h6>
                                        </a>
                                        <div class="rating">
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                            <span><a href="#"><i class="far fa-star"></i></a></span>
                                        </div>
                                        <h6><?php echo $sidebar_product['product_price'] ?> تومان</h6>
                                    </div>
                                </li>

                                <?php } ?>
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
<?php require_once 'sections/footer.php' ?>
</body>

</html>