<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];  

    try {
        require_once 'dbh_inc.php';
      
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
        $stmt = $conn->prepare("$query");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd); 
        
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