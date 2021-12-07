<?php

require_once ('../config.php');
require_once ('../connect.php');
require_once ('sidebar.php');
require_once ('header.php');
require_once ('function.php');
require_once ('coding.php');
?>
<style>
    #box
    {
        width:calc(100% - 204px);
        border-radius:5px;
        height:780px;
        position:fixed;
        top:0;
        right:0;
        overflow:hidden;
        z-index:1;
        margin-right:250px;
    }
    iframe
    {
        border: 1px #48ADFF solid;
        height:100%;
        width:100%;
    }
</style>
<?php
if(isset($_GET['template']))
{
  ?>

  <div id="box">
  <iframe src="template.php?template=<?= $_GET['template']; ?>">
  </iframe>

</div>
<?php
}
?>


<?php
require_once ('footer.php');
