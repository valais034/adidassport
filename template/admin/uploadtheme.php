<?php

require_once ('../config.php');
require_once ('../connect.php');
require_once ('sidebar.php');
require_once ('header.php');
require_once ('function.php');
require_once ('coding.php');
?>
<style>

#box1
{
    width:1070px;
    margin-top:90px;
    margin-right:300px;
    background:white;
    border-radius:5px;
}

.theme
{
    float:right;
    margin-right:20px;
    margin-top:20px;
}
</style>

<div id="box1">
  <?php
  $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
  $sql->execute(array('Template_directory'));
  $fetch=$sql->fetch();
  $Template_directory=$fetch['option_value'];
  $file='../theme/'.$Template_directory.'/theme_img.png';
  if(file_exists($file))
  {
      ?>
      <div class="theme">
          <div style="width:330px;height:220px;border:1px solid #48ADFF;">
              <img src="<?= $file ?>" width="330" height="220">
          </div>
          <div style="width:100%;background:#000000;height:35px;color:#ffffff;margin-top:0px;font-family:BYekan;">
              <div style="float:right">
                  <span style="font-family:BYekan;margin-right:20px;line-height:35px;">نام قالب : </span><?= str_replace('*','',get_info('../theme/'.$Template_directory.'/index.php')['Theme Name']);  ?></div>
              <div style="width:100px;background:#ffffff;border-radius:5px;float:left;text-align:center;margin-left:10px;margin-top:5px;"><a href="<?= URL.'/admin/customize.php' ?>" style="color:#000000;">سفارشی سازی</a></div>
          </div>
      </div>
    <?php
  }

  $directory = "../theme";
  $files = scandir($directory);
  // die(var_dump($Template_directory));
  foreach($files as $key=>$value)
  {
      if($value!='.' && $value!='..' && $value!=$Template_directory)
      {
          $file='../theme/'.$value.'/theme_img.png';
          ?>
          <div class="theme">
              <div style="width:330px;height:220px;border:1px solid #48ADFF;">
                  <img src="<?= $file ?>" width="330" height="220">
              </div>

              <div style="width:100%;background:#000000;height:35px;color:#ffffff;height:35px;margin-top:0px;font-family:BYekan;"><div style="float:right"><span style="font-family:BYekan;margin-right:20px;line-height:35px;">نام قالب : </span><?= str_replace('*','',get_info('../theme/'.$value.'/index.php')['Theme Name']);  ?></div>
                  <div style="width:70px;background:#ffffff;border-radius:5px;float:right;text-align:center;margin-right:10px;margin-top:5px;"><a href="<?= URL.'/admin/uploadtheme.php?active='.$value ?>" style="color:#000000;">فعال سازی</a></div>
                  <div style="width:80px;background:#ffffff;border-radius:5px;float:right;text-align:center;margin-right:10px;margin-top:5px;"><a href="demo.php?template=<?= $value; ?>" style="color:#000000;">پیش نمایش</a></div>
              </div>
          </div>
      <?php
      }
  }

  ?>
  <div style="clear:both;padding-bottom:20px;"></div>
</div>

<?php
require_once ('footer.php');
