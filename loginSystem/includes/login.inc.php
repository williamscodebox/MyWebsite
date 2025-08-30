<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {   
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'dbh_inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        
        // Error handlers

        $errors = [];   
        
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields";
            // throw new Exception("Empty Input");
        }

        $user = get_user($pdo, $username);
        // error_log(print_r($user["pwd"], true));

        echo "<script>console.log(" . json_encode($user) . ");</script>";

        

        if (is_username_wrong($user)) {
            $errors["login_incorrect"] = "Incorrect login info";
            // throw new Exception("login incorrect");
        }
            
        if (is_username_wrong($user) || is_password_wrong($pwd, $user["pwd"])) {
                 $errors["login_incorrect"] = "Incorrect login info";
            } 

        require_once 'config_session_inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
          
            header("location: ../index.php");
            $pdo = null;
            $stmt = null;
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $user["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = htmlspecialchars($user["username"]);
        
        $_SESSION['last_regeneration'] = time();

        header("location: ../index.php?login=success");

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