<?php

$server = '192.168.100.107:3306';
$username = 'adminMexihat';
$password = 'admin123';
$database = 'Mexihat';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
