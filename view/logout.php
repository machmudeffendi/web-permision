<?php 
	include 'connection.php';
	session_start();
	
	// update status user when logout
	mysql_query("UPDATE user SET status=0 WHERE username='$_SESSION[username]'");

	unset($_SESSION['username']);
	session_destroy();
	header("location:form-login.php");
?>