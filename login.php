<?php
 
 // post and redirect login
 
include("connect.php");
session_start();

$username = $_POST['username']; 
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = DB::$mysqli->real_escape_string($username);
$password = DB::$mysqli->real_escape_string($password);

$result = DB::$mysqli->query("SELECT * FROM user WHERE username='$username' and password='$password'");

if ($result->num_rows == 0)
{
	header("location:index.php?error=Invalid login");
	exit;
}

$result_array = $result->fetch_assoc();

$_SESSION['id'] =  $result_array['user_id'];
$_SESSION['username'] =  $result_array['username'];

header("location:home.php");