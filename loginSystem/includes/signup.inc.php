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
            $errors["email_invalid"] = "Invalid Email used";
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

        require_once 'config_session_inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            $signup_data = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signup_data;
            header("location: ../index.php");
            $pdo = null;
            $stmt = null;
            die();
        }

        create_user($pdo, $username, $pwd, $email);
        
        header("location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        die("Query failed: " . $errorMessage);
    }

} else {
    header("location: ../index.php");
    die();
}