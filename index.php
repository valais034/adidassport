<?php
require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$posts = get_posts(3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>فروشگاه آدیداس</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 4, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
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


    <!-- ==========Banner Section start Here========== -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-wrapper shape-a">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="banner-content">
                            <ul id="countdown" class="countdown count-down" data-date="Jan 20, 2022 21:14:01">
                                <li class="clock-item"><span class="count-number seconds">19</span>
                                    <p class="count-text">ثانیه</p>
                                </li>
                                <li class="clock-item"><span class="count-number minutes">25</span>
                                    <p class="count-text">دقیقه</p>
                                </li>
                                <li class="clock-item"><span class="count-number hours">16</span>
                                    <p class="count-text">ساعت</p>
                                </li>
                                <li class="clock-item"><span class="count-number days">20</span>
                                    <p class="count-text">روز</p>
                                </li>
                            </ul>
                            <h1>حراج  آدیداس
                                <br>تا 30 دی ماه</h1>
                            <p>در شعبات استان تهران</p>
                            <a href="users/registration.php" class="lab-btn"><span>همین حالا ثبت نام کنید</span> </a>
                            <!--<div class="event-sponsored">
                                <p>اسپانسر توسط </p>
                                <img src="assets/images/banner/02.png" alt="sponsor">
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner-image">
                            <img src="assets/images/banner/01.png" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section end Here========== -->

    <!-- ==========About Section start Here========== -->
    <section class="about-section padding-tb padding-b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-image">
                        <img src="assets/images/about/01.jpg" alt="about image">
                        <a href="assets/images/NEW2.mp4" class="play-btn" data-rel="lightcase">
                            <i class="icofont-ui-play"></i>
                            <span class="pluse_2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>نمایشگاه بزرگ آدیداس</h2>
                        <p>جمعی از فروشندگان برتر آدیداس گرد هم می آیند.</p>
                    </div>
                    <div class="section-wrapper text-center">
                        <p>در این گردهمایی انواع محصولات آدیداس عرضه و رونمایی می گردند. در این گردهمایی عموم مردم می توانند ثبت نام و سپس شرکت کنند. نمایشگاه فروش محصولات آدیداس در انتهای هر فصل بصورت تجمیعی برگزار
                        می شود. ما می توانیم بهترین محصولاتمان را در این نمایشگاه برای شما نمایش دهیم.</p>
                        <div class="about-btn-grp">
                            <a href="users/registration.php" class="lab-btn "><span>ثبت نام فروشندگان</span> </a>
                            <a href="pricing-plan.html" class="lab-btn"><span>ثبت نام بازدیدکنندگان</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section end Here========== -->

    <!-- ==========schedule Section start Here========== -->
    <section class="schedule-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header">
                <h2>ایونت های آینده</h2>
                <p>ایونت های چند روز اخیر را مشاهده نمایید. در صورت تمایل میتوانید حضور به هم رسانید.</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row gx-4 gy-5">
                    <div class="col-lg-6">
                        <div class="schedule-left schedule-pack">
                            <h5> بهمن 1400</h5>
                            <div class="schedule-list" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کفش های پاییزی زنانه (2 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد. در این ایونت از فروشندگان برتر دعوت به عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>علی رضایی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>18 الی 19</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کفش های پاییزی مردانه (3 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد. در این ایونت از فروشندگان برتر
                                                دعوت به عمل آمده و ایونتی خاص می باشد.</p>

                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>مراد صفایی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>19 الی 21 </li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کیف های اسپرت مردانه (4 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>

                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>علی رضایی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>17 الی 19</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی فرمانیه</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="true" aria-controls="collapseFour">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">ایونت کیف های اسپرت زنانه (5 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>علی رضایی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>19 الی 21</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="true" aria-controls="collapseFive">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">

                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کفش کلاسیک مردانه (6 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>حسین نیک پور</li>
                                                <li><span><i class="icofont-clock-time"></i></span>19 الی 20:30</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی قیطریه</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت سوئیشرت اسپرت (8 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>حسین نباتی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>18 الی 20</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="true" aria-controls="collapseSeven">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کلی کفش اسپرت (8 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>حسین مظلومی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>18 الی 20</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="true" aria-controls="collapseEight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">ایونت اکسسوری (9 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>حسین نباتی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>18 الی 20</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی تجریش</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="true" aria-controls="collapseNine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                    </span>
                                                </span>
                                                <span class="h7">ایونت کفش های کژوال کلاسیک (12 بهمن)</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>این ایونت متشکل از کفش های آدیداس زنانه در مدل های پاییزی می باشد.
                                                در این ایونت از فروشندگان برتر دعوت به
                                                عمل آمده و ایونتی خاص می باشد.</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>علی رضایی</li>
                                                <li><span><i class="icofont-clock-time"></i></span>19 الی 20:30</li>
                                                <li><span><i class="icofont-location-pin"></i></span>نمایندگی جردن</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="schedule-right schedule-pack">
                            <h5>اسفند 1400</h5>
                            <div class="schedule-list" id="accordionExample-2">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-One">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-One"
                                            aria-expanded="true" aria-controls="collapse-One">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">
                                                    <span class="child-thumb">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-One" class="accordion-collapse collapse"
                                        aria-labelledby="heading-One" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Two">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Two"
                                            aria-expanded="true" aria-controls="collapse-Two">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/02.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Two" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Two" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Three">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Three"
                                            aria-expanded="true" aria-controls="collapse-Three">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/03.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Three" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Three" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Four">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Four"
                                            aria-expanded="true" aria-controls="collapse-Four">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Lunch Brack</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Four" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Four" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Five">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-Five" aria-expanded="true"
                                            aria-controls="collapse-Five">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/05.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/06.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Registration & Breakfast</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Five" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-Five" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Six">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Six"
                                            aria-expanded="true" aria-controls="collapse-Six">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/06.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Digital Event Information</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Six" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Six" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Seven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Seven"
                                            aria-expanded="true" aria-controls="collapse-Seven">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/07.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Reinventing Experiences</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Seven" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Seven" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Eight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Eight"
                                            aria-expanded="true" aria-controls="collapse-Eight">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/04.png" alt="speaker">

                                                </span>
                                                <span class="h7">Dinner Break</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Eight" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Eight" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading-Nine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-Nine"
                                            aria-expanded="true" aria-controls="collapse-Nine">
                                            <span class="accor-header-inner d-flex flex-wrap align-items-center">
                                                <span class="accor-thumb">
                                                    <img src="assets/images/event/member/08.png" alt="speaker">
                                                    <span class="child-thumb">
                                                        <img src="assets/images/event/member/02.png" alt="speaker">
                                                    </span>
                                                    <span class="child-thumb-2">
                                                        <img src="assets/images/event/member/03.png" alt="speaker">
                                                    </span>
                                                </span>
                                                <span class="h7">Live Music Performance</span>
                                            </span>

                                        </button>
                                    </div>
                                    <div id="collapse-Nine" class="accordion-collapse collapse"
                                        aria-labelledby="heading-Nine" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body">
                                            <p>Phosrescen ntiate prncple centered networks via magnetc
                                                Apildous eviscuate standards complant fulys tested metrs
                                                without creative desi futureproof web</p>
                                            <ul class="ev-schedule-meta d-flex flex-wrap">
                                                <li><span><i class="icofont-user"></i></span>Diane, Cuning</li>
                                                <li><span><i class="icofont-clock-time"></i></span>8:00am - 9:00am</li>
                                                <li><span><i class="icofont-location-pin"></i></span>Summer C</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="schedule-btns text-center mt-5">
                    <a href="#" class="lab-btn">دانلود جدول زمانبندی ایونت ها (PDF)</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========schedule Section end Here========== -->


    <!-- Speakers section start here -->
    <section class="speakers-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>نمایندگی ها</h2>
                <p>نمایندگان ما را در زیر مشاهده کنید</p>
            </div>
            <div class="section-wrapper shape-b">
                <div class="row g-5">
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/02.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="#">نمایندگی شماره 1</a> </h5>
                                        <p>آقای علی مرادی</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>یکی از برترین و کامل ترین فروشگاه های آدیداس در سراسر کشور</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/03.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="#">نمایندگی شماره 2 </a> </h5>
                                        <p>آقای رضا مسعودی</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>یکی از نمایندگی های جامع محصولات آدیداس و برترین فروشنده در حوزه کیف و کفش</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/06.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="#">نمایندگی شماره 3</a> </h5>
                                        <p>آقای علی غضنفری</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>این نمایندگی دارای محصولات متنوعی شامل کیف، کفش، لباس و اکسسوری می باشد و همواره تلاش میکند تنوع خود را بیش تر کند.</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="assets/images/speakers/03.png" alt="speaker">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a href="#">نمایندگی شماره 4</a> </h5>
                                        <p>آقای رضا مسعودی</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>تنوعی کامل از کفش های اسپرت و کلاسیک آدیداس، به همراه اکسسوری های آدیداس</p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="download-button text-center mt-5">
                    <a class="lab-btn">مشاهده نمایندگی های بیشتر...</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Speakers section end here -->

    <!-- ======= Sponsor sectin start here ======== -->
    <section class="sponsor-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="section-header">
                <h2>همکاران آدیداس</h2>
                <p>آدیداس در سطح کشور دارای همکاران بی نظیری می باشد</p>
            </div>
            <div class="section-wrapper text-center shape-b">
                <div class="all-sponsor">
                    <div class="platinum-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/01.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/02.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/03.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="gold-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/04.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/05.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/06.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/07.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/08.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/09.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/10.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/11.jpg" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="silver-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/12.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/13.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/14.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/15.jpg" alt="sponsor">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/16.jpg" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="lab-btn"><span>
                        همکاری با آدیداس
                    </span></a>
            </div>
        </div>
    </section>
    <!-- ======= Sponsor sectin end here ======== -->

    <!-- ===== Pricing Plan Start here  ==== -->
    <section class="pricing-plan-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>پکیج های آدیداس</h2>
                <p>پکیج های انتخابی در دسته بندی های مختلف</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>اقتصادی</h3>
                                    <p>روزمره و کلاسیک</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد هودی کلاسیک مدل M2
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد شلوار ورزشی کلاسیک مدل H326
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد کلاه ورزشی کلاسیک مدل cap63
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد دستبند ورزشی مدل ecco
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد شرت ورزشی کوتاه مدل U324
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد کیف پول اسپرت مدل wallet mini
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>2400000T</h4>
                                                    <p>قیمت
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>خرید پکیج </p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>مدرن</h3>
                                    <p>ورزشی و مخصوص ورزشکاران</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span>  یک عدد هودی کلاسیک مدل M2
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد شلوار ورزشی کلاسیک مدل H326
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد کلاه ورزشی کلاسیک مدل cap63
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد دستبند ورزشی مدل ecco
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span>  یک عدد شرت ورزشی کوتاه مدل U324
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد کیف پول اسپرت مدل wallet mini
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>3750000T</h4>
                                                    <p>قیمت</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>خرید پکیج</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>ویژه</h3>
                                    <p>مخصوص خاص پسندان</p>

                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد هودی کلاسیک مدل M2
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد شلوار ورزشی کلاسیک مدل H326
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span>  یک عدد کلاه ورزشی کلاسیک مدل cap63
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span>  یک عدد دستبند ورزشی مدل ecco
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد شرت ورزشی کوتاه مدل U324
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> یک عدد کیف پول اسپرت مدل wallet mini
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>5300000T</h4>
                                                    <p>قیمت</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>خرید پکیج</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Pricing Plan end here  ==== -->

    <!-- ===== Event Gift start here  ==== -->
    <!--<section class="event-gift-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 col-12">
                    <div class="section-header">
                        <h2>Event Gifts</h2>
                        <p>Our Complimentary Gifts For You</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="gift-content">
                            <p>
                                It is a long established fact that a reader will be distracted by theing
                                readable content of a page when looking at its layout. The point info
                                using Lorem Ipsum is that it has a more-or-less
                            </p>
                            <ul class="gift-list">
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Exclusive T-shirt</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Lather Bag</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Mug</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Gift Hamper</li>
                            </ul>
                            <div class="register-button">
                                <a href="#" class="lab-btn"><span>Register Now</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-part">
                        <img src="assets/images/gift/01.png" alt="gift-img">
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ===== Event Gift end here  ==== -->

    <!-- ===== News Section Start here  ==== -->
    <section class="news-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>اخبار روز</h2>
                <p>از جدیدترین اخبار باخبر باشید</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <?php while ($post = mysqli_fetch_array($posts)) { ?>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <a href="post.php?post-id=<?php echo $post['id'] ?>"><img src="assets/images/post/<?php echo $post['post_image'] ?>" alt=""></a>
                                </div>
                                <div class="news-content">
                                    <h6><a href="post.php?post-id=<?php echo $post['id'] ?>"><?php echo $post['post_title'] ?></a>
                                    </h6>
                                    <p><span><i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span> 14 آذر 1400</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== News Section end here  ==== -->

    <!-- Footer Section start here -->
    <?php require_once 'sections/footer.php' ?>
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
</body>

</html>