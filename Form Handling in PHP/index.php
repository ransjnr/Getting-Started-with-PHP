<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input required id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favoritepet">Favorite pet?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none">None</option>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>

</body>

</html>