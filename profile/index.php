<?php require_once '../inc/config.php'; ?>
<?php
if (!is_login()) {
    redirect('../login.php');
}
$user_data = get_userdata();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>سلام، <?php echo $user_data['display_name'] ?></title>
<!--    <link rel="stylesheet" href="../assets/css/styles.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/x-icon/01.png">

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>

<?php require_once '../sections/headerforuser.php'; ?>





<link href="dashboard.css" rel="stylesheet">
</head>


<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">آدیداس اسپورت</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="http://localhost/adidassport/profile/index.php?logout=1">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="edit-profile.php">
                            <span data-feather="home"></span>
                            داشبورد
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="edit-profile.php">
                            <span data-feather="file"></span>
                            ویرایش پروفایل
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">سلام، <?php echo $user_data['display_name'] ?></h1>
                <div class="user-image">
                    <?php if ($user_data['user_image']) { ?>
                        <img src="../../images/profile/<?php echo $user_data['user_image'] ?>" alt="<?php echo $user_data['display_name'] ?>">
                    <?php } else { ?>
                        <img src="../assets/images/del.png" alt="پروفایل کاربری">
                    <?php } ?>

                </div>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>



            <div id="header">
                <div id="top-nav">
                </div>

            </div>

            <div id="logo">
            </div>

            <div id="main" class="profile">


                <div class="box">
                    <div class="profile-info">
                        <div class="user-image">
                            <?php if ($user_data['user_image']) { ?>
                                <img src="../assets/images/profile/<?php echo $user_data['user_image'] ?>" alt="<?php echo $user_data['display_name'] ?>">
                            <?php } else { ?>
                                <img src="../assets/images/profile/profile.jpg" alt="پروفایل کاربری">
                            <?php } ?>

                        </div>
                        <div class="user-info">
                            <ul>
                                <li>نام کاربر: <?php echo $user_data['display_name'] ?></li>
                                <li>آدرس ایمیل: <?php echo $user_data['email'] ?></li>
                                <li>آدرس:

                                    <?php
                                    if ($user_data['user_address']) {
                                        echo $user_data['user_address'];
                                    } else {
                                        echo "<span class='red-text'>از قسمت ویرایش، آدرس خود را وارد کنید ...</span>";
                                    } ?>

                                </li>
                                <li>شماره تماس:

                                    <?php
                                    if ($user_data['user_number']) {
                                        echo $user_data['user_number'];
                                    } else {
                                        echo "<span class='red-text'>از قسمت ویرایش، شماره‌ی تماس خود را وارد کنید ...</span>";
                                    } ?>

                                </li>
                            </ul>
                            <a href="edit-profile.php">ویرایش پروفایل</a>
                        </div>
                    </div>
                </div>

                <div id="sidebar">
                    <div class="sidebar-item">
                        <ul>
                            <li><a href="index.php">پروفایل</a></li>
                            <li><a href="orders.php">سفارش ها</a></li>
                            <li><a href="edit-profile.php">ویرایش</a></li>
                            <li><a href="?logout=1">خروج</a></li>
                        </ul>
                    </div>
                </div>

            </div>





<!--            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

<!--            <h2>Section title</h2>-->
<!--            <div class="table-responsive">-->
<!--                <table class="table table-striped table-sm">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th scope="col">#</th>-->
<!--                        <th scope="col">Header</th>-->
<!--                        <th scope="col">Header</th>-->
<!--                        <th scope="col">Header</th>-->
<!--                        <th scope="col">Header</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td>1,001</td>-->
<!--                        <td>random</td>-->
<!--                        <td>data</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>text</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,002</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>irrelevant</td>-->
<!--                        <td>visual</td>-->
<!--                        <td>layout</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,003</td>-->
<!--                        <td>data</td>-->
<!--                        <td>rich</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>tabular</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,003</td>-->
<!--                        <td>information</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>illustrative</td>-->
<!--                        <td>data</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,004</td>-->
<!--                        <td>text</td>-->
<!--                        <td>random</td>-->
<!--                        <td>layout</td>-->
<!--                        <td>dashboard</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,005</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>irrelevant</td>-->
<!--                        <td>text</td>-->
<!--                        <td>placeholder</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,006</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>illustrative</td>-->
<!--                        <td>rich</td>-->
<!--                        <td>data</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,007</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>tabular</td>-->
<!--                        <td>information</td>-->
<!--                        <td>irrelevant</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,008</td>-->
<!--                        <td>random</td>-->
<!--                        <td>data</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>text</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,009</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>irrelevant</td>-->
<!--                        <td>visual</td>-->
<!--                        <td>layout</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,010</td>-->
<!--                        <td>data</td>-->
<!--                        <td>rich</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>tabular</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,011</td>-->
<!--                        <td>information</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>illustrative</td>-->
<!--                        <td>data</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,012</td>-->
<!--                        <td>text</td>-->
<!--                        <td>placeholder</td>-->
<!--                        <td>layout</td>-->
<!--                        <td>dashboard</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,013</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>irrelevant</td>-->
<!--                        <td>text</td>-->
<!--                        <td>visual</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,014</td>-->
<!--                        <td>dashboard</td>-->
<!--                        <td>illustrative</td>-->
<!--                        <td>rich</td>-->
<!--                        <td>data</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>1,015</td>-->
<!--                        <td>random</td>-->
<!--                        <td>tabular</td>-->
<!--                        <td>information</td>-->
<!--                        <td>text</td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
        </main>
    </div>
</div>







<div class="clear"></div>

</body>
</html>