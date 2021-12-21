<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$posts= get_posts(6);
$post_cats = get_post_cats();
$number_of_posts = mysqli_query($db, "SELECT * FROM posts");
$sidebar_posts = get_posts(3);
?>
<html>
<head>
    <title>How to Create Pagination Using PHP and MySQLi</title>
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

<!-- Blog Section Start Here -->
<div class="blog-section blog-page padding-tb aside-bg">
    <div class="container">

        <div class="section-wrapper">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-12">
                    <?php

                    $total_records_per_page = 5;
                    $offset = ($page_no-1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2";

                    $result_count = mysqli_query($db,"SELECT COUNT(*) As total_records FROM posts ");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total page minus 1

                    $result = mysqli_query($db,"SELECT * FROM posts LIMIT $offset, $total_records_per_page");
                    ?>
                    <article>
                        <?php while($row = mysqli_fetch_array($result)){  ?>
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb rounded">
                                    <a href="post.php">
                                        <a href="post.php?post-id=<?php echo $row['id'] ?>"><img src="assets/images/post/<?php echo $row['post_image'] ?>" alt=""></a>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="post.php">
                                        <h3><a href="post.php?post-id=<?php echo $row['id'] ?>"><?php echo $row['post_title'] ?></a></h3>
                                    </a>
                                    <ul class="lab-ul post-date">
                                        <li><span><i class="icofont-ui-calendar"></i> October 9, 2019 10:59 am
												</span></li>
                                        <li><span><i class="icofont-user"></i><a href="#">Robot Smith</a></span>
                                        </li>
                                        <li><span><i class="icofont-speech-comments"></i><a href="#">09
														Comments</a></span></li>
                                    </ul>
                                    <!--										<p>--><?php //echo substr($post['post_desc'],0,25) ?><!--...</p>-->
                                    <p><?php
                                        mb_internal_encoding('UTF-8');
                                        echo  mb_substr($row['post_desc'],0,180)
                                        ?>...</p>
                                    <a href="post.php?post-id=<?php echo $row['id'] ?>" class="lab-btn">ادامه مطلب</a>
                                </div>

                            </div>
                            <?php }
                            mysqli_close($db); ?>
                        </div>

                        <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                            <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
                        </div>

                        <div style="width:700px; margin:0 auto;">

                            <h3>صفحه بندی </h3>

                            <ul class="pagination">

                                <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                                    <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                                </li>

                                <?php
                                if ($total_no_of_pages <= 5){
                                    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                        if ($counter == $page_no) {
                                            echo "<li class='active'><a>$counter</a></li>";
                                        }else{
                                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                        }
                                    }
                                }
                                elseif($total_no_of_pages > 5){

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
                                    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                                </li>
                                <?php if($page_no < $total_no_of_pages){
                                    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                                } ?>
                            </ul>


                        </div>


                    </article>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog Section ENding Here -->



</body>
</html>