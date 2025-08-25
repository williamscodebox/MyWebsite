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
        <div class="div">
        <!-- <h3 class="pb-1" >Search Account</h3> -->
       
        <form action="search.php" method="post">
            <label for="search">Search for user:</label><br>
            <input class="input" id="search" type="text" name="usersearch" placeholder="Search..."><br>
            <button type="submit" name="submit">Search</button>
        </form>
        </div>
    </div>
</main>    
</body>
</html>