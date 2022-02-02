<?php 

require_once("header.php");

$watchlist_results = $watchlist->get_list($session_user_id);
include("home_view.php");
?>

