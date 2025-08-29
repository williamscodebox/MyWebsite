<?php
require_once 'includes/config_session_inc.php';
require_once 'includes/signup_view.inc.php';
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
    <h3 class="text-center p-4">Login</h3>

    <form action="includes/login.inc.php" method="post" class="flex flex-col items-center justify-center">
        <input class="input m-2" type="text" name="username" placeholder="Username">
        <input class="input m-2" type="password" name="pwd" placeholder="Password">
        <button class="button m-2" type="submit" name="submit">Login</button>
    </form>

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

    
</body>
</html>