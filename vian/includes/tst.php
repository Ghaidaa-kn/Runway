<?php
require('conf.php');
$res=$db->select('SELECT * FROM `products`WHERE `id`='.$db->sqlsafe(3).'');
		print_r($res);
?>