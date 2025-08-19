<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<main>
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">FirstName?</label>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname..." required>

        <label for="lastname">LastName?</label>
        <input type="text" id="lastname" name="lastname" placeholder="Lastname..." required>

        <label for="favouritepet">Favourite Pet?</label>\
        <select id="favouritepet" name="favouritepet">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="fish">Fish</option>
            <option value="bird">Bird</option>
        </select>
        
        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>