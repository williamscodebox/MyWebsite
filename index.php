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
    <main class="main flex flex-col items-center justify-center">
        <div class="div">
        <!-- <h3 class="pb-1" >Signup</h3> -->
       
        <form action="includes/formhandler.inc.php" method="post">
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="pwd" placeholder="Password"><br>
            <input class="input" type="text" name="email" placeholder="E-Mail"><br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </div>
    </main>
</body>
</html>