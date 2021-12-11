<?php

class template
{

  private $i=-1;
  private $j=-1;
  public $url=null;
  public $category=null;
  public $page=null;
  public function have_post()
  {
    global $connect;
    if(!empty($this->category))
    {
        if(empty($this->page))
        {
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT 0,2');
            $sql->execute(array($id));
            $row=$sql->rowCount();
            return $this->i<--$row;
        }
        else
        {
            $limit=($this->page-1)*2;
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT '.$limit.',2');
            $sql->execute(array($id));
            $row=$sql->rowCount();
            return $this->i<--$row;
        }

    }
    else
    {
        if(empty($this->url))
        {
            if(empty($this->page))
            {
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT 0,2 ');
                $sql->execute();
                $row=$sql->rowCount();
                return $this->i<--$row;
            }
            else
            {
                $limit=($this->page-1)*2;
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT '.$limit.',2 ');
                $sql->execute();
                $row=$sql->rowCount();
                return $this->i<--$row;
            }


        }
        else
        {
            $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
            $sql->execute(array($this->url));
            $row=$sql->rowCount();
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
        if(empty($this->page))
        {
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT 0,2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return $fetch[$this->i]['title'];
        }
        else
        {
            $limit=($this->page-1)*2;
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT '.$limit.',2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return $fetch[$this->i]['title'];
        }


    }
    else
    {
        if(empty($this->url))
        {
            if(empty($this->page))
            {
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT 0,2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return $fetch[$this->i]['title'];
            }
            else
            {
                $limit=($this->page-1)*2;
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT '.$limit.',2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return $fetch[$this->i]['title'];
            }

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
        if(empty($this->page))
        {
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT 0,2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return $fetch[$this->i]['content'];
        }
        else
        {
            $limit=($this->page-1)*2;
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT '.$limit.',2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return $fetch[$this->i]['content'];
        }
    }
    else
    {
        if(empty($this->url))
        {
            if(empty($this->page))
            {
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT 0,2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return $fetch[$this->i]['content'];
            }
            else
            {
                $limit=($this->page-1)*2;
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC  LIMIT '.$limit.',2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return $fetch[$this->i]['content'];
            }

        }
        else
        {
            $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
            $sql->execute(array($this->url));
            $fetch=$sql->fetchAll();
            return $fetch[$this->i]['content'];
        }
    }


}
public function post_url()
{
    global $connect;
    if(!empty($this->category))
    {
        if(empty($this->page))
        {
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT 0,2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return URL.'/'.$fetch[$this->i]['url'];
        }
        else
        {
            $limit=($this->page-1)*2;
            $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
            $category->execute(array($this->category));
            $fetch=$category->fetch();
            $id=$fetch['id'];

            $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC LIMIT '.$limit.',2');
            $sql->execute(array($id));
            $fetch=$sql->fetchAll();
            return URL.'/'.$fetch[$this->i]['url'];
        }
    }
    else
    {
        if(empty($this->url))
        {
            if(empty($this->page))
            {
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC LIMIT 0,2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return URL.'/'.$fetch[$this->i]['url'];
            }
            else
            {
                $limit=($this->page-1)*2;
                $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC  LIMIT '.$limit.',2');
                $sql->execute();
                $fetch=$sql->fetchAll();
                return URL.'/'.$fetch[$this->i]['url'];
            }

        }
        else
        {
            $sql=$connect->prepare('SELECT * FROM post WHERE url=?');
            $sql->execute(array($this->url));
            $fetch=$sql->fetchAll();
            return URL.'/'.$fetch[$this->i]['url'];
        }
    }


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

  public function paging($page)
  {
      global $connect;
      if(empty($this->category))
      {
          $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC');
          $sql->execute();
          $row=$sql->rowCount();
          $k=2;
          if($page<=ceil($row/$k) && $page>0)
          {
              return $this->page=$page;
          }
          else
          {
              return false;
          }
      }
      else
      {
          $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
          $category->execute(array($this->category));
          $fetch=$category->fetch();
          $id=$fetch['id'];
          $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC');
          $sql->execute(array($id));
          $row=$sql->rowCount();
          $k=1;
          if($page<=ceil($row/$k) && $page>0)
          {
              return $this->page=$page;
          }
          else
          {
              return false;
          }
      }

  }

  public function total_page()
  {
      global $connect;
      if(empty($this->category))
      {
          $sql=$connect->prepare('SELECT * FROM post ORDER BY id DESC');
          $sql->execute();
          $row=$sql->rowCount();
          $k=2;
          return ceil($row/$k);
      }
      else
      {
          $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
          $category->execute(array($this->category));
          $fetch=$category->fetch();
          $id=$fetch['id'];
          $sql=$connect->prepare('SELECT * FROM post WHERE menu_id=? ORDER BY id DESC');
          $sql->execute(array($id));
          $row=$sql->rowCount();
          $k=2;
          return ceil($row/$k);
      }

  }
  public function get_menu($ename)
  {
      global $connect;
      $category=$connect->prepare('SELECT * FROM category WHERE ename=?');
      $category->execute(array($ename));
      if($category->rowCount()>0)
      {
          return true;
      }
      else
      {
          return false;
      }
  }

  public function paging_url()
  {
      if(empty($this->category))
      {
          return URL.'/page/';
      }
      else
      {
          return URL.'/category/'.$this->category.'/page/';
      }
  }

}
