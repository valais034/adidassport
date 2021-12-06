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
