<?php
/*
 * Theme Name: TEMPLATE3
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
        html, body {
            height: 100%;
            width: 100%;
            min-height: 100%;
            min-width: 100%;
            margin: 0;
            padding: 0;
        }


       
        
        .posts
        {
          float: right !important;
          margin: 7px !important;
        }
    </style>
</head>
<body>

      



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

<h2 style="text-align: center; color: #fff;">تمامی حقوق متعلق به این وب سایت است!!!</h2>

    

</footer>

</body>
</html>
