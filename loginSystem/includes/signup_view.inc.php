<?php

declare(strict_types=1);

function check_signup_errors(): void {
    // session_start();

    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="text-center text-red-500">' . htmlspecialchars($error) . '</p>';
        }
        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo '<p class="text-center text-green-500">Signup successful!</p>';
    }
}
