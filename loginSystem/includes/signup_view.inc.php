<?php

declare(strict_types=1);

function signup_inputs(): void {
        $data = $_SESSION["signup_data"] ?? [];

        if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
            $username = htmlspecialchars($data["username"] ?? "");
            echo '  <input class="input m-2" type="text" name="username" placeholder="Username" value="' . $username . '">';
        } else {
            echo '<input class="input m-2" type="text" name="username" placeholder="Username">';
        }

        echo '<input class="input m-2" type="password" name="pwd" placeholder="Password">';

       if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_taken"]) && !isset($_SESSION["errors_signup"]["email_invalid"])) {
            $email = htmlspecialchars($data["email"] ?? "");
            echo '<input class="input m-2" type="text" name="email" placeholder="E-Mail" value="' . $email . '">';
            unset($_SESSION["signup_data"]);
        } else {
            echo '<input class="input m-2" type="text" name="email" placeholder="E-Mail">';

        }
}

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
