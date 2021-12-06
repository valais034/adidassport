<?php
/*
 * Theme Name: TEMPLATE2
 * Theme URI: http://GOOGLE.COM
 * Author:امین کریمی
 * Author URI: http://GOOGLE.COM
 * Description: این قالب برای سایت http://GOOGLE.COM طراحی شده
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>آموزش قالب سازی داینامیک php</title>
    <link href="<?=get_template_uri()?>css/style.css" rel="stylesheet">
    <link href="<?=get_template_uri()?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=get_template_uri()?>css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="<?=get_template_uri()?>css/font-awesome.min.css">
    <style>
        html, body, #hero, #overlay {
            height: 100%;
            width: 100%;
            min-height: 100%;
            min-width: 100%;
            margin: 0;
            padding: 0;
        }

        #hero { background: url(https://s3.amazonaws.com/uploads.hipchat.com/21309/369069/P3rXUVfLuQGvv7N/bw.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        #overlay {
            -o-animation: colorcycle 20s infinite;
            -moz-animation: colorcycle20s infinite;
            -webkit-animation: colorcycle 20s infinite;
            animation: colorcycle 20s infinite;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            filter: alpha(opacity=50);
            -moz-opacity: 0.5;
            -khtml-opacity: 0.5;
            opacity: 0.5;
        }


        @-o-keyframes colorcycle {
            0%   {background: #a24de3;}
            25%  {background: #00aeff;}
            50%  {background: #f45a4a;}
            75%  {background: #4fd1cd;}
            100% {background: #a24de3;}
        }

        @-moz-keyframes colorcycle {
            0%   {background: #a24de3;}
            25%  {background: #00aeff;}
            50%  {background: #f45a4a;}
            75%  {background: #4fd1cd;}
            100% {background: #a24de3;}
        }

        @-webkit-keyframes colorcycle {
            0%   {background: #a24de3;}
            25%  {background: #00aeff;}
            50%  {background: #f45a4a;}
            75%  {background: #4fd1cd;}
            100% {background: #a24de3;}
        }

        @keyframes colorcycle {
            0%   {background: #a24de3;}
            25%  {background: #00aeff;}
            50%  {background: #f45a4a;}
            75%  {background: #4fd1cd;}
            100% {background: #a24de3;}
        }
        .posts
        {
          float: left !important;
          margin: 7px !important;
        }
    </style>
</head>
<body>

      <div style="margin:right;"><img src="<?= get_template_uri(); ?>images/header.jpg"  style="margin:60px;"></div>



<div class="content">

    <div class="panel1">

        <div class="menu">
            <p style="padding-top:10px;padding-right:20px;padding-bottom:5px;">دسته ها</p>
            <div style="width:90%;height:3px;background:#c4baee;margin:auto;"></div>

            <ul class="li-menu">


                    <li><a href=""></a></li>

            </ul>
            <div style="padding-bottom:10px;"></div>
        </div>

        <div class="menu">
            <p style="padding-top:10px;padding-right:20px;padding-bottom:5px;">آخرین مطالب</p>
            <div style="width:90%;height:3px;background:#efb0ad;margin:auto;"></div>

            <ul class="li-menu">
                <li>آموزش برنامه نویسی</li>
                <li>آموزش برنامه نویسی</li>
            </ul>
            <div style="padding-bottom:10px;"></div>
        </div>
</div>

             <?php
             if(have_posts())
             {
               while(have_post())
               {
                 the_post();
                ?>
                 <div class="posts">
                    <p style="padding-top:10px;padding-right:20px;padding-bottom:10px;font-family:BYekan;">
                    <a href="<?= post_url(); ?>"><?= post_title(); ?></a></p>
                    <div style="width:95%;height:3px;background:#15E31E;margin:auto;"></div>
                    <div style="width:500px;margin:50px auto;"><img src="<?= get_template_uri(); ?>images/aa.jpg" style="width:500px;"></div>
                    <div class="post_text">
                    <?= post_content(); ?>
                </div>

               <div class="more">توضیحات بیشتر</div>
               <div style="padding-bottom:30px;"></div>
           </div>
           <?php
            }
           }
           else
           {
             ?>
             <div style="text-align:center;color:red;">پستی وجود ندارد</div>
             <?php
           }

       ?>


           <div style="color:red;"></div>

<div style="clear:both"></div>
</div>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Company<span>logo</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">Blog</a>
            ·
            <a href="#">Pricing</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>21 Revolution Street</span> Paris, France</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+1 555 123456</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>

</body>
</html>
