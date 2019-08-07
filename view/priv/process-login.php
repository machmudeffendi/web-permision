<?php 
	session_start();
	include '../connection.php';

	$login = mysql_query("select*from user where (username='$_POST[username]') and (password='$_POST[password]')");
	$rowcount = mysql_num_rows($login);
	if ($rowcount == 1) {
		$_SESSION['username'] = $_POST['username'];
		header('location: ../index.php');
	}
	else {
		header('location: ../form-login.php');	
	}
?>