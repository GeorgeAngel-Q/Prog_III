<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$nmdb = 'gestion_db';

$connection = mysqli_connect($hostname,$user,$password,$nmdb);
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


?>