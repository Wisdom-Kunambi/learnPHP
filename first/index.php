<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <form class="container" action="formHandler.php" method="post">
            <label class="form-label" for="firstname">Firstname?</label>
            <input type="text" id="firstname" name="firstname" class="form-control" required placeholder="Firstname...">

            <label for="lastname" class="form-label">Lastname?</label>
            <input type="text" id="lastname" name="lastname" class="form-control" required placeholder="Lastname...">

            <label for="favouritepet" class="form-label">Favourite Pet?</label>
            <select class="form-select" name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="fish">Fish</option>
            </select>


            <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>

</html>