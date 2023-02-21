<?php

if (isset($_POST['username']) && isset($_POST['password'])){

	require ("includes/conf.php");

	$login_status = $db->select('SELECT * FROM `users` WHERE username='.$db->sqlsafe($_POST['username']).' AND password='.$db->sqlsafe(md5($_POST['password'])).'');

	if($login_status){

		$md5_user = md5($login_status[0]['username']);

		$md5_pass = md5($login_status[0]['password']);

		$md5_time = md5(time());

		$logged_in_true = md5(substr($md5_user,5,20).substr($md5_pass,5,20).substr($md5_time,5,20));

		$logged_in_false = '';

		if ($login_status){

			setcookie("logged_in", $logged_in_true);

			setcookie("username", $login_status[0]['username']);

			setcookie("session", $md5_pass);

			setcookie("login_time", $md5_time);

			print '<script language="JavaScript">window.location="../index.php";</script>';

			exit;

		}else{

			setcookie("logged_in", "");

			setcookie("username", "");

			setcookie("session", "");

			setcookie("login_time", "");

		}

	}else{

		print '<span class="text-danger">Wrong Username Or Password</span>';

	}

}

?>
