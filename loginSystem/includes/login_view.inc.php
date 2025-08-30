<?php

declare(strict_types=1);

function output_username(): void {
    if (isset($_SESSION["user_id"])) {
        echo 'You are logged in as "' . htmlspecialchars($_SESSION["username"]) . '"';
    }else {
        echo 'You are not logged in';
    }
}

function check_login_errors(): void {
    // session_start();

    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="text-center text-red-500">' . htmlspecialchars($error) . '</p>';
        }
        unset($_SESSION["errors_login"]);
    }
    else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo "<br>";
        echo '<p class="text-center text-green-500">Login successful!</p>';
    }
}