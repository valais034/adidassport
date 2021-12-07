<?php
session_start();
$Template=$_GET['template'];
define('Template',$Template);
$_SESSION['Template']=$Template;
require_once('../config.php');
require_once('../connect.php');
require_once('../template.php');
require_once('../function.php');
$template=new template();
$file='../theme/'.$Template.'/index.php';
require_once($file);
