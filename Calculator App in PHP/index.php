<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //grab data from inputs
        $num01 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //error handlers
        $errors = false;

        if (empty($num01) || empty($num02)  || empty($operator)) {
            echo "<p class='error'>Please fill in all fields</p>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='error'>Please enter valid numbers</p>";
            $errors = true;
        }

        // Calculate the numbers if no errors
        if (!$errors) {
            $result = 0;
            switch ($operator) {
                case "add":
                    $result = $num01 + $num02;
                    break;
                case "subtract":
                    $result = $num01 - $num02;
                    break;
                case "multiply":
                    $result = $num01 * $num02;
                    break;
                case "divide":
                    $result = $num01 / $num02;
                    break;
                default:
                    echo "<p class='error'>Invalid operator</p>";
                    break;
            }

            echo "<p class='calc-result'>Result = " . $result . "</p>";
        }
    }

    ?>
</body>

</html>