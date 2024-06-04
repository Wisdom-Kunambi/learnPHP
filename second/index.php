<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form class="container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="num01" placeholder="Number 01" class="form-control" required>
        <select class="form-select mt-3"  name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number 02" class="form-control mt-3" required>
        <button class="btn btn-success mt-3">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Grab Data from Input
        $num01 = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);

        // error handlers
        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='text-danger'>Please fill in all fields</p>";

            $errors = true;

        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='text-danger'>Please enter a number</p>";

            $errors = true;
        }

        // Calculate the number if no errors
        if (!$errors) {
            $result = 0;

            switch ($operator) {
                case 'add':
                    $result = $num01 + $num02;
                    break;
                case 'subtract':
                    $result = $num01 - $num02;
                    break;
                case 'multiply':
                    $result = $num01 * $num02;
                    break;
                case 'divide':
                    $result = $num01 / $num02;
                    break;
                default:
                    echo  "<p class='text-danger'>Please select an operator</p>";

            }

            echo "<p class='text-success'>The result is: " . $result . "</p>";
        }


    }
    ?>
</body>

</html>