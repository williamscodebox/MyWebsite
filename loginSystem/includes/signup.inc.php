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

        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields";
            // throw new Exception("Empty Input");
        }
        
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = "Invalid Email";
            // throw new Exception("Invalid Email");
        }

        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already exists";
            // throw new Exception("Username already exists");
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email_taken"] = "Account already exists with this email";
            // throw new Exception("Account already exists with this email");
        }

         header("location: ../index.php");
    die();

    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        die("Query failed: " . $errorMessage);
    }

} else {
    header("location: ../index.php");
    die();
}