<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once 'dbh_inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // Error handlers

        if (is_input_empty($username, $pwd, $email) !== false) {
            throw new Exception("Empty Input");
        }
        
        if (is_email_invalid($email) !== false) {
            throw new Exception("Invalid Email");
        }

    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        die("Query failed: " . $errorMessage);
    }

} else {
    header("location: ../index.php");
    die();
}