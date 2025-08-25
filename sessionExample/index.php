<?php
require_once "config.php";
// session_start();

// $_SESSION['username'] = "JohnDoe";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>    
<main class="page flex flex-row items-center justify-around">
    
    <div class="main flex flex-col items-center justify-center">
      <?php
      echo "Session is set for user: " . $_SESSION['username'];
      ?>
        </div>
    </div>
</main>    
</body>
</html>