<?php

class Watchlist {

	public function get_list($user_id)
	{
		$result = DB::$mysqli->query("SELECT * FROM film WHERE user_id='$user_id' ORDER BY release_date ASC");
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	// ------------------------------------------------------------------------
	
	public function get_record($film_id)
	{
		$result = DB::$mysqli->query("SELECT * FROM film WHERE film_id='$film_id'");
		return $result->fetch_assoc();
	}

	// ------------------------------------------------------------------------

	public function insert_record($user_id, $title, $date)
	{
		return DB::$mysqli->query("INSERT INTO film (user_id, title, release_date) VALUES ('$user_id', '$title','$date')");
	}

	// ------------------------------------------------------------------------

	public function update_record($film_id, $data)
	{
		$query_arr = [];
		foreach ($data as $key => $value)
		{
			$query_arr[] = "$key = '$value'";
		}
		$sql = "UPDATE film SET ";
		$sql .= implode(', ', $query_arr);
		$sql .= " WHERE film_id='$film_id'";
		
		return DB::$mysqli->query($sql);
	}

	// ------------------------------------------------------------------------

	public function delete_record($film_id)
	{
		$result = DB::$mysqli->query("DELETE from film WHERE film_id='$film_id'");
		return $result;
	}
	
}