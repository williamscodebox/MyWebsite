<?php
require_once 'includes/config_session_inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <h3 class="text-center p-4 mt-60">
        <?php 
        output_username(); 
        ?>
    </h3>

    <?php
    if (!isset($_SESSION["user_id"])) { ?>

    <h3 class="text-center p-4">Login</h3>

    <form action="includes/login.inc.php" method="post" class="flex flex-col items-center justify-center">
        <input class="input m-2" type="text" name="username" placeholder="Username">
        <input class="input m-2" type="password" name="pwd" placeholder="Password">
        <button class="button m-2" type="submit" name="submit">Login</button>
    </form>

    <?php
    }
    ?>

    <?php
    check_login_errors();
    ?>

    <h3 class="text-center p-4">Signup</h3>

    <form action="includes/signup.inc.php" method="post" class="flex flex-col items-center justify-center">
        <?php
        signup_inputs();
        ?>
        <!-- <input class="input m-2" type="text" name="username" placeholder="Username">
        <input class="input m-2" type="password" name="pwd" placeholder="Password">
        <input class="input m-2" type="text" name="email" placeholder="E-Mail"> -->
        <button class="button m-2" type="submit" name="submit">Sign Up</button>
    </form>

    <?php
    check_signup_errors();
    ?>    
    
    <h3 class="text-center p-4">Logout</h3>

    <form action="includes/logout.inc.php" method="post" class="flex flex-col items-center justify-center mb-20">
        <button class="button m-2" type="submit" name="submit">Logout</button>
    </form>

    
</body>
</html>