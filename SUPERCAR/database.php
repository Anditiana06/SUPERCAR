<?php

$host = "mysql-anditiana.alwaysdata.net";
$dbname = "anditiana_supercar";
$username = "anditiana";
$password = "J'adorelebriani";

$mysqli = new mysqli($host, $username, $password, $dbname);
                                          
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>