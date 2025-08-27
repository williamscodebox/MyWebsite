<?php

// $dsn = "mysql:host=localhost;dbname=tutorial";
$host = "localhost";
$dbname="tutorial";
$dbusername = "root";
$dbpassword = "";

try {
    // $conn = new PDO($dsn, $dbusername, $dbpassword);
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// dbh stands for database handler