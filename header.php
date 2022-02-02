<?php

session_start();
$session_user_id = $_SESSION['id'];

if ($session_user_id < 1)
{
	header("location:index.php");
	exit;
}

require_once("connect.php");
require_once("watchlist_model.php");
$watchlist = new Watchlist();