<?php

$server = 'localhost:3306';
$username = 'adminMexihat';
$password = 'admin123';
$database = 'Mexihat';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
