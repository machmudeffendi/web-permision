<?php 
include'../connection.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$query=mysql_query("insert into temporary_user value('$user','$pass')");
if ($query) {
	header('location:../form-login.php');
}
?>