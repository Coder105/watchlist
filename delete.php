<?php
 
 // ajax  post delete
 
require_once("header.php");

$film_id = $_POST['film']; 

$watchlist_results = $watchlist->delete_record($film_id);
exit;