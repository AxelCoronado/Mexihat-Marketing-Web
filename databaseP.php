<?php

$server = 'localhost,1433';
$username = 'Mexihat';
$password = 'Mexihat123';
$database = 'Mexihat';

try {
  $conn = new PDO("sqlsrv:Server=$server;Database=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
