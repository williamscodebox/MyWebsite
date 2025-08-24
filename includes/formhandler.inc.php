<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];  
    $email = $_POST['email'];

    try {
        require_once 'dbh_inc.php';
        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        $stmt = $conn->prepare("$query");
        $stmt->execute([$username, $pwd, $email]);

        $conn = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

} else {

    header("Location: ../index.php");
}