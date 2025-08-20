<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<main class="main flex flex-col items-center justify-center">
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">FirstName?</label>
        <input class="input" type="text" id="firstname" name="firstname" placeholder="Firstname..." required>

        <label for="lastname">LastName?</label>
        <input class="input" type="text" id="lastname" name="lastname" placeholder="Lastname..." required>

        <label for="favouritepet">Favourite Pet?</label>\
        <select class="input id="favouritepet" name="favouritepet">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="fish">Fish</option>
            <option value="bird">Bird</option>
        </select>
        
        <button class="button" type="submit">Submit</button>
    </form>
</main>
</body>
</html>