<?php
require_once ('../config.php');
require_once ('../connect.php');
require_once ('sidebar.php');
require_once ('header.php');
require_once ('function.php');
require_once ('coding.php');
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>پنل مدیریت</title>
    <link href="css/admin.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>

</head>

<body>

<div id="box1">

        <!-- <div style="float:right">
          <div style="width:400px;height:300px;border:1px solid #ffffff;margin-top:30px;margin-right:50px;">
             <img src="" width="400" height="300">
          </div>
        </div>

        <div style="float:right;margin-top:25px;margin-right:30px;">

            <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
                <span style="padding-right:30px;">نام قالب : </span>
            </div>

            <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
                <span style="padding-right:30px;">طراح قالب : </span>
            </div>

            <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
                <span style="padding-right:30px;">سایت قالب : </span>
            </div>

            <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
                <span style="padding-right:30px;">توضیحات : </span>
            </div>

            <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:80px;padding-top:7px;padding-bottom:7px;">
                <div style="float:right;width:120px;height:30px;line-height:27px;background:#48ADFF;text-align:center;color:#ffffff;text-align:center;font-family:BYekan;"><a href="">فعال سازی قالب</a></div>
                <div style="float:right;width:120px;height:30px;line-height:27px;background:red;margin-right:20px;text-align:center;color:#ffffff;text-align:center;font-family:BYekan;" style="float:right;width:100px;"><a href="">پیش نمایش قالب</a></div>
            </div>

        </div> -->


       <div style="color:red;text-align:center;padding-top:40px;">اگر قالبی در ساختار فشرده (zip) دارید٬ می‌توانید با بارگذاری آن در این بخش٬ آن‌را نصب کنید.</div>
       <div style="width:400px;height:50px;margin:50px auto">
        <form  method="post" enctype="multipart/form-data" >
            <input type="file" name="zip_file">
            <input type="submit" value="نصب">
        </form>

        </div>
        <div style="color:red;padding-top:30px;padding-right:150px;"></div>

    <div style="clear:both;padding-bottom:20px;"></div>
</div>

</body>
</html>
