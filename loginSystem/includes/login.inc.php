<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {   
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        //code...
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        die("Query failed: " . $errorMessage);
    }

} else {
    header("location: ../index.php");
    die();
}