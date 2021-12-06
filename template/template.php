<?php

class template
{

  private $i=-1;
  public $url=null;
  public function have_post()
  {
    global $connect;
    if(empty($this->url))
    {
      $sql=$connect->prepare('SELECT * FROM post');
      $sql->execute();
      $row = $sql->rowCount();
      return $this->i<--$row;

    }
    else
    {
      $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
      $sql->execute(array($this->url));
      $row = $sql->rowCount();
      return $this->i<--$row;
    }


  }

  public function the_post()
  {
    $this->i++;
  }

  public function post_title()
  {
    global $connect;
    if(empty($this->url))
    {
      $sql=$connect->prepare('SELECT * FROM post');
      $sql->execute();
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['title'];
    }
    else
    {
      $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
      $sql->execute(array($this->url));
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['title'];

    }

  }

  public function post_content()
  {
    global $connect;
    if(empty($this->url))
    {
      $sql=$connect->prepare('SELECT * FROM post');
      $sql->execute();
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['content'];
    }
    else
    {
      $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
      $sql->execute(array($this->url));
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['content'];

    }
  }

  public function post_url()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM post');
    $sql->execute();
    $fetch=$sql->fetchAll();
    return URL.'/'.$fetch[$this->i]['url'];

  }
}
