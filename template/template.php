<?php

class template
{

  private $i=-1;
  private $j=-1;
  public $url=null;
  public $category=null;
  public function have_post()
  {
    global $connect;
    if(!empty($this->category))
    {
      $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
      $category->execute(array($this->category));
      $fetch=$category->fetch();
      $id=$fetch['id'];
      $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=?');
      $sql->execute(array($id));
      $row = $sql->rowCount();
      return $this->i<--$row;
    }
    else
    {
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



  }

  public function the_post()
  {
    $this->i++;
  }

  public function post_title()
  {
    global $connect;
    if(!empty($this->category))
    {
      $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
      $category->execute(array($this->category));
      $fetch=$category->fetch();
      $id=$fetch['id'];
      $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=?');
      $sql->execute(array($id));
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['title'];
    }
    else
    {
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

  }

  public function post_content()
  {
    global $connect;
    if(!empty($this->category))
    {
      $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
      $category->execute(array($this->category));
      $fetch=$category->fetch();
      $id=$fetch['id'];
      $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=?');
      $sql->execute(array($id));
      $fetch=$sql->fetchAll();
      return $fetch[$this->i]['title'];
    }
    else
    {
    }
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

  public function have_menu()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM category');
    $sql->execute();
    $row = $sql->rowCount();
    return $this->j<--$row;

  }

  public function the_menu()
  {
    $this->j++;
  }

  public function get_menu_name()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM category');
    $sql->execute();
    $fetch=$sql->fetchAll();
    return $fetch[$this->j]['name'];

  }

  public function get_menu_url()
  {
    global $connect;
    $sql=$connect->prepare('SELECT * FROM category');
    $sql->execute();
    $fetch=$sql->fetchAll();
    return URL.'/category/'.$fetch[$this->j]['ename'];

}

public function have_posts()
{
    if(!empty($this->category))
    {
        global $connect;
        $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
        $category->execute(array($this->category));
        $fetch=$category->fetch();
        $id=$fetch['id'];
        $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=?');
        $sql->execute(array($id));
        if($sql->rowCount()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        global $connect;
        $sql=$connect->prepare('SELECT * FROM post');
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
}

}
