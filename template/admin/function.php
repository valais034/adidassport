<?php

function get_info($file)
{
  $info=array(
    'Theme Name'=>null,
    'Theme URI'=>null,
    'Author'=>null,
    'Author URI'=>null,
    'Description'=>null
  );

  $fp=@fopen($file,'r');
  if($fp)
  {
    while(($file_line=fgets($fp))!==false)
    {
      if((strpos($file_line,'/*'))!==false) continue;
      else if((strpos($file_line,'*/'))!==false) break;
      foreach($info as $key=>$val)
      {
        $find=$key.':';
        if(strpos($file_line,$find)!==false)
        {
          $info[$key]=trim(str_replace($find,'',$file_line));
        }
      }

    }
  }
  fclose($fp);
  return $info;
}

function get_file($file,$text)
{
  global $connect;
  $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
  $sql->execute(array('Template_directory'));
  $fetch=$sql->fetch();
  $Template_directory=$fetch['option_value'];
  $file1='../theme/'.$Template_directory.'/'.$file;
  if(file_exists($file1))
  {
    echo '<a href="?file='.$file.'" style="color:red;font-family:BYekan;">'.$text.'</a><br><br>';
  }

}

function get_other_files()
{
  global $connect;
  $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
  $sql->execute(array('Template_directory'));
  $fetch=$sql->fetch();
  $Template_directory=$fetch['option_value'];
  $directory ='../theme/'.$Template_directory;
  $files = scandir($directory);
  echo '<p style="color:red;font-family:BYekan;">سایر فایل های قالب</p><br>';
  foreach($files as $key=>$value)
  {
    if($value!='.' && $value!='..' && $value!='404.php' && $value!='footer.php' && $value!='functions.php' && $value!='header.php' && $value!='index.php' && $value!='page.php'  && $value!='single.php')
    {
        if(strpos($value,'.'))
        {
            $a=explode('.',$value);
            if($a[1]=='css' or $a[1]=='js' or $a[1]=='php')
            {
                echo '<a href="?file='.$value.'" style="color:#000000;">'.$value.'</a>'.'<br>';
            }

        }
    }
  }

}
