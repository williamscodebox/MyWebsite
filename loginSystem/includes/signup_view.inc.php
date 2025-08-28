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
    }
}
