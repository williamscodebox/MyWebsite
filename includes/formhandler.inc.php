<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];  
    $email = $_POST['email'];

    try {
        require_once 'dbh_inc.php';
        // with unnamed placeholders
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        // $stmt = $conn->prepare("$query");
        // $stmt->execute([$username, $pwd, $email]);

        // $stmt->execute([$username, $pwd, $email]);

        // with named placeholders
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
        $stmt = $conn->prepare("$query");

        // Hashing the password before storing it in the database
        
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, ['cost' => 12]);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $hashedPwd); 
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();

        // code continues here

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