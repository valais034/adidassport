
<?php
function pagination()
{
  global $template;
  $template->page = !empty($template->page) ? $template->page :1;
  if($template->total_page()>0)
  {
    echo '<div class="pagination">';
    echo '<div class="page">صفحه '.$template->page.'تا '.$template->total_page().'</div>';
    if($template->page>1)
    {
      echo '<a href="'.$template->paging_url().($template->page-1).'"><div class="page">قبلی</div></a>';
    }
    $paged_start=(($template->page-2>1)?$template->page-2:1);
    $paged_last=(($template->page+2<$template->total_page())?$template->page+2:$template->total_page());
    for($paged_start;$paged_start<=$paged_last;$paged_start++)
    {
        if($paged_start!=$template->page)
        {
            echo '<a href="'.$template->paging_url().$paged_start.'"><div class="page">'.$paged_start.'</div></a>';
        }
        else
        {
            echo '<div class="page" style="color:blue; font-size:20px;">'.$paged_start.'</div>';
        }
    }
    if($template->page<$template->total_page())
    {
      echo '<a href="'.$template->paging_url().($template->page+1).'"><div class="page">بعدی</div></a>';
    }


  }

}
?>
