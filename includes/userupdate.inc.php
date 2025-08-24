<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];  
    $email = $_POST['email'];

    try {
        require_once 'dbh_inc.php';
       
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 5;";
        // Must change the id above to the id of the user you want to update
        // In a real application, you would typically get this from the session
        $stmt = $conn->prepare("$query");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd); 
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