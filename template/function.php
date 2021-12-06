<?php
function get_template()
{
  global $connect;
  $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
  $sql->execute(array('Template_directory'));
  $fetch=$sql->fetch();
  return $Template_directory=$fetch['option_value'];
}
function get_template_uri()
{
  return URL.'/theme/'.get_template().'/';
}

function have_post()
{
  global $template;
  return $template->have_post();
}

function the_post()
{
  global $template;
  return $template->the_post();
}

function post_title()
{
  global $template;
  return $template->post_title();
}

function post_content()
{
  global $template;
  return $template->post_content();
}

function have_posts()
{
  global $connect;
  $sql= $connect->prepare('SELECT * FROM post');
  $sql->execute();
  if($sql->rowCount()>0)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function post_url()
{
  global $template;
  return $template->post_url();
}

function singl_post($url)
{
  global $connect;
  $sql= $connect->prepare('SELECT * FROM post WHERE url=?');
  $sql->execute(array($url));
  if($sql->rowCount()>0)
  {
    global $template;
    $template->url=$url;
    require_once 'theme/'.get_template().'/single.php';
  }
  else
  {

  }
}
