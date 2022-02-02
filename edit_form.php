<?php
 
 // ajax post edit form
 
require_once("header.php");

$film_id = $_POST['film']; 

$watchlist_record = $watchlist->get_record($film_id);
include("edit_view.php");
exit;