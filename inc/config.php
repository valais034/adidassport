<?php


$db = mysqli_connect('localhost','adidase-user','123456','adidasecommerce');

if (!$db) {
    echo mysqli_connect_error();

}
mysqli_query($db, "set names 'UTF-8'");
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/
session_start();

define("ADMIN_USERNAME","admin");
define("ADMIN_PASSWORD","135790");
define("PATH","https://localhost:8080/adidassport");
//define("PATH","http://localhost:8888/myFiles/ecommerce/");

require_once 'functions.php';
require_once 'actions.php';
