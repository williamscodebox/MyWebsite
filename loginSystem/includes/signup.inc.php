<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // Error handlers

        if (emptyInputSignup($username, $pwd, $email) !== false) {
            throw new Exception("Empty input");
        }

        if (invalidUid($username) !== false) {
            throw new Exception("Invalid username");
        }

        if (invalidEmail($email) !== false) {
            throw new Exception("Invalid email");
        }

        if (uidExists($conn, $username, $email) !== false) {
            throw new Exception("Username or email already taken");
        }
        
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        die("Query failed: " . $errorMessage);
    }

} else {
    header("location: ../index.php");
    die();
}