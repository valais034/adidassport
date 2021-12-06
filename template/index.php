<?php
require_once 'config.php';
require_once 'connect.php';
require_once 'template.php';
$template=new template();
require_once 'function.php';

if(isset($_GET['url']))
{
  $url=$_GET['url'];
  $url=rtrim($url,'/');
  $url=explode('/',$url);

  if(sizeof($url)==1)
  {
    singl_post($url[0]);
  }

}
else
{
  require_once 'theme/'.get_template().'/index.php';
}
