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
    <style>
    .div1{
      width: 100px;
      height: 100px;
      background: white;
      border: 2px dotted orange;
    }
    .input1{
      opacity: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      margin: -67px 10px;
    }
    .tem{
      color: orange;
      font-size: 22px;
    }
    .plus{
      text-align: center;
      font-size: 22px;
      margin: 0 40px;
      color: red;

    }
    </style>


</head>

<body>
  <?php  if(isset($_FILES['zip_file'])){ $msg=upload($_FILES['zip_file']); } ?>

  <div id="box1">
  <?php if(isset($_GET['Template']))
  { ?>

      <div style="float:right">
        <?php
        $Template_directory=$_GET['Template'];
        $file='../theme/'.$Template_directory.'/theme_img.png';
        if(file_exists($file))
        {
        ?>
        <div style="width:400px;height:300px;border:1px solid #ffffff;margin-top:30px;margin-right:350px;">
            <img src="<?= $file?>" width="400" height="250">
        </div>
        <?php
      }
      ?>
      </div>

          <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
              <span style="padding-right:30px;">نام قالب : </span><span><?=str_replace('*','',get_info('../theme/'.$Template_directory.'/index.php')['Theme Name']); ?></span>
          </div>

          <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
              <span style="padding-right:30px;">طراح قالب : </span><span><?=str_replace('*','',get_info('../theme/'.$Template_directory.'/index.php')['Author']); ?></span>
          </div>

          <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
              <span style="padding-right:30px;">سایت قالب : </span><span><?=str_replace('*','',get_info('../theme/'.$Template_directory.'/index.php')['Theme URI']); ?></span>
          </div>

          <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:50px;padding-top:7px;padding-bottom:7px;">
              <span style="padding-right:30px;">توضیحات : </span><span><?=str_replace('*','',get_info('../theme/'.$Template_directory.'/index.php')['Description']); ?></span>
          </div>

          <div style="background:#ffffff;width:400px;margin-top:20px;margin-right:80px;padding-top:7px;padding-bottom:7px;">
              <div style="float:right;width:120px;height:30px;line-height:27px;background:red;text-align:center;color:#ffffff;text-align:center;font-family:BYekan;border-radius: 12px;"><a href="<?= URL.'/admin/uploadtheme.php?active='.$Template_directory ?>" style="color:#ffffff;">فعال سازی قالب</a></div>
              <div style="float:right;width:120px;height:30px;line-height:27px;background:green;margin-right:20px;text-align:center;color:#ffffff;text-align:center;font-family:BYekan;border-radius: 12px" style="float:right;width:100px;"><a href="<?= URL.'/admin/demo.php?template='.$Template_directory  ?>" style="color:#ffffff;">پیش نمایش قالب</a></div>
          </div>

<?php }
else
{
 ?>

       <div style="color:blue;text-align:center;padding-top:100px;">اگر قالبی در ساختار فشرده (zip) دارید٬ می‌توانید با بارگذاری آن در این بخش٬ آن‌را نصب کنید.</div>
       <div style="width:300px;height:50px;margin:80px auto;">
        <form  method="post" enctype="multipart/form-data">
          <div class="div1">
            <span class="plus">+</span>
            <span class="tem">آپلود قالب</span>
            <input type="file" name="zip_file" class="input1">
          </div>
            <input type="submit" value="نصب" style="border-radius: 12px;margin-top:50px;color:#ffffff">
        </form>

        </div>
        <div style="color:red;padding-top:30px;padding-right:150px;"><?php if(isset($msg)) echo $msg; ?></div>
<?php }
?>
    <div style="clear:both;padding-bottom:20px;"></div>
</div>

</body>
</html>
