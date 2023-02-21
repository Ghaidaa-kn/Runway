<?php

ini_set('memory_limit', '500M');

//error_reporting(0);

date_default_timezone_set("Asia/Damascus");

require("db.class.php");

$full_site_url = '';

$user = 'root';

$password = '';

$server = 'localhost';

$dbname = 'vian';

$db = new db;

$db->connect($dbname , $server , $user , $password);

?>