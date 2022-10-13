<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'loginform');

$serverName = "mysql33.dandomain.dk";
//$serverName = "93.191.158.73";
$dbUsername = "alexanderthomsendk";
$dBPassword = "WTwDWgGYt5ZRq4";
$dBName = "alexanderthomsendk_db";

$con = new mysqli($serverName, $dbUsername, $dBPassword, $dBName);


if(!$con){
    echo "Failed to connect to MySQL: " . $con -> connect_error;
}