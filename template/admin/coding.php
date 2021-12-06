<?php
if(isset($_GET['active']))
{
  $sql=$connect->prepare("UPDATE `template`.`options` SET `option_value`=? WHERE `options`.`option_key`='Template_directory'");
  $sql->execute(array($_GET['active']));
}

if(isset($_POST['code']))
{
  $file = $_POST['file'];
  $code = $_POST['code'];
  $sql=$connect->prepare('SELECT * FROM options WHERE option_key=?');
  $sql->execute(array('Template_directory'));
  $fetch=$sql->fetch();
  $Template_directory=$fetch['option_value'];
  $file='../theme/'.$Template_directory.'/'.$file;
  $fo=fopen($file,'w');
  fwrite($fo,$code);
  fclose($fo);

}
