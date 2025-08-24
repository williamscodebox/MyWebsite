<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];  
    $email = $_POST['email'];

    try {
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

} else {

    header("Location: ../index.php");
}