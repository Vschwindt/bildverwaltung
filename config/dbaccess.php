<?php

//Db connection mit default login credentials als root
$db_credentials = [
    "server" => "localhost",
    "username" => "root",
    "password" => "",
    "database" => "semesterprojekt2"
];

$dbconnection = mysqli_connect($db_credentials['server'], $db_credentials['username'], $db_credentials['password'], $db_credentials['database']);

if (!$dbconnection) {
    print_r(mysqli_connect_error());
    die("Connection failed: " . mysqli_connect_error());
}
