<?php
$servername = 'sqlite:/home/lautaro/DBIAW/mydatabase.db';
$username = '';
$dbname = '';
$password = '';
try {
    $conn = new PDO($servername, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "[Connected successfully]";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>