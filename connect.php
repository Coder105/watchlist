<?php

class DB {
    public static $mysqli;
}

DB::$mysqli = new mysqli("localhost", "root", "", "watchlist");

?>