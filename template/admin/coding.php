<?php
if(isset($_GET['active']))
{
  $sql=$connect->prepare("UPDATE `template`.`options` SET `option_value`=? WHERE `options`.`option_key`='Template_directory'");
  $sql->execute(array($_GET['active']));
}
