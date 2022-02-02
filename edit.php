<?php
 
 // ajax post edit
 
require_once("header.php");

$film_id = $_POST['film']; 
$title = $_POST['title']; 
$date = date('Y-m-d' , strtotime($_POST['release_date']));

$data = ['title' => $_POST['title'], 'release_date' => $date]; 
$result = $watchlist->update_record($film_id, $data);
exit;