<?php
 
 // ajax post add
 
require_once("header.php");

$title = $_POST['title']; 
$date = date('Y-m-d' , strtotime($_POST['release_date']));

$watchlist_results = $watchlist->insert_record($session_user_id, $title, $date);
exit;