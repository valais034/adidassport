<?php
session_start();

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
  elseif(sizeof($url)==2)
  {
    if($url[0]=='category')
    {
      $template->category=$url[1];
      require_once 'theme/'.get_template().'/index.php';
    }
    elseif($url[0]=='page')
    {
        if($template->paging($url[1])==false)
        {
            
        }
        else
        {
            require_once 'theme/'.get_template().'/index.php';
        }
    }
  }
}
else
{

  require_once 'theme/'.get_template().'/index.php';
}
