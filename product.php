<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
if ($_GET['product-id']) {
    $product_id = $_GET['product-id'];
    $product_info = mysqli_fetch_array(get_product_by_id($product_id));
}


$pcomments = get_comments_by_product_id($product_id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product_info['product_name'] ?></title>
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

<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">محصول <?php echo $product_info['product_name'] ?> </h4>

        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->
<!-- Shop Page Section start here -->
<section class="shop-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-thumb">
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-navigation d-flex flex-wrap">
                                        <div class="shop-nav shop-slider-prev"><i class="icofont-simple-left"></i>
                                        </div>
                                        <div class="shop-nav shop-slider-next"><i class="icofont-simple-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/<?php echo $product_info['product_image'] ?>" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h4><?php echo $product_info['product_name'] ?></h4>
                                <h6 class="mb-3">
                                    دسته‌بندی: <?php echo $product_info['product_cat'] ?>
                                </h6>

                                <p class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    (3 امتیاز)
                                </p>
                                <h5 class="mb-3">
                                    قیمت محصول: <?php echo $product_info['product_price'] ?> تومان </h5>
                                <h5>
                                    درباره این محصول:
                                </h5>
                                <p>
                                    <?php echo $product_info['product_desc'] ?>
                                </p>
                                <form>
                                    <div class="select-product size">
                                        <select>
                                            <option>Select Size</option>
                                            <option>SM</option>
                                            <option>MD</option>
                                            <option>LG</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="select-product color">
                                        <select>
                                            <option>Select Color</option>
                                            <option>Pink</option>
                                            <option>Ash</option>
                                            <option>Red</option>
                                            <option>White</option>
                                            <option>Blue</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                    <div class="discount-code">
                                        <input type="text" placeholder="Enter Discount Code">
                                    </div>
                                    <button type="submit" class="lab-btn" style="background: #008903"><a href="?add-to-cart=<?php echo $product_info['id'] ?>">افزودن به سبد خرید</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <ul class="agri-ul review-nav">
                        <li class="desc" data-target="description-show">توضیحات</li>
                        <li class="rev active" data-target="review-content-show">نظرات</li>
                    </ul>
                    <div class="review-content review-content-show">
                        <div class="review-showing">
                            <ul class="agri-ul content">
                                <li>
                                    <div class="post-thumb">
                                        <img src="assets/images/profile/profile.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
<!--                                        --><?php //while ($pcomment = mysqli_fetch_array($pcomments)) { ?>
<!--                                            <div id="comment-item-1" class="comment">-->
<!--                                                <div class="comment-username">--><?php //echo $pcomment['username'] ?><!--</div>-->
<!--                                                <div class="comment-date">۱۲ فروردین ۱۳۹۶</div>-->
<!--                                                <div class="comment-text"><p>--><?php //echo $pcomment['comment_text'] ?><!--</p></div>-->
<!--                                                --><?php //if ($pcomment['comment_answer']) { ?>
<!--                                                    <div class="comment-answer">--><?php //echo $pcomment['comment_answer'] ?><!--</div>-->
<!--                                                --><?php //} ?>
<!--                                            </div>-->
<!--                                        --><?php //} ?>
                                        <div class="entry-meta">
                                            <?php while ($pcomment = mysqli_fetch_array($pcomments)) { ?>
                                            <div class="posted-on">
                                                <a href="#"><?php echo $pcomment['username'] ?></a>
                                                <p> در 12 فروردین 1399</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php echo $pcomment['comment_text'] ?></p>
                                        </div>
                                        <?php if ($pcomment['comment_answer']) { ?>
                                            <div class="comment-answer"><?php echo $pcomment['comment_answer'] ?></div>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="assets/images/team/05.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Jonathan Doe</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="assets/images/team/06.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Mack Zucky</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="assets/images/team/05.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Jordi Albae</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="client-review">
                                <div class="review-form">
                                    <div class="review-title">
                                        <h5>Add a Review</h5>
                                    </div>
                                    <form action="product.php?product-id=<?php echo $product_id ?>" method="post">
                                        <div class="col-md-4 col-12">
                                            <input type="text" name="username" placeholder="نام ...">
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <input type="email" name="email" placeholder="ایمیل ...">
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="rating">
                                                <span class="rating-title">Your Rating : </span>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <textarea rows="4" name="comment_text" placeholder="متن نظر شما ..."></textarea><br>
                                        </div>
                                        <div class="col-12">
                                            <button class="lab-btn" type="submit" name="add-comment">ثبت نظر</button>
<!--                                            <input type="submit" name="add-comment" value="ثبت نظر">-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p> <?php echo $product_info['product_desc'] ?></p>
                            <div class="post-item">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Page Section ending here -->


<div id="main">
    <div class="product-page">
        <div class="box">
            <div class="single-product">
                <div class="product-info">
                    <div class="product-image"><img src="images/<?php echo $product_info['product_image'] ?>" alt=""></div>
                    <div class="product-title"><?php echo $product_info['product_name'] ?></div>
                    <div class="product-category">دسته‌بندی: <?php echo $product_info['product_cat'] ?></div>
                    <div class="product-comments">۱۸ نظر</div>
                    <div class="product-buy">
                        <div class="product-price"><?php echo $product_info['product_price'] ?> تومان</div>
                        <div class="add-to-cart-button"><a href="?add-to-cart=<?php echo $product_info['id'] ?>">افزودن به سبد خرید</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="product-desc"><?php echo $product_info['product_desc'] ?></div>
            </div>

        </div>
        <div class="box comments">
            <div class="comments-list">

                <?php while ($pcomment = mysqli_fetch_array($pcomments)) { ?>
                    <div id="comment-item-1" class="comment">
                        <div class="user-image"><img src="images/2.jpg" alt=""></div>
                        <div class="comment-username"><?php echo $pcomment['username'] ?></div>
                        <div class="comment-date">۱۲ فروردین ۱۳۹۶</div>
                        <div class="comment-text"><p><?php echo $pcomment['comment_text'] ?></p></div>
                        <?php if ($pcomment['comment_answer']) { ?>
                            <div class="comment-answer"><?php echo $pcomment['comment_answer'] ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
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
            <form action="product.php?product-id=<?php echo $product_id ?>" method="post">
                <input type="text" name="username" placeholder="نام ...">
                <input type="email" name="email" placeholder="ایمیل ..."><br>
                <textarea name="comment_text" placeholder="متن نظر شما ..."></textarea><br>
                <input type="hidden" name="product-id" value="<?php echo $product_id ?>">
                <input type="submit" name="add-comment" value="ثبت نظر">
            </form>
        </div>
    </div>

    <?php require_once 'sections/sidebar.php' ?>

</div>

<div class="clear"></div>
<?php require_once 'sections/footer.php' ?>


</body>
</html>