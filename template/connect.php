<?php

$dns='mysql:host='.HOST.';dbname='.DB_NAME.';charset=utf8';

try
{
  $connect=new PDO($dns,DB_USER,DB_PASS);
}
catch (PDOException $e)
{
 exit ($e->getMessage());
}
