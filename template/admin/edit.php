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

<div id="box1" style="width:1050px;">

    <div id="box2">
      <?php
      $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
      $sql->execute(array('Template_directory'));
      $fetch=$sql->fetch();
      $Template_directory=$fetch['option_value'];
      $file_name=isset($_GET['file']) ? $_GET['file'] : 'index.php';
      $file='../theme/'.$Template_directory.'/'.$file_name;
      $fp=fopen($file,'r');
      ?>
      <form method="post">
          <textarea name="code"><?php while(($file_line=fgets($fp))!==false) {echo $file_line;} ?></textarea>
          <input type="hidden" name="file" value="<?= $file_name; ?>">
          <input type="submit" value="بروز رسانی">
      </form>
      <?php fclose($fp); ?>
    </div>

    <div id="box3">
      <div style="margin-top:30px;">
        <?php
        get_file('index.php','قالب صفحه اصلی');
        get_file('404.php','قالب صفحه 404');
        get_file('single.php','قالب پست های تکی');
        get_file('page.php','قالب صفحات اضافی');
        get_file('functions.php','توابع قالب');
        get_file('header.php','قسمت هدر قالب');
        get_file('footer.php','قسمت فوتر قالب');
        get_other_files();
        ?>
    </div>
</div>

    <div style="clear:both;padding-bottom:20px;"></div>
</div>

</body>
</html>
